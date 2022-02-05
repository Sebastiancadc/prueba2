@extends('app')
@section('content')
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{route('crearCategoria')}}">
            @csrf 
            @method('POST')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Categoria</label>
              <input name="name" type="text" class="form-control" >
              @if ($errors->has('name'))
                <strong class="text-danger ">{{ $errors->first('name') }}</strong>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Añadir</button>
            <a href="{{ action('CategoriasController@index') }}" class="btn btn-dark">Volver</a>
          </form>
    </div>
  </div>

@endsection