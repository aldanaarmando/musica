@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-left">Registrar aula</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
  <head>
  </head>
<form action="{{route('horario.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Id horario</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_horario" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Id aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_aula" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Id curso</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_curso" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Dias</label>
  <div class="col-10">
    <input class="form-control" type="text" name="dias" style="width:300px;height:30px">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Horario</label>
  <div class="col-10">
    <input class="form-control" type="text" name="horario" style="width:300px;height:30px">
  </div>
  </div>

</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection