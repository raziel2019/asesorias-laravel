<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
@hasanyrole('Administrador|Profesor|Usuario')
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
@endhasanyrole

@role('Profesor')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profesor') }}">
                      <i class="ni ni-circle-08 text-default"></i>
                      <span class="nav-link-text">Mis Datos</span>
                    </a>
                </li>
@endrole
@role('Profesor')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('asesoria') }}">
                      <i class="ni ni-circle-08 text-default"></i>
                      <span class="nav-link-text">Asesorias Administrador</span>
                    </a>
                </li>
@endrole

@role('Profesor')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('AsesoriaEstudiante') }}">
                      <i class="ni ni-circle-08 text-default"></i>
                      <span class="nav-link-text">Asesorias Estudiantes</span>
                    </a>
                </li>
@endrole
@role('Usuario')
                <li class="nav-item">
                    <a class="nav-link" href="/profile">
                      <i class="ni ni-circle-08 text-default"></i>
                      <span class="nav-link-text">Perfil</span>
                    </a>
                </li>
@endrole
@role('Usuario')
                <li class="nav-item">
                    <a class="nav-link" href="/UsuarioAsesorias">
                      <i class="ni ni-circle-08 text-default"></i>
                      <span class="nav-link-text">Mis Asesorias</span>
                    </a>
                </li>
@endrole
@role('Usuario')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ProfesoresDisponibles') }}">
                      <i class="ni ni-hat-3 text-default"></i>
                      <span class="nav-link-text">Profesores</span>
                    </a>
                </li>
@endrole


@role('Administrador')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('usuarios') }}">
                      <i class="ni ni-circle-08 text-default"></i>
                      <span class="nav-link-text">Usuarios</span>
                    </a>
                </li>
@endrole
@role('Administrador')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profesores') }}">
                      <i class="ni ni-hat-3 text-default"></i>
                      <span class="nav-link-text">Profesores</span>
                    </a>
                </li>
@endrole

@role('Administrador')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('paises') }}">
                      <i class="ni ni-map-big text-default"></i>
                      <span class="nav-link-text">Paises</span>
                    </a>
                </li>
@endrole
@role('Administrador')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profesiones') }}">
                      <i class="ni ni-ruler-pencil text-default"></i>
                      <span class="nav-link-text">Profesiones</span>
                    </a>
                </li>
@endrole
@role('Administrador')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('asesorias') }}">
                      <i class="ni ni-paper-diploma text-default"></i>
                      <span class="nav-link-text">Asesorias</span>
                    </a>
                </li>
@endrole
            </ul>
        </div>
    </div>
</nav>
