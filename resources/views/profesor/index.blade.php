@extends ('layouts.inicio')
@section('contenido')
<h1 class="text-center">PROFESORES</h1>
<div class="container">


    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="5%">Id profesor</th>
      <th scope="col" width="5%">CI</th> 
      <th scope="col" width="7%">Nombre</th>   
      <th scope="col" width="7%">Apellido paterno</th>
      <th scope="col" width="7%">Apellido materno</th> 
      <th scope="col" width="7%">Fecha de nacimiento</th> 
      <th scope="col" width="5%">Genero</th>    
      <th scope="col" width="7%">Telefono</th>      
      <th scope="col" width="7%">Cargo</th>                              
     
    </tr>
  </thead>
 <tbody>
      @foreach($profesores as $profesor)
    <tr>
    
      <th scope="row">{{$profesor->id_profesor}}</th>
      <td>{{ $profesor->ci}}</td>
      <td>{{ $profesor->nombre}}</td>
      <td>{{ $profesor->apellido_pat}}</td>
      <td>{{ $profesor->apellido_mat}}</td>
      <td>{{ $profesor->fecha_nac}}</td>
      <td>{{ $profesor->genero}}</td>
      <td>{{ $profesor->telefono}}</td>
      <td>{{ $profesor->id_cargo}}</td>

      <td><a class="btn btn-info" href="{{route('profesor.edit',$profesor->id_profesor)}}">Editar</a></td>
             <form action="{{route('profesor.destroy',$profesor->id_profesor)}}" method="post">
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
       href="{{route('profesor.create')}}">Nuevo Ingreso</a>
</div>
@stop