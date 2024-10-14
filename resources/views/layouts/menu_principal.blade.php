<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Home</div>
        <ul class="pcoded-item pcoded-left-item">
             <li class="">
                <a href="home">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Inicio</span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Modulo 01</span>
                </a>
                <ul class="pcoded-submenu">
                    @for ($i = 1; $i <= 5; $i++)
                        <li class="">
                            <a href="home">
                                <span class="pcoded-mtext">Sub Mod Opcion 0{{ $i }} </span>
                            </a>
                        </li>
                    @endfor
                    
                </ul>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                    <span class="pcoded-mtext">Modulo 02</span>
                </a>
                <ul class="pcoded-submenu">
                    @for ($i = 1; $i <= 5; $i++)
                        <li class="">
                            <a href="home">
                                <span class="pcoded-mtext">Sub Mod Opcion 0{{ $i }} </span>
                            </a>
                        </li>
                    @endfor
                    
                </ul>
            </li>
            <li class="pcoded-hasmenu {{ (request()->is('Fincas') || request()->is('Lotes') || request()->is('Bovinos') || request()->is('Usuarios') ) ? 'active pcoded-trigger' : '' }} ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-settings"></i></span>
                    <span class="pcoded-mtext">Catalogos</span>
                </a>
                <ul class="pcoded-submenu">
                    
                    <li class="{{ (request()->is('Fincas')) ? 'active' : '' }}">
                        <a href="Fincas">
                            <span class="pcoded-mtext">Fincas</span>
                        </a>
                    </li>
                    <li class="{{ (request()->is('Lotes')) ? 'active' : '' }}">
                        <a href="Lotes">
                            <span class="pcoded-mtext">Lotes</span>
                        </a>
                    </li>
                    <li class="{{ (request()->is('Bovinos')) ? 'active' : '' }}">
                        <a href="Bovinos">
                            <span class="pcoded-mtext">Bovinos</span>
                        </a>
                    </li>
                    <li class="{{ (request()->is('Usuarios')) ? 'active' : '' }}">
                        <a href="Usuarios">
                            <span class="pcoded-mtext">Usuarios</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>