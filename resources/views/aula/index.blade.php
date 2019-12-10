@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">AULAS</h1>
<div class="container">


    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="10%">Id Aula</th>
      <th scope="col" width="10%">Aula</th> 
      <th scope="col" width="10%">Detalle de aula</th>                                
     
    </tr>
  </thead>
 <tbody>
      @foreach($aulas as $aula)
    <tr>
    
      <th scope="row">{{$aula->id_aula}}</th>
      <td>{{ $aula->nombre_aula}}</td>
      <td>{{ $aula->detalle_aula}}</td>

      <td><a class="btn btn-info" href="{{route('aula.edit',$aula->id_aula)}}">Editar</a></td>
             <form action="{{route('aula.destroy',$aula->id_aula)}}" method="post">
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
       href="{{route('aula.create')}}">Nuevo Ingreso</a>
</div>
@stop