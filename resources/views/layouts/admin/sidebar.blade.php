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
            {{-- <a href="{{ route('persona.index') }}" {{(substr(Route::currentRouteName() , 0 , strpos(Route::currentRouteName(), '.')) == 'persona' ? 'data-active=true' : '')}} --}}
            <a href="#"
                aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i class="fa-solid fa-user-group mr-3"></i>
                    <span>Personas </span>
                    {{-- <span>Personas {{ substr(Route::currentRouteName() , 0 , strpos(Route::currentRouteName(), '.')) }} </span> --}}
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="#"
                aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <i class="fa-solid fa-hand-holding-dollar mr-3"></i>
                    <span>Solicitud </span>
                    {{-- <span>Personas {{ substr(Route::currentRouteName() , 0 , strpos(Route::currentRouteName(), '.')) }} </span> --}}
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="#secundaria" data-toggle="collapse" {{(substr(Route::currentRouteName() , 0 , strpos(Route::currentRouteName(), '.')) == 'secundaria' ? 'data-active=true' : '')}}
             aria-expanded="true" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    <span>Components</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </a>

            <ul class="collapse submenu list-unstyled {{(substr(Route::currentRouteName() , strpos(Route::currentRouteName(), '.') + 1 , strpos(Route::currentRouteName(), '.')) == 'pais.index' ? 'show' : '')}}" id="secundaria" data-parent="#accordionExample">
                <li class="{{(substr(Route::currentRouteName() , strpos(Route::currentRouteName(), '.') + 1 , strpos(Route::currentRouteName(), '.')) == 'pais.index' ? 'active' : '')}}">
                    <a href="{{ route('secundaria.pais.index') }}"> Pais </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- <div class="shadow-bottom"></div> -->

</nav>
