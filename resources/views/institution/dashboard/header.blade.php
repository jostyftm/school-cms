<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0087be;border-bottom: 1px solid #0079aa;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <a class="navbar-brand" href="#">{{ env('APP_NAME', 'School cms') }}</a> --}}

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        {{-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ $institution->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            {{-- <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Configuración</a>
            <div class="dropdown-divider"></div> --}}

              <a class="dropdown-item" href="{{ route('institution.logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Salir
            </a>

              <form id="logout-form" action="{{ route('institution.logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>