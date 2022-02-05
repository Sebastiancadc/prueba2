@extends('app')
@section('content')
@if (session('crear'))
<div class="alert alert-primary" role="alert">
    {{(session('crear'))}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<br>
@endif
@if (session('editar'))
<div class="alert alert-warning" role="alert">
    {{(session('editar'))}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<br>
@endif
@if (session('eliminar'))
<div class="alert alert-danger" role="alert">
    {{(session('eliminar'))}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<br>
@endif

<div class="bd-example">
  <div class="card text-center">
    <div class="card-header">
      Categoria - {{$categoria->name}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$Posts->titulo}}</h5>
      <p class="card-text">{{$Posts->contenido}}</p>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >Comentar</button>

    </div>
    <div class="card-footer text-muted">
      {{$Posts->created_at->diffForHumans()}}
    </div>
  </div>
<br>
  <div class="card">
    <div class="card-header">
      Comentarios
    </div>
    <ul class="list-group list-group-flush">
  
      @if ($comentarios == "[]")
      <li class="list-group-item">No hay comentarios</li>
      @include('posts.modalcrear')
      @else
      @foreach ($comentarios as $comentario)
      <li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#EditarProyecto" data-idcomentario="{{$comentario->id}}" data-id="{{$Posts->id}}" data-nombre="{{$comentario->contenido}}">{{$comentario->contenido}}</a>--           <button type="button" class="btn btn-danger" data-idcomentario="{{$comentario->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        Eliminar
      </button></li>
      @endforeach
      @include('posts.modales')  
      @endif
    </ul>
</div>
<br><br>
<a href="{{ url()->previous() }}" type="button" class="btn btn-dark">Volver</a>

@endsection