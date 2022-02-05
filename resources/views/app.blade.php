<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="bd-content ps-lg-4">
    <br>
    @yield('content') 
</div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

  $('#EditarProyecto').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var nombre = button.data('nombre');
        var id = button.data('id');
        var idcomentario  =button.data('idcomentario');
        var modal = $(this);
        
        modal.find('#nombre').val(nombre);
        modal.find('#posts_id').val(id);
        modal.find('#comentario_id').val(idcomentario);
    });
</script>

<script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var idcomentario  =button.data('idcomentario');
        var modal = $(this);
        modal.find('#comentario_id').val(idcomentario);
      });
  </script>
</html>