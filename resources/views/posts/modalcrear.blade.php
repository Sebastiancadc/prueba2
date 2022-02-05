<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nuevo comentario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('crearComentarios')}}">
            @csrf 
            @method('POST')
            <div class="mb-3">
              <input type="text" name="posts_id" value="{{$Posts->id}}" hidden>
              <label for="message-text" class="col-form-label">Mensaje:</label>
              <textarea class="form-control" id="message-text" name="contenido"></textarea>
              @if ($errors->has('contenido'))
              <strong class="text-danger ">{{ $errors->first('contenido') }}</strong>
              @endif
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
