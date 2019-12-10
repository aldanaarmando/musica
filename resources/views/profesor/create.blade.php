@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-left">Registrar gasto</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
  <head>
  </head>
<form action="{{route('profesor.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Id de profesor</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_profesor" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">CI</label>
  <div class="col-10">
    <input class="form-control" type="text" name="ci" style="width:300px;height:30px">
  </div>
  </div>
<div class="form-group row">
  <label for="example-search-input" >Nombre</label>
  <div class="col-5">
    <input class="form-control" type="text" name="nombre" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apellido paterno</label>
  <div class="col-10">
    <input class="form-control" type="text" name="apellido_pat" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" >Apellido materno</label>
  <div class="col-10">
    <input class="form-control" type="text" name="apellido_mat" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text" name="fecha_nac" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Genero</label>
  <div class="col-10">
    <input class="form-control" type="text" name="genero" style="width:300px;height:30px">
  </div></div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Telefono</label>
  <div class="col-10">
    <input class="form-control" type="text" name="telefono" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Cargo</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_cargo" style="width:300px;height:30px">
  </div>
  </div>

</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection