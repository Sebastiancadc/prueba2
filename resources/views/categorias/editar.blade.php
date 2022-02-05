@extends('app')
@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{route('update',$categoria->id)}}">
            @csrf 
            @method('PUT')
            <div class="mb-3">
              <label class="form-label">Categoria</label>
              <input name="name" type="text" class="form-control" value="{{$categoria->name}}">
            </div>
            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{ action('CategoriasController@index') }}" class="btn btn-dark">Volver</a>
          </form>
    </div>
  </div>

@endsection