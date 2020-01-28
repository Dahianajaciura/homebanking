

<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse">
          <a class="navbar-brand " href="{{ url('/')}}">Home Banking</a>
          <ul class="navbar-nav mr-auto">
            <!--       class active resalta la opción seleccionada -->
            <li class="nav-item @if(!(empty($opcionIndex))) {{$opcionIndex}} @endif">
              <a class="nav-link" href="{{ url('/')}}">Home</a>
            </li>
            ​
            <li class="nav-item @if(!(empty($opcionBalance))) {{$opcionBalance}} @endif">
              <a class="nav-link" href="{{ url('balance')}}">Balance</a>
            </li>
            ​
            <li class="nav-item @if(!(empty($opcionPago))) {{$opcionPago}} @endif">
              <a class="nav-link" href="{{ url('pagodeservicios')}}"
                >Pago de Servicios</a
              >
            </li>
            ​
            <li class="nav-item @if(!(empty($opcionInversiones))) {{$opcionInversiones}} @endif">
              <a class="nav-link" href="{{ url('inversiones')}}">Inversiones</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

  