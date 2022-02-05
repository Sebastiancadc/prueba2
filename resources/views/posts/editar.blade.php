@extends('app')
@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{route('update',$Posts->id)}}">
            @csrf 
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Categoria</label>
              <select name="categorias_id" class="form-select">
                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Titulo</label>
              <input name="titulo" type="text" class="form-control" value="{{$Posts->titulo}}">
            
            </div>
            <div class="mb-3">
                <label class="form-label">Contenido</label>
                <textarea name="contenido" class="form-control" cols="30" rows="10">{{$Posts->contenido}}</textarea>
        
              </div>
            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{ action('PostsController@index') }}" class="btn btn-dark">Volver</a>
          </form>
    </div>
  </div>

@endsection