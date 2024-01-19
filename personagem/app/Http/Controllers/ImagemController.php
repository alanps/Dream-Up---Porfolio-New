<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Requests\Imagem as ImagemRequest;
use Models\Album;
use Models\Imagem;
use Models\Animacao;
use Helpers\Api;
use Helpers\Decorator;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImagemController extends Controller
{

    public function pagina(ImagemRequest $request, $slug)
    {
        $album = Album::where("slug", "=", $slug)->first();

        $salvar_qtd_cliques = new Album();
        $salvar_qtd_cliques->id = $album->id;
        $salvar_qtd_cliques->qtd_cliques = $album->qtd_cliques+1;
        $salvar_qtd_cliques->exists = true;
        $salvar_qtd_cliques->save();

        if ($album->slug == "animacoes_sa"){

            $page_size = $request->page_size ?: 40;
            $animacoes = Animacao::join("albums", "albums.id", "=", "animacoes.album_id")->select(["animacoes.qtd_cliques", "animacoes.descricao", "animacoes.url", "animacoes.album_id", "animacoes.grupo", "animacoes.id", "animacoes.updated_at", "albums.nome as album_nome", "albums.nome_min as album_nome_min", "albums.slug as album_slug","albums.tipo as album_tipo", "albums.id as album_id", "albums.descricao as album_descricao"]);
            $animacoes = $animacoes->orderby("animacoes.id", "asc")->where("albums.slug", "=", $slug)->paginate($page_size);

            if (isset($animacoes[0]) && $animacoes[0]->album_id == 14){
                $total = Animacao::join("albums", "albums.id", "=", "animacoes.album_id")->where("albums.slug", "=", $slug)->groupBy("animacoes.grupo")->get();
            } else {
                $total = Animacao::join("albums", "albums.id", "=", "animacoes.album_id")->where("albums.slug", "=", $slug)->get();
            }

            $layout = [
                "page_size" => $page_size,
                "total" => count($total),
                "imagens" => $animacoes,
                "album" => $album
            ];

        } else {

            $page_size = $request->page_size ?: 40;
            $imagens = Imagem::join("albums", "albums.id", "=", "imagens.album_id")->select(["imagens.qtd_cliques", "imagens.descricao", "imagens.url", "imagens.album_id", "imagens.grupo", "imagens.id", "imagens.updated_at", "albums.nome as album_nome", "albums.nome_min as album_nome_min", "albums.slug as album_slug","albums.tipo as album_tipo", "albums.id as album_id", "albums.descricao as album_descricao"]);
            $imagens = $imagens->orderby("imagens.id", "asc")->where("albums.slug", "=", $slug)->paginate($page_size);

            if (isset($imagens[0]) && $imagens[0]->album_id == 14){
                $total = Imagem::join("albums", "albums.id", "=", "imagens.album_id")->where("albums.slug", "=", $slug)->groupBy("imagens.grupo")->get();
            } else {
                $total = Imagem::join("albums", "albums.id", "=", "imagens.album_id")->where("albums.slug", "=", $slug)->get();
            }

            $layout = [
                "page_size" => $page_size,
                "total" => count($total),
                "imagens" => $imagens,
                "album" => $album
            ];

        }

        return view("pagina", $layout);
    }

    public function clickImg(ImagemRequest $request, $imagem)
    {
        $img = Imagem::where("id", "=", $imagem)->first();

        $salvar_qtd_cliques = new Imagem();
        $salvar_qtd_cliques->id = $img->id;
        $salvar_qtd_cliques->qtd_cliques = $img->qtd_cliques+1;
        $salvar_qtd_cliques->exists = true;
        $salvar_qtd_cliques->save();

        return Api::json(true, "Click contabilizado com sucesso.");
    }

    public function listarImagemAlbum(ImagemRequest $request, $slug)
    {
        $page_size = $request->page_size ?: 40;
        $decorators = Decorator::include(Imagem::class, $request);
        $imagens = Imagem::with($decorators); //eager loading
        $imagens = $imagens->join("albums", "albums.id", "=", "imagens.album_id")->select(["imagens.qtd_cliques", "imagens.descricao", "imagens.url", "imagens.album_id", "imagens.grupo", "imagens.id", "imagens.updated_at", "albums.nome as album_nome", "albums.slug as album_slug", "albums.tipo as album_tipo", "albums.id as album_id", "albums.descricao as album_descricao"])->orderby("imagens.id", "asc")->where("albums.slug", "=", $slug);
        $imagens = $imagens->paginate($page_size);

        return Api::json(true, "Imagens listadas com sucesso.", $imagens);
    }

    public function listarImagems(ImagemRequest $request)
    {
        $page_size = $request->page_size ?: 10;
        $decorators = Decorator::include(Imagem::class, $request);
        $imagens = Imagem::with($decorators); //eager loading
        $imagens = $imagens->orderby("id", "desc");
        $imagens = $imagens->paginate($page_size);

        return Api::json(true, "Imagens listadas com sucesso.", $imagens);
    }

    public function listarImagem(ImagemRequest $request, Imagem $imagem)
    {
        $decorators = Decorator::decorators(Imagem::class, $request);
        $imagem->load($decorators);

        $appends = Decorator::appends(Imagem::class, $request);
        $imagem->setAppends($appends);

        return Api::json(true, "Imagem listada com sucesso.", $imagem);
    }

    public function criarImagem(ImagemRequest $request)
    {
        $user = auth('api')->user();
        $input = $request->all();
        if ($request->hasFile('imagem')) {

            if (isset($input['grupo'])){

                $imagem_return = array();
                foreach ($request->file('imagem') as $img) {
                    $filename = $img->getClientOriginalName();
                    $upload = $img->storeAs('album'.$input["album_id"].'/'.$input["grupo"], $filename);

                    $imagem = new Imagem($input);
                    $imagem->user_id = $user->id;
                    $imagem->url = $upload;
                    $imagem->save();

                    $decorators = Decorator::decorators(Imagem::class, $request);
                    $imagem_return[] = $imagem->load($decorators);

                    $appends = Decorator::appends(Imagem::class, $request);
                    $imagem->setAppends($appends);
                }

            } else {

                $filename = $request->imagem->getClientOriginalName();
                $upload = $request->imagem->storeAs('album'.$input["album_id"], $filename);

                $imagem = new Imagem($input);
                $imagem->user_id = $user->id;
                $imagem->url = $upload;
                $imagem->save();

                $decorators = Decorator::decorators(Imagem::class, $request);
                $imagem_return = Imagem::with($decorators);

                $imagem_return = $imagem_return->find($imagem->id);

                $appends = Decorator::appends(Imagem::class, $request);
                $imagem_return->each(function($item) use ($appends) {
                    $item->setAppends($appends);
                });

            }

            return Api::json(true, "Imagem cadastrada com sucesso.", $imagem_return, 201);
        } else {
            return Api::json(true, "Essa imagem não é válida.");
        }
    }

    public function editarImagem(ImagemRequest $request, Imagem $imagem)
    {
        $input = $request->all();

        $imagem->update($input);

        $decorators = Decorator::decorators(Imagem::class, $request);
        $imagem_return = Imagem::with($decorators);

        $imagem_return = $imagem_return->find($imagem->id);

        $appends = Decorator::appends(Imagem::class, $request);
        $imagem_return->each(function($item) use ($appends) {
            $item->setAppends($appends);
        });

        return Api::json(true, "Imagem atualizada com sucesso.", $imagem_return);
    }

    public function deletarImagem(ImagemRequest $request, Imagem $imagem)
    {
        $imagem->delete();
        return Api::json(true, "Imagem deletada com sucesso.", $imagem);
    }

    public function deletarImagems(ImagemRequest $request, Imagem $imagem)
    {
        $ids = $request->input("ids");
        $ids = explode(',', $ids);

        $array_imagems = array();
        foreach ($ids as $id) {
            $imagem = Imagem::where('id', '=', $id)->first();
            if ($imagem) {
                $array_imagems[] = $imagem;
                $imagem->delete();
            }
        }

        return Api::json(true, "Imagems deletadas com sucesso.", $array_imagems);
    }

}
