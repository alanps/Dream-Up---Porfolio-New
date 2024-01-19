<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Requests\Animacao as AnimacaoRequest;
use Models\Album;
use Models\Imagem;
use Models\Animacao;
use Helpers\Api;
use Helpers\Decorator;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AnimacaoController extends Controller
{

    public function listarAnimacoes(AnimacaoRequest $request)
    {
        $page_size = $request->page_size ?: 10;
        $decorators = Decorator::include(Animacao::class, $request);
        $animacoes = Animacao::with($decorators); //eager loading
        $animacoes = $animacoes->orderby("id", "desc");
        $animacoes = $animacoes->paginate($page_size);

        return Api::json(true, "Animações listadas com sucesso.", $animacoes);
    }

    public function listarAnimacao(AnimacaoRequest $request, Animacao $animacao)
    {
        $decorators = Decorator::decorators(Animacao::class, $request);
        $animacao->load($decorators);

        $appends = Decorator::appends(Animacao::class, $request);
        $animacao->setAppends($appends);

        return Api::json(true, "Animação listada com sucesso.", $animacao);
    }

    public function criarAnimacao(AnimacaoRequest $request)
    {
        $user = auth('api')->user();
        $input = $request->all();
        $anims = array();
        if ($request->hasFile('animacao')) {

            $animacao_return = array();
            foreach ($request->file('animacao') as $anima) {
                $filename = $anima->getClientOriginalName();
                $upload = $anima->storeAs('animacao/'.$input["grupo"], $filename);

                $animacao = new Animacao($input);
                $animacao->user_id = $user->id;
                $animacao->url = $upload;
                $animacao->save();

                $decorators = Decorator::decorators(Animacao::class, $request);
                $animacao_return[] = $animacao->load($decorators);

                $appends = Decorator::appends(Animacao::class, $request);
                $animacao->setAppends($appends);
            }

            return Api::json(true, "Animação cadastrada com sucesso.", $animacao_return, 201);
        } else {
            return Api::json(true, "Essa animação não é válida.");
        }
    }

    public function editarAnimacao(AnimacaoRequest $request, Animacao $animacao)
    {
        $input = $request->all();

        $animacao->update($input);

        $decorators = Decorator::decorators(Animacao::class, $request);
        $animacao_return = Animacao::with($decorators);

        $animacao_return = $animacao_return->find($animacao->id);

        $appends = Decorator::appends(Animacao::class, $request);
        $animacao_return->each(function($item) use ($appends) {
            $item->setAppends($appends);
        });

        return Api::json(true, "Animação atualizada com sucesso.", $animacao_return);
    }

    public function deletarAnimacao(AnimacaoRequest $request, Animacao $animacao)
    {
        $animacao->delete();
        return Api::json(true, "Animação deletada com sucesso.", $animacao);
    }

    public function deletarAnimacoes(AnimacaoRequest $request, Animacao $animacao)
    {
        $ids = $request->input("ids");
        $ids = explode(',', $ids);

        $array_animacoes = array();
        foreach ($ids as $id) {
            $animacao = Animacao::where('id', '=', $id)->first();
            if ($animacao) {
                $array_animacoes[] = $animacao;
                $animacao->delete();
            }
        }

        return Api::json(true, "Animacaos deletadas com sucesso.", $array_animacoes);
    }

}
