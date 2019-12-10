@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">Editar</h1>

<form action="{{route('curso.update',$curso->id_curso)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">ID Aula</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_curso" value="{{$curso->id_curso}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de Aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_curso" value="{{$curso->nombre_curso}}">
  </div>
  <div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">detalle de aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nivel" value="{{$curso->nivel}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Profesor</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_profesor" value="{{$curso->id_profesor}}">
  </div>
</div>

</div>  
  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection
