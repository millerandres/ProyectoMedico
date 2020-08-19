<h6 class="navbar-heading text-muted">
@if(auth()->user()->role == 'admin')
Gestionar Datos
@else
Menu
@endif
</h6>
<ul class="navbar-nav">
  @if(auth()->user()->role == 'admin')
      <li class="nav-item">
        <a class="nav-link" href="/home">
          <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/specialties">
          <i class="ni ni-planet text-blue"></i>Especialidades
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/doctors">
          <i class="ni ni-single-02 text-orange"></i> Medicos
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/patients">
          <i class="ni ni-satisfied text-info"></i> Pacientes
        </a>
      </li>
      @elseif (auth()->user()->role == 'doctor')
       <li class="nav-item">
        <a class="nav-link" href="/home">
          <i class="ni ni-calendar-grid-58 text-danger"></i>Gestionar Horario
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/home">
          <i class="ni ni-time-alarm text-orange"></i> Mis Citas
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/specialties">
          <i class="ni ni-satisfied text-blue"></i>Mis Pacientes
        </a>
      </li>

      @else {{--patient--}}
       <li class="nav-item">
        <a class="nav-link" href="/home">
          <i class="ni ni-laptop text-orange"></i> Reservar Cita
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/specialties">
          <i class="ni ni-satisfied text-blue"></i>Mis Citas
        </a>
      </li>
    @endif


      <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
          <i class="ni ni-circle-08 "></i> Cerrar Sesion
        </a>
        <form action="{{route('logout')}}" method="POST" style="display: none;" id="formLogout">
        	@csrf
        </form>
      </li>
    </ul>

    @if(auth()->user()->role == 'admin')

    <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Reportes</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-palette text-red"></i> Frecuencia De Citas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-spaceship text-red"></i> Medicos Mas Activos
            </a>
          </li>
         
        </ul>
        @endif()