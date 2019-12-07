@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">Editar</h1>

<form action="{{route('cargos.update',$cargo->id_cargo)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">ID Gasto</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_cargo" value="{{$cargo->id_cargo}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de gasto</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_cargo" value="{{$cargo->nombre_cargo}}">
  </div>
</div>
</div>  
  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection
