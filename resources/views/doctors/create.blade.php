@extends('layouts.panel')

@section('content')
<div class="container col-md-8">
  
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Nueva Medico</h3>
        </div>
        <div class="col text-right">
          <a href="{{url('doctors')}}" class="btn btn-sm btn-default">
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

        <form action="{{url('doctors')}}" method="post">
          @csrf
     <div form-group>
       <label for="name">Nombre del medico</label>
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
       <label for="addres">direccion</label>
       <input type="" name="addres" class="form-control" value="{{old('addres')}}" >
     </div>

     <div form-group>
       <label for="phone">telefono</label>
       <input type="" name="phone" class="form-control" value="{{old('phone')}}" >
     </div>

     <div form-group>
       <label for="password">Contraseña</label>
       <input type="" name="password" class="form-control" value="{{ old('password',str_random(6) )}}" >
     </div>

     <button type="submit" class="btn btn-primary">Guardar</button>
 </form>

     </div>

  


    </div>
  </div>
</div>
@endsection
