@extends('app')
@section('content')
<a href="{{ url('crearposts') }}" type="button" class="btn btn-secondary">Añadir nuevo</a>
<a href="{{ action('CategoriasController@index') }}" type="button" class="btn btn-success">Categorias</a>
<a href="{{ action('ComentariosController@index') }}" type="button" class="btn btn-info">Comentarios</a>
<br>
<br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Contenido</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
       <?php 
        $i = 1;
        ?>
        @foreach ($posts as $post)
      <tr>
        <th>{{$i++}}</th>
        <th scope="row">{{$post->titulo}}</th>
        <th colspan="row">{{$post->contenido}}</th>
        <th>
            <a href="{{route('ver',$post->id)}}" type="button" class="btn btn-primary">Ver</a>
            <a  href="{{route('editar',$post->id)}}" type="button" class="btn btn-warning">Editar</a>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Eliminar
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form role="form" method="POST" action="{{route('eliminar',$post->id)}}">
            @csrf @method('DELETE')
            <div class="modal-body">
                ¡No podrás revertir esto!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="sum" class="btn btn-primary">Eliminar</button>
            </div>
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