@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">Editar</h1>

<form action="{{route('horario.update',$horario->id_curso)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">ID Aula</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_horario" value="{{$horario->id_horario}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de Aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_aula" value="{{$horario->id_aula}}">
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">detalle de aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_curso" value="{{$horario->id_curso}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Profesor</label>
  <div class="col-10">
    <input class="form-control" type="text" name="dias" value="{{$horario->dias}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Profesor</label>
  <div class="col-10">
    <input class="form-control" type="text" name="horairo" value="{{$horario->horairo}}">
  </div>
</div>
</div>  
  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection
