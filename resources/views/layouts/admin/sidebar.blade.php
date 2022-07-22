<nav id="sidebar">
    <div class="shadow-bottom"></div>
    <ul class="list-unstyled menu-categories" id="accordionExample">

        <li class="menu">
            <a href="{{ route('home') }}" {{(Route::currentRouteName() == 'home' ? 'data-active=true' : '')}}  aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i class="fa-solid fa-house mr-3"></i>
                    <span>Inicio</span>
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="{{ route('persona.index') }}" {{(substr(Route::currentRouteName() , 0 , strpos(Route::currentRouteName(), '.')) == 'persona' ? 'data-active=true' : '')}}
                aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i class="fa-solid fa-user-group mr-3"></i>
                    <span>Personas </span>
                    {{-- <span>Personas {{ substr(Route::currentRouteName() , 0 , strpos(Route::currentRouteName(), '.')) }} </span> --}}
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="{{ route('solicitud.index') }}" {{(substr(Route::currentRouteName() , 0 , strpos(Route::currentRouteName(), '.')) == 'solicitud' ? 'data-active=true' : '')}}
                aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i class="fa-solid fa-hand-holding-dollar mr-3"></i>
                    <span>Solicitud </span>
                    {{-- <span>Personas {{ substr(Route::currentRouteName() , 0 , strpos(Route::currentRouteName(), '.')) }} </span> --}}
                </div>
            </a>
        </li>

    </ul>
    <!-- <div class="shadow-bottom"></div> -->

</nav>
