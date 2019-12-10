@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">HORARIOS</h1>
<div class="container">


    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="10%">Id Horairo</th>
      <th scope="col" width="10%">Id aula</th> 
      <th scope="col" width="10%">Id Curso</th>                                
      <th scope="col" width="20%">Dias</th>  
      <th scope="col" width="15%">Horario</th> 
    </tr>
  </thead>
 <tbody>
      @foreach($horarios as $horario)
    <tr>
    
      <th scope="row">{{$horario->id_horario}}</th>
      <td>{{ $horario->id_aula}}</td>
      <td>{{ $horario->id_curso}}</td>
      <td>{{ $horario->dias}}</td>
      <td>{{ $horario->horario}}</td>

      <td><a class="btn btn-info" href="{{route('horario.edit',$horario->id_horario)}}">Editar</a></td>
             <form action="{{route('horario.destroy',$horario->id_horario)}}" method="post">
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
       href="{{route('horario.create')}}">Nuevo Ingreso</a>
</div>
@stop