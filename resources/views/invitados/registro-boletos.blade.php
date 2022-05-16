<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Nuestra Boda Miriam Y Aarón</title>
    <link href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body>
    <div class="contenedor-menu bg-blanco">
        <div class="logo text-center text-white">
            <br>
            <h2>Miriam <span>&</span> Aarón</h2>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-blanco navbar-principal">
            <div class="container-fluid">
                <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#NuestraHistoria">Nuestra Historia </a>
                            <hr class="bg-boda">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#LaBoda">La Boda </a>
                            <hr class="bg-boda">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Ubicacion">Ubicación </a>
                            <hr class="bg-boda">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#MesaRegalos">Mesa de Regalo </a>
                            <hr class="bg-boda">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contacto">Contacto </a>
                            <hr class="bg-boda">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"> Inisiar Sesión</a>
                            <hr class="bg-boda">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register </a>
                            <hr class="bg-boda">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
  

</html>
