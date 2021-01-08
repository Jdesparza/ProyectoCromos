<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CroNomía</title>
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <header class="encabezado">
        <img src="../../img/money-stack 1.png" alt="">
        <h1>CroNomía</h1>
        <h2>La Economía Basada en Cromos</h2>
    </header>
    <nav class="menuPrincipalNavegando">
        <div class="menuPrincipal4">
            <a href="/homeAdmin" class="menu1">
                <img src="../../img/gerente 1.png" alt="">
                Administración
            </a>
            <a href="/adminUsers">
                <img src="../../img/users-solid 1.png" alt="">
                Usuarios
            </a>
            <a href="/adminTematicas">
                <img src="../../img/controlador-de-gamepad 1.png" alt="">
                Temáticas
            </a>
            <a href="/uploadCromos">
                <img src="../../img/cloud-solid 1.png" alt="">
                Cromos
            </a>
            <a href="/uploadPreguntas">
                <img src="../../img/cloud-solid (1) 1.png" alt="">
                Preguntas
            </a>
        </div>
        <div class="menuPrincipal5">
            <ul>
                <li>
                    <a class="menuUser">
                        <p class="nombreUser">{{ Auth::user()->name }}</p>
                    </a>
                    <ul>
                        <li>
                            <div class="menuLogout">
                                <a class="menuLogout1" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>
    <footer class="piePagina">
        <p class="informacion">
            Copyright © 2020, All Rigthts Reserved
        </p>
        <ul class="redesSociales">
            <li>
                <img src="../../img/facebook-brands 1.png" alt="">
            </li>
            <li>
                <img src="../../img/Twitter 1.png" alt="">
            </li>
            <li>
                <img src="../../img/instagram 1.png" alt="">
            </li>
        </ul>
        <div class="utpl">
            <img src="../../img/ba.png" alt="">
        </div>
    </footer>
</body>
</html>