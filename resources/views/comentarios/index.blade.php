@extends('app')
@section('content')
<a href="{{ action('CategoriasController@index') }}" type="button" class="btn btn-success">Categorias</a>
<a href="{{ action('PostsController@index') }}" type="submit" class="btn btn-primary my-4">Publicaciones</a>
<br>
<br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Publicacion</th>
        <th scope="col">Comentario</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
       <?php 
        $i = 1;
        ?>
        @foreach ($comentarios as $comentario)
        <tr>
        <th>{{$i++}}</th>
        <th scope="row">{{$comentario->titulo}} </th>
        <th scope="row">{{$comentario->contenido}}</th>
        <th>
          <a href="{{route('ver',$comentario->idPost)}}" title="Ver" type="button" class="btn btn-primary">Ver</a>
        </form>
      </div>
    </div>
  </div>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>

@if (session('crear'))
<div class="alert alert-primary" role="alert">
    {{(session('crear'))}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('eliminar'))
<div class="alert alert-danger" role="alert">
    {{(session('eliminar'))}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('editar'))
<div class="alert alert-warning" role="alert">
    {{(session('editar'))}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@endsection