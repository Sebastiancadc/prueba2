<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Comentarios;
use App\Http\Requests\Posts as RequestsPosts;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
  
        $posts = Posts::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categorias = Categorias::all();

        return view('posts.crear', compact('categorias'));
    }


    public function store(RequestsPosts $request)
    {
        $post = new Posts();
        $post->categorias_id = $request->categorias_id;
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->save();
        return redirect()->action('PostsController@index')->with('crear', 'La publicacion se creo exitosamente.');
    }
    
    public function edit($id)
    {
        $Posts = Posts::findOrFail($id);
        $categoria = Categorias::findOrFail($Posts->categorias_id);
        $categorias = Categorias::all();
        return view('posts.editar', compact('Posts','categoria','categorias'));
    }

    public function ver($id)
    {
        $Posts = Posts::findOrFail($id);
        $categoria = Categorias::findOrFail($Posts->categorias_id);
        $comentarios = Comentarios::where('posts_id',$id)->get();
        return view('posts.ver', compact('Posts','categoria','comentarios'));
    }

    public function update(RequestsPosts $request, $id)
    {
        $post = Posts::findOrFail($id);
        $post->categorias_id = $request->categorias_id;
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->save();
        return redirect()->action('PostsController@index')->with('editar', 'La publicacion se actualizo exitosamente.');
        
    }
    public function delete($id)
    {
        $Posts = Posts::find($id);
        $Posts->delete();
        return redirect()->action('PostsController@index')->with('eliminar', 'La publicacion se elimino exitosamente.');

    }
}
