@extends('app')
@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{route('crearPost')}}">
            @csrf 
            @method('POST')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Categoria</label>
              <select name="categorias_id" class="form-select">
                @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Titulo</label>
              <input name="titulo" type="text" class="form-control" >
              @if ($errors->has('titulo'))
                <strong class="text-danger ">{{ $errors->first('titulo') }}</strong>
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Contenido</label>
                <textarea name="contenido" class="form-control" cols="30" rows="10"></textarea>
                @if ($errors->has('contenido'))
                <strong class="text-danger ">{{ $errors->first('contenido') }}</strong>
                @endif
              </div>
            {{-- <button type="submit" class="btn btn-primary">Publicar</button> --}}

            <button type="submit" class="btn btn-primary">Añadir</button>
            <a href="{{ action('PostsController@index') }}" class="btn btn-dark">Volver</a>
          </form>
    </div>
  </div>

@endsection