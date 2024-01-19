<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Requests\Album as AlbumRequest;
use Models\Album;
use Models\Imagem;
use Models\Animacao;
use Helpers\Api;
use Helpers\Decorator;

class AlbumController extends Controller
{

    public function listarAlbums(AlbumRequest $request)
    {
        $page_size = $request->page_size ?: 10;
        $decorators = Decorator::include(Album::class, $request);
        $albums = Album::with($decorators); //eager loading
        $albums = $albums->orderby("id", "desc");
        $albums = $albums->paginate($page_size);

        return Api::json(true, "Albums listados com sucesso.", $albums);
    }

    public function listarAlbum(AlbumRequest $request, Album $album)
    {
        $decorators = Decorator::decorators(Album::class, $request);
        $album->load($decorators);

        $appends = Decorator::appends(Album::class, $request);
        $album->setAppends($appends);

        return Api::json(true, "Album listado com sucesso.", $album);
    }

    public function criarAlbum(AlbumRequest $request)
    {
        $user = auth('api')->user();
        $input = $request->all();

        $album = new Album($input);
        $album->user_id = $user->id;
        $album->save();

        $decorators = Decorator::decorators(Album::class, $request);
        $album_return = Album::with($decorators);

        $album_return = $album_return->find($album->id);

        $appends = Decorator::appends(Album::class, $request);
        $album_return->each(function($item) use ($appends) {
            $item->setAppends($appends);
        });

        return Api::json(true, "Album cadastrado com sucesso.", $album_return, 201);
    }

    public function editarAlbum(AlbumRequest $request, Album $album)
    {
        $input = $request->all();

        $album->update($input);

        $decorators = Decorator::decorators(Album::class, $request);
        $album_return = Album::with($decorators);

        $album_return = $album_return->find($album->id);

        $appends = Decorator::appends(Album::class, $request);
        $album_return->each(function($item) use ($appends) {
            $item->setAppends($appends);
        });

        return Api::json(true, "Album atualizado com sucesso.", $album_return);
    }

    public function deletarAlbum(AlbumRequest $request, Album $album)
    {
        $album->delete();
        return Api::json(true, "Album deletado com sucesso.", $album);
    }

    public function deletarAlbums(AlbumRequest $request, Album $album)
    {
        $ids = $request->input("ids");
        $ids = explode(',', $ids);

        $array_albums = array();
        foreach ($ids as $id) {
            $album = Album::where('id', '=', $id)->first();
            if ($album) {
                $array_albums[] = $album;
                $album->delete();
            }
        }

        return Api::json(true, "Album deletados com sucesso.", $array_albums);
    }

}
