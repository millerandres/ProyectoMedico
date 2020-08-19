@extends('layouts.panel')

@section('content')
<div class="container col-md-8">
  
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Nuevo Paciente</h3>
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
        <div class="alert alert-danger" role="alert"> 
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach

        </div>
        @endif

        <form action="{{url('patients')}}" method="post">
          @csrf
     <div form-group>
       <label for="name">Nombre del paciente</label>
       <input type="" name="name" class="form-control" value="{{old('name')}}" >
     </div> 

      <div form-group>
       <label for="email">E-mail</label>
       <input type="" name="email" class="form-control" value="{{old('email')}}" >
     </div> 

      <div form-group>
       <label for="dni">DNI</label>
       <input type="" name="dni" class="form-control" value="{{old('dni')}}" >
     </div>

      <div form-group>
       <label for="direccion">direccion</label>
       <input type="" name="direccion" class="form-control" value="{{old('direccion')}}" >
     </div>

     <div form-group>
       <label for="phone">telefono</label>
       <input type="" name="phone" class="form-control" value="{{old('phone')}}" >
     </div>
     <button type="submit" class="btn btn-primary">Guardar</button>
 </form>

     </div>

  


    </div>
  </div>
</div>
@endsection
