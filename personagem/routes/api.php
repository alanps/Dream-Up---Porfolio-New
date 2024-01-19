<?php

use Illuminate\Http\Request;

//Auth
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');

Route::group(['middleware'=>'auth:api'], function() {

	Route::get('/listarAlbums', 'AlbumController@listarAlbums');
	Route::get('/listarAlbum/{album}', 'AlbumController@listarAlbum');
	Route::post('/criarAlbum', 'AlbumController@criarAlbum');
	Route::put('/editarAlbum/{album}', 'AlbumController@editarAlbum');
	Route::delete('/deletarAlbum/{album}', 'AlbumController@deletarAlbum');
	Route::delete('/deletarAlbums', 'AlbumController@deletarAlbums');

	Route::get('/clickImg/{imagem}', 'ImagemController@clickImg');
	Route::get('/listarImagemAlbum/{slug}', 'ImagemController@listarImagemAlbum');
	Route::get('/listarImagems', 'ImagemController@listarImagems');
	Route::get('/listarImagem/{imagem}', 'ImagemController@listarImagem');
	Route::post('/criarImagem', 'ImagemController@criarImagem');
	Route::put('/editarImagem/{imagem}', 'ImagemController@editarImagem');
	Route::delete('/deletarImagem/{imagem}', 'ImagemController@deletarImagem');
	Route::delete('/deletarImagems', 'ImagemController@deletarImagems');

	Route::get('/listarAnimacoes', 'AnimacaoController@listarAnimacoes');
	Route::get('/listarAnimacao/{animacao}', 'AnimacaoController@listarAnimacao');
	Route::post('/criarAnimacao', 'AnimacaoController@criarAnimacao');
	Route::put('/editarAnimacao/{animacao}', 'AnimacaoController@editarAnimacao');
	Route::delete('/deletarAnimacao/{animacao}', 'AnimacaoController@deletarAnimacao');
	Route::delete('/deletarAnimacoes', 'AnimacaoController@deletarAnimacoes');

});

