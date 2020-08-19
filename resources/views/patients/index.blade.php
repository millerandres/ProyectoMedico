@extends('layouts.panel')

@section('content')
<div class="container col-md-8">
  
<div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Pacientes</h3>
        </div>
        <div class="col text-right">
          <a href="{{route('patients.create')}}" class="btn btn-sm btn-success">
          	Nuevo Paciente
            
          </a>
        </div>
      </div>
    </div>

    <div class="card-body">

      @if(session('notification'))
      <div class="alert alert-success" role="alert">
        
        {{session('notification')}}
      </div>
      @endif
    </div>

      


    <div class="table-responsive">
      <!-- Projects table -->
      <table class="table align-items-center table-flush">
        <thead class="thead-light">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">E-mail</th>
             <th scope="col">Dni</th>
            <th scope="col">Opciones</th>
           
          </tr>
        </thead>
        <tbody>
        	@foreach ($patients as $patient)
          <tr>
            <th scope="row">
             {{$patient->name}}
            </th>
            <td>
             {{$patient->email}}
            </td>

            <td>
             {{$patient->dni}}
            </td>
            
            <td>
              <form action="{{url('/patients/'.$patient->id)}}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{url('/patients/'.$patient->id.'/edit')}}" class="btn btn-sm btn-primary">Editar</a>

                <BUTTON class="btn btn-sm btn-danger" type="submit">Eliminar</BUTTON>
              </form>
              
            </td>
          </tr>
          @endforeach()
    
    
       
      
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-body">{{$patients->links()}}</div>   
  
</div>
@endsection
