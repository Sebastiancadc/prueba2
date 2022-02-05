<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comentarios as RequestsComentarios;
use App\Comentarios;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentariosController extends Controller
{
    public function index()
    {
        $comentarios = DB::table('comentarios')
        ->join('posts', 'posts.id','=','comentarios.posts_id')
        ->select('posts.id as idPost','posts.titulo','comentarios.id','comentarios.contenido')->get();

        return view('comentarios.index', compact('comentarios'));
    }


    public function store(RequestsComentarios $request)
    {   

        $comentarios = new Comentarios();
        $comentarios->posts_id = $request->posts_id;
        $comentarios->contenido = $request->contenido;
        $comentarios->save();
        return back()->with('crear', 'Se comento la publicacion');
    }
    
    public function edit($id)
    {
        $comentarios = Comentarios::findOrFail($id);
        return view('comentarios.editar', compact('comentarios'));
    }

    public function update(RequestsComentarios $request, $id)
    {
        
        $comentarios = Comentarios::findOrFail($request->comentario_id);
        $comentarios->posts_id = $request->posts_id;
        $comentarios->contenido = $request->contenido;
        $comentarios->save();
        return back()->with('editar', 'El comentario se actualizo exitosamente.');
        
    }
    public function delete(Request $request, $id)
    {
        
        $comentarios = Comentarios::find($request->comentario_id);
        $comentarios->delete();
        return back()->with('eliminar', 'El comentario se elimino exitosamente.');

    }
}
