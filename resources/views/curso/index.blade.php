@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">CURSOS</h1>
<div class="container">


    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="10%">Id Curso</th>
      <th scope="col" width="10%">Nombre</th> 
      <th scope="col" width="10%">Nivel</th>                                
      <th scope="col" width="10%">Profesor</th>  
    </tr>
  </thead>
 <tbody>
      @foreach($cursos as $curso)
    <tr>
    
      <th scope="row">{{$curso->id_curso}}</th>
      <td>{{ $curso->nombre_curso}}</td>
      <td>{{ $curso->nivel}}</td>
      <td>{{ $curso->id_profesor}}</td>

      <td><a class="btn btn-info" href="{{route('curso.edit',$curso->id_curso)}}">Editar</a></td>
             <form action="{{route('curso.destroy',$curso->id_curso)}}" method="post">
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
       href="{{route('curso.create')}}">Nuevo Ingreso</a>
</div>
@stop