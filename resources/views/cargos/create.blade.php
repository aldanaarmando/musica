@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-left">Registrar gasto</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
  <head>
  </head>
<form action="{{route('cargos.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">id_cargo</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_cargo" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de cargo</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_cargo" style="width:300px;height:30px">
  </div>
</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection