@extends('layouts.panel')

@section('content')
<div class="container col-md-8">
  
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Editar Paciente</h3>
        </div>
        <div class="col text-right">
          <a href="{{url('patients')}}" class="btn btn-sm btn-default">
          	Cancelar y volver
          </a>
        </div>
      </div>
    </div>
  
     <div class="card-body" >

        @if($errors->any())
        <ul> 
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach

        </ul>
        @endif

        <form action="{{url('patients/'.$patient->id)}}" method="post">
          @csrf
          @method('PUT')
     <div form-group>
       <label for="name">Nombre del paciente</label>
       <input type="" name="name" class="form-control" value="{{old('name',$patient->name)}}" >
     </div> 

      <div form-group>
       <label for="email">E-mail</label>
       <input type="" name="email" class="form-control" value="{{old('email',$patient->email)}}" >
     </div> 

      <div form-group>
       <label for="dni">DNI</label>
       <input type="" name="dni" class="form-control" value="{{old('dni',$patient->dni)}}" >
     </div>

      <div form-group>
       <label for="direccion">direccion</label>
       <input type="" name="direccion" class="form-control" value="{{old('direccion',$patient->direccion)}}" >
     </div>

     <div form-group>
       <label for="phone">telefono</label>
       <input type="" name="phone" class="form-control" value="{{old('phone',$patient->phone)}}" >
     </div>

     <div form-group>
       <label for="password">Contraseña<em> (Ingrese solo un valor solo si desea modificar la contraseña)</em></label>
       <input type="" name="password" class="form-control" value="" >
     </div>
     <button type="submit" class="btn btn-primary">Guardar</button>
 </form>

     </div>

  


    </div>
  </div>
</div>
@endsection
