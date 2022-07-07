<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alimentos GELA</title>
    <link rel="shortcut icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../css/styleSL.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Bootstrap-->
    <link href="./resources/css/carousel.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body bgcolor="#0000">

    <div class="contaiber-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-black border-3 border-bottom border-primary">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">GELASTORE</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNav">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="containertgl" onclick="Funtionch(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </span>
                </button>
                <div id="MenuNav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item"><a class="nav-link" href="..views/registro.html">Registrate.</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('iniciar')}}">Iniciar Sesion.</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Acerca de nsotros.</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">Opciones de soporte tecnico.</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Llamanos.</a></li>
                                <li><a class="dropdown-item" href="#">Escribenos.</a></li>
                                <li><a class="dropdown-item" href="#">Correo electronico.</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="../img/si2.jpg" style="width:100%" alt="First slide">
        </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="../img/si4.png" style="width:100%" alt="Second slide">
            </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../img/si3.png" style="width:100%" alt="Third slide">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="../img/coco.jpg">

                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat fugiat nisi ab rerum est harum iure excepturi consequuntur.
                        Molestias veritatis accusamus odit sequi aut. Quidem quas assumenda explicabo officiis corporis.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Eliminar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Modificar</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="../img/coco.jpg">

                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, officia. Veniam, fugiat, enim tempora reiciendis aliquid magni dolore laborum,
                        vel fuga nulla delectus dolorem pariatur illum. Impedit nobis perspiciatis consequuntur.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Eliminar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Modificar</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src= '..\img\coco.jpg'>

                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit, similique sit rem ad optio error!
                        Nulla blanditiis ratione quibusdam quasi beatae provident quidem ex harum, in modi, tempore, ullam mollitia? lore</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Eliminar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Modificar</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
            <a href="#">Inicio</a>
            </p>
            <p class="mb-1"> &copy;GelaStore</p>
        </div>
    </footer>

    <script src=/resources/js/SlideAni.js></script>
    <script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
