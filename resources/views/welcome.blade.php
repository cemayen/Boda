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
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="filtro d-flex align-items-center justify-content-center">
            <h2>Nuestra Boda</h2>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/ejemplo2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/ejemplo2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/ejemplo2.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="titulo mt-5 mb-5 text-center" id="NuestraHistoria">
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
        <br>
        <h2 class="text-center">Nuestra Historia</h2>
        <br>
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
    </div>
    <div class="container p-4">
        <span class="linea"></span>
        <div class="row">
            <div class="col-md-5">
                <div class="card mx-auto border-0 img-respon" style="width: 18rem;">
                    <img src="{{ asset('img/ejemplo3.jpg') }}" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">Nos conocimos</h4>
                        <p class="card-text text-justify">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-2 icono-hidden">
                <div class="icono-boda text-center mt-5">
                    <img src="{{ asset('img/icono4.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-5 icono-hidden">

            </div>
        </div>
        <div class="row">
            <div class="col-md-5 icono-hidden">

            </div>
            <div class="col-md-2 icono-hidden">
                <div class="icono-boda text-center mt-5">
                    <img src="{{ asset('img/icono4.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mx-auto border-0 img-respon" style="width: 18rem;">
                    <img src="{{ asset('img/ejemplo3.jpg') }}" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">Amistad</h4>
                        <p class="card-text text-justify">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="card mx-auto border-0 img-respon" style="width: 18rem;">
                    <img src="{{ asset('img/ejemplo3.jpg') }}" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">Noviazgo</h4>
                        <p class="card-text text-justify">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-2 icono-hidden">
                <div class="icono-boda text-center mt-5">
                    <img src="{{ asset('img/icono4.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-5 icono-hidden">

            </div>
        </div>
        <div class="row">
            <div class="col-md-5 icono-hidden">

            </div>
            <div class="col-md-2 icono-hidden">
                <div class="icono-boda text-center mt-5">
                    <img src="{{ asset('img/icono4.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mx-auto border-0 img-respon" style="width: 18rem;">
                    <img src="{{ asset('img/ejemplo3.jpg') }}" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">Compromiso</h4>
                        <p class="card-text text-justify">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="titulo mt-5 mb-5 text-center" id="LaBoda">
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
        <br>
        <h2 class="text-center">La Boda</h2>
        <h3 class="text-center">07 Enero 2023</h3>
        <br>
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
    </div>
    <div class="container">
        <br>
        <div class="container bg-light border-1 p-3 rounded-3 fecha">
            <br>
            <h3 class="text-center mb-5">Faltan</h3>
            <div id="cuenta"></div>
            <br><br><br>
        </div>
    </div>
    <br>
    <div class="titulo mt-5 mb-5 text-center" id="Ubicacion">
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
        <br>
        <h2 class="text-center">Ubicación</h2>
        <br>
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
    </div>
    <div class="mapa">
        <h3 class="text-center">El Rosedal Jardín de Eventos</h3>
        <p class="text-center">Av de las Minas, San Francisco Tlaltenco, Lopez Portillo, Tláhuac, 13400 Ciudad de
            México, CDMX</p>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.4940988687786!2d-99.02138778578366!3d19.304354349772826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce02d14660aeb1%3A0xe011e296aacb3fec!2sEl%20Rosedal%20Jard%C3%ADn%20de%20Eventos!5e0!3m2!1ses-419!2smx!4v1652593503751!5m2!1ses-419!2smx"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <br>
    <div class="titulo mt-5 mb-5 text-center" id="MesaRegalos">
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
        <br>
        <h2 class="text-center">Mesa de Regalos</h2>
        <br>
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
    </div>
    <div class=" bg-alterno p-3">
        <div class="container">
            <div class="card mb-3 border-0 bg-transparent">
                <div class="row g-0">
                    <div class="col-md-6 d-flex align-items-center mesa-regalos-border ">

                        <div class="card-body d-block mt-2">
                            <div class="card-img text-center">
                                <img src="{{ asset('img/liverpool.png') }}" class="img-fluid w-50 " alt="...">
                            </div>

                            <p class="card-text text-center mt-2"><a href="https://mesaderegalos.liverpool.com.mx/eventodebusqueda" target="blank" class="text-dark">Ir a la Mesa de
                                    Regalos &nbsp; <i class="fal fa-arrow-right"></i> </a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="card-title text-center">Datos del Novio y la Novia:</h4>
                            <br>
                            <div class="row">
                                <div class="col-md-6 mesa-borde text-center">
                                    <ul class="datos-mesa list-unstyled">
                                        <li>Nombre: <b>Cruz Aaron</b> </li>
                                        <li>Apellido Paterno: <b>Cruz</b> </li>
                                        <li>Apellido Materno: <b>Juarez</b> </li>
                                        <li>Fecha del Evento: <b>8/Enero/2023</b> </li>
                                        <li>Tipo de Evento: <b>Boda</b></li>
                                        <li>Número de Evento: <b>50905717</b></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 text-center">
                                    <ul class="datos-mesa list-unstyled">
                                        <li>Nombre: <b>Miriam Cecilia</b> </li>
                                        <li>Apellido Paterno: <b>Mayen</b> </li>
                                        <li>Apellido Materno: <b>Martinez</b> </li>
                                        <li>Fecha del Evento: <b>8/Enero/2023</b> </li>
                                        <li>Tipo de Evento:  <b>Boda</b></li>
                                        <li>Número de Evento: <b>50905717</b></li>
                                    </ul>
                                </div>
                                <p class="text-center mt-3"><small>*Nota: se recomienda entrar por número de evento</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="titulo mt-5 mb-5 text-center" id="Contacto">
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
        <br>
        <h2 class="text-center">Contacto</h2>
        <br>
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
    </div>
    <h4 class="text-center">Para dudas o suguerencias comunicate al suiguiente números o dejanos un correo</h4>
    <br>
    <div class="formulario">
        <div class="container">
            <div class="card mb-3 border-0 bg-alterno p-4">
                <div class="row g-0">
                    <div class="col-md-6 d-flex align-items-center mesa-regalos-border ">

                        <div class="contactos">
                            <p class="m-4"><i class="fas fa-phone-square-alt"></i> Telefono: </p>
                            <p class="m-4"><i class="fab fa-whatsapp-square"></i> WhatsApp: </p>
                            <p class="m-4"><i class="fad fa-envelope"></i> Correo: </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <form>


                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre:</label>
                                    <input type="text" id="name" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo:</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Correo electronico">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Número de Teléfono:</label>
                                    <input type="tel" id="phone" class="form-control"
                                        placeholder="Número de Teléfono">
                                </div>
                                <br>
                                <button type="submit" class="btn w-100">Enviar</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="titulo mt-5 mb-5 text-center" id="Contacto">
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
        <br>
        <h2 class="text-center">Descargar Boletos</h2>
        <br>
        <div class="separador text-center">
            <img src="{{ asset('img/separador3.png') }}" width="350" alt="">
        </div>
        <br><br>
        <a class="btn btn-boletos" href="{{ route('login') }}" role="button">Boletos</a>

    </div>
    <br>
    <br>
    <footer>
        <p class="text-center">www.nuestraboda.com</p>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/simplyCountdown.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

</body>

</html>
