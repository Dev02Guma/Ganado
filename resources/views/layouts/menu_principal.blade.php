<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Home</div>
        <ul class="pcoded-item pcoded-left-item">
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
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                    <span class="pcoded-mtext">Modulo 03</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="Usuarios">
                            <span class="pcoded-mtext">Usuarios</span>
                        </a>
                    </li>
                    @for ($i = 1; $i <= 3; $i++)
                        <li class="">
                            <a href="home">
                                <span class="pcoded-mtext">Sub Mod Opcion 0{{ $i }} </span>
                            </a>
                        </li>
                    @endfor

                </ul>
            </li>
        </ul>
    </div>
</nav>