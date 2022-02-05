         <!-- Modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form role="form" method="POST" action="{{route('eliminarcomentario',$comentario->id)}}">
                    @csrf @method('DELETE')
                    <div class="modal-body">
                        ¡No podrás revertir esto!
                    </div>
                    <input type="text" id="comentario_id" name="comentario_id" hidden>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="sum" class="btn btn-primary">Eliminar</button>
                    </div>
                </form>
        
              </div>
            </div>
          </div>
          
            <div class="modal fade" id="EditarProyecto" tabindex="-1" aria-labelledby="EditarProyecto" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModal2">Editar el comentario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('updateComentario',$comentario->id)}}">
            @csrf 
            @method('PUT')
            <div class="mb-3 ">
              <label for="message-text" class="col-form-label">Mensaje:</label>
              <textarea class="form-control" id="nombre" name="contenido"></textarea>
              @if ($errors->has('contenido'))
              <strong class="text-danger ">{{ $errors->first('contenido') }}</strong>
              @endif
                <input type="text" id="posts_id" name="posts_id" hidden>
                <input type="text" id="comentario_id" name="comentario_id" hidden>
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