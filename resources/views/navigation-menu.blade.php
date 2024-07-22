
<header class="shadow-lg border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto my-2 justify-content-center mb-md-0">
          <li><a href="{{ route('dashboard')}}" class="nav-link px-2 link-secondary">Inicio</a></li>
          <li><a href="{{ route('posts') }}" class="nav-link px-2 link-dark">Herramientas</a></li>
        </ul>


        <div class="dropdown text-center">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
            <img src="{{ Auth::user()->profile_photo_url }}" alt="mdo" width="40" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 34px, 0px); transition: all 400ms ease 0s;" data-popper-placement="bottom-start">
            <li><a class="dropdown-item" href="{{ route('profile.show') }}">Configuracion</a></li>
            @can('admin.home')
            <li><a class="dropdown-item" href="{{ route('admin.home') }}">Opciones avanzadas</a></li>
            @endcan

            <li><hr class="dropdown-divider"></li>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
            <li><a class="dropdown-item" href="{{ route('logout') }}" @click.prevent="$root.submit();">Cerrar sesion</a></li>
        </form>
          </ul>
        </div>
      </div>
    </div>
  </header>