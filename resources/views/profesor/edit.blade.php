@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">Editar</h1>

<form action="{{route('profesor.update',$profesor->id_profesor)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">ID Profesor</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_profesor" value="{{$profesor->id_profesor}}">
  </div>
  </div>

  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">CI</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="ci" value="{{$profesor->ci}}">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="nombre" value="{{$profesor->nombre}}">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Apellido paterno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="apellido_pat" value="{{$profesor->apellido_pat}}">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Apellido materno</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="apellido_mat" value="{{$profesor->apellido_mat}}">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="fecha_nac" value="{{$profesor->fecha_nac}}">
  </div> 
  </div>

   <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Genero</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="genero" value="{{$profesor->genero}}">
  </div>
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Telefono</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="telefono" value="{{$profesor->telefono}}">
  </div>
</div>  

<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Cargo</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_cargo" value="{{$profesor->id_cargo}}">
  </div>
</div> 
  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection
