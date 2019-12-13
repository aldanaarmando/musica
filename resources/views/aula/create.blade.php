@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-left">Registrar aula</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
  <head>
  </head>
<form action="{{route('aula.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Id de aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_aula" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_aula" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Detalle aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="detalle_aula" style="width:300px;height:30px">
  </div>

</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection