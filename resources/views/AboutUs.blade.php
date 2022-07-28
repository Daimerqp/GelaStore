<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Acerca De Nosotros</title>
        <link rel="shortcut icon" href="{{ asset('/img/logo.png') }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/styleAbout.css') }}">
        <!--Bootstrap-->
        <link rel="stylesheet" href="/assets/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
<body id="fondo">

@include('layouts.partials.navbar')

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('/img/gela.png') }}" id="imgGr" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
        </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Alimentos Gela</h1>
        <p class="lead" id="text1">Tenemos un amplio portafolio de productos para que puedas tener una alimentación
            variada , saludable y siempre deliciosa.
            Si deseas más información contáctanos al <br> 📲3023219897 o visita nuestra pagina web 👇</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="{{ route('main') }}" data-toggle="tooltip" data-placement="right" title=" A GelaStore" type="button" class="btn btn-primary btn-lg px-4 me-md-2">GelaStore</a>
        </div>
    </div>
    </div>
</div>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('/img/gela2.jpg') }}" id="imgGr" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy">
        </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Compromiso con el consumidor</h1>
        <p class="lead" id="text1">El comienzo de cada semana, es la oportunidad perfecta para continuar trabajando como lo hemos hecho año tras año, con mucho amor, pasión y entrega.
            Para que puedas alimentarte con alimentos de buena calidad, frescos y deliciosos.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="{{ route('main') }}" data-toggle="tooltip" data-placement="right" title=" A GelaStore" type="button" class="btn btn-primary btn-lg px-4 me-md-2">GelaStore</a>
        </div>
    </div>
    </div>
</div>

<div class="container px-4 py-5" id="featured-3">
    <h2>Nuestro equipo web</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
        </div>
        <h2>Daimer Quintero</h2>
        <p>Estudiante del SENA especializado en Back-End web</p>
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
    </div>
    <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
        </div>
        <h2>Cristian Ortiz</h2>
        <p>Estudiante del SENA especializado en Front-End web</p>
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
    </div>
    </div>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 GelaStore </p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
        <li class="list-inline-item"><a href="#">Twitter</a></li>
        <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
</footer>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
