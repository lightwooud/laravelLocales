<h6 class="navbar-heading text-muted">Gestion</h6>
 
 <!-- Navigation -->

 @if (auth()->user()->cargo == 'ADMINISTRADOR')
  <ul class="navbar-nav">
    <li class="nav-item  active ">
      <a class="nav-link  active " href="{{url('/home')}}">
        <i class="ni ni-tv-2 text-danger"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{url('/locales')}}">
        <i class="ni ni-briefcase-24 text-blue"></i> Locales
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{url('/usuarios')}}">
        <i class="fas fa-user"></i> Usuarios
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{url('/categorias')}}">
        <i class="fas fa-list"></i> Categorias comerciales
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{url('/subcategorias')}}">
        <i class="fas fa-list"></i>subcategorias comerciales
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout')}}"
      onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
        <i class="fas fa-sign-in-alt"></i> Cerrar sesion
      </a>
      <form action="{{ route('logout')}}" method="POST" style="display: none" id="formLogout">
        @csrf
      </form>
    </li>
  </ul>
    @elseif (auth()->user()->cargo == 'REPRESENTANTE'|| 'VIGILANTE')
      <ul class="navbar-nav">
        <li class="nav-item  active ">
          <a class="nav-link  active " href="{{url('/home')}}">
            <i class="ni ni-tv-2 text-danger"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('/locales')}}">
            <i class="ni ni-briefcase-24 text-blue"></i> Locales
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout')}}"
          onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <i class="fas fa-sign-in-alt"></i> Cerrar sesion
          </a>
          <form action="{{ route('logout')}}" method="POST" style="display: none" id="formLogout">
            @csrf
          </form>
        </li>
      </ul>
@endif

  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading text-muted">Reportes</h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/reportepdf') }}">
        <i class="fas fa-file-pdf"></i> Generar reporte
      </a>
    </li>
  </ul>
 