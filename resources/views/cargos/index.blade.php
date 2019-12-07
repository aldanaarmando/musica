@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">Ingresos de dinero</h1>
<div class="container">


    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="20%">Id Cargo</th>
      <th scope="col" width="20%">Cargo2</th>                               
     
    </tr>
  </thead>
 <tbody>
      @foreach($cargos as $cargo)
    <tr>
    
      <th scope="row">{{$cargo->id_cargo}}</th>
      <td>{{ $cargo->nombre_cargo}}</td>


</tr>
@endforeach
    </tr>
  </tbody>
        
</table>
<a class="btn btn-info mb-4"
       href="">Nuevo Ingreso</a>
</div>
@stop