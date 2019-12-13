@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-left">Registrar Curso</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
  <head>
  </head>
<form action="{{route('curso.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Id de curso</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_curso" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de curso</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_curso" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nivel</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nivel" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Profesor</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_profesor" style="width:300px;height:30px">
  </div>
  </div>

</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection