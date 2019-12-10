@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">Editar</h1>

<form action="{{route('alumno.update',$alumno->id_alumno)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">ID Alumno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_alumno" value="{{$alumno->id_alumno}}">
  </div>

  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">CI</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_alumno" value="{{$alumno->ci}}">
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_alumno" value="{{$alumno->nombre}}">
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Apellido paterno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_alumno" value="{{$alumno->apellido_pat}}">
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Apellido materno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_alumno" value="{{$alumno->apellido_mat}}">
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_alumno" value="{{$alumno->fecha_nac}}">
  </div> 
  
   <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Genero</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_alumno" value="{{$alumno->genero}}">
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Telefono</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_alumno" value="{{$alumno->telefono}}">
  </div>

</div>  
  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection
