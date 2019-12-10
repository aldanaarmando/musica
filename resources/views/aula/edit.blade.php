@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">Editar</h1>

<form action="{{route('aula.update',$aula->id_aula)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">ID Aula</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_aula" value="{{$aula->id_aula}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de Aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_aula" value="{{$aula->nombre_aula}}">
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">detalle de aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="detalle_aula" value="{{$aula->detalle_aula}}">
  </div>

</div>
</div>  
  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection
