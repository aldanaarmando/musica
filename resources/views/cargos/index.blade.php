@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">CARGOS</h1>
<div class="container">


    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="20%">Id Cargo</th>
      <th scope="col" width="20%">Cargo</th>                               
     
    </tr>
  </thead>
 <tbody>
      @foreach($cargos as $cargo)
    <tr>
    
      <th scope="row">{{$cargo->id_cargo}}</th>
      <td>{{ $cargo->nombre_cargo}}</td>

      <td><a class="btn btn-info" href="{{route('cargos.edit',$cargo->id_cargo)}}">Editar</a></td>
             <form action="{{route('cargos.destroy',$cargo->id_cargo)}}" method="post">
          @csrf
         @method('DELETE')
                 <td><button type="submit" class="btn btn-info" >Eliminar</button></td>
         </form>

</tr>
@endforeach
    </tr>
  </tbody>
        
</table>
<a class="btn btn-info mb-4"
       href="{{route('cargos.create')}}">Nuevo Ingreso</a>
</div>
@stop