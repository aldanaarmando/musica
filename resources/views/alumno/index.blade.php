@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">ALUMNOS</h1>
<div class="container">


    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="10%">Id Alumno</th>
      <th scope="col" width="10%">CI</th> 
      <th scope="col" width="10%">Nombre</th>   
      <th scope="col" width="10%">Apellido paterno</th>
      <th scope="col" width="10%">Apellido materno</th> 
      <th scope="col" width="10%">Fecha de nacimiento</th> 
      <th scope="col" width="10%">Genero</th>    
      <th scope="col" width="10%">Telefono</th>                                 
     
    </tr>
  </thead>
 <tbody>
      @foreach($alumnos as $alumno)
    <tr>
    
      <th scope="row">{{$alumno->id_alumno}}</th>
      <td>{{ $alumno->nombre}}</td>
      <td>{{ $alumno->ci}}</td>
      <td>{{ $alumno->apellido_pat}}</td>
      <td>{{ $alumno->apellido_mat}}</td>
      <td>{{ $alumno->fecha_nac}}</td>
      <td>{{ $alumno->genero}}</td>
      <td>{{ $alumno->telefono}}</td>
     

      <td><a class="btn btn-info" href="{{route('alumno.edit',$alumno->id_alumno)}}">Editar</a></td>
             <form action="{{route('alumno.destroy',$alumno->id_alumno)}}" method="post">
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
       href="{{route('alumno.create')}}">Nuevo Ingreso</a>
</div>
@stop