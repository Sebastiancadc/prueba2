<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Posts
Route::get('Publicaciones', 'PostsController@index');
Route::get('crearposts', 'PostsController@create')->name('crearposts');
Route::post('crearPost', 'PostsController@store')->name('crearPost');
Route::delete('eliminar/{id}', 'PostsController@delete')->name('eliminar');
Route::get('editar/{id}', 'PostsController@edit')->name('editar');
Route::put('update/{id}', 'PostsController@update')->name('update');
Route::get('ver/{id}', 'PostsController@ver')->name('ver');

//Categorias
Route::get('Categorias', 'CategoriasController@index');
Route::get('crear', 'CategoriasController@create');
Route::post('crearCategoria', 'CategoriasController@store')->name('crearCategoria');
Route::delete('eliminarcategoria/{id}', 'CategoriasController@delete')->name('eliminarcategoria');
Route::get('editar/{id}', 'CategoriasController@edit')->name('editar');
Route::put('update/{id}', 'CategoriasController@update')->name('update');

//Comentarios
Route::get('Comentarios', 'ComentariosController@index');
Route::post('crearComentarios', 'ComentariosController@store')->name('crearComentarios');
Route::delete('eliminarcomentario/{id}', 'ComentariosController@delete')->name('eliminarcomentario');
Route::get('editar/{id}', 'ComentariosController@edit')->name('editar');
Route::put('updateComentario/{id}', 'ComentariosController@update')->name('updateComentario');

