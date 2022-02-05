@extends('app')
@section('content')
<div class="main-content">
<div class="container mt--8 pb-5">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-7">
<div class="card bg-secondary shadow border-0">
    <div class="card-body px-lg-5 py-lg-5">          
        <div class="text-center" id="login">
            <a href="{{ action('PostsController@index') }}" type="submit" class="btn btn-primary my-4">Publicaciones</a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection