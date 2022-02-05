<?php

namespace App\Http\Controllers;

use App\Categorias;
use App\Http\Requests\Categorias as RequestsCategorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categorias::all();

        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        $categorias = Categorias::all();

        return view('categorias.crear', compact('categorias'));
    }


    public function store(RequestsCategorias $request)
    {
        $categoria = new Categorias();
        $categoria->name = $request->name;
        $categoria->save();
        return redirect()->action('CategoriasController@index')->with('crear', 'La publicacion se creo exitosamente.');
    }
    
    public function edit($id)
    {
        $categoria = Categorias::findOrFail($id);
        return view('categorias.editar', compact('categoria'));
    }

    public function update(RequestsCategorias $request, $id)
    {
        $categoria = Categorias::findOrFail($id);
        $categoria->name = $request->name;
        $categoria->save();
        return redirect()->action('CategoriasController@index')->with('editar', 'La publicacion se actualizo exitosamente.');
        
    }
    public function delete($id)
    {
        $categoria = Categorias::find($id);
        $categoria->delete();
        return redirect()->action('CategoriasController@index')->with('eliminar', 'La publicacion se elimino exitosamente.');

    }
}
