<!DOCTYPE html>
<html lang="en">
<head>

    {{-- {!! asset !!} --}}

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alimentos GELA</title>

    <link rel="shortcut icon" href="{!! asset('/img/logo.png')!!}">
    <link rel="stylesheet" href="{!! asset('/css/styleSL.css')!!}">
    <link rel="stylesheet" href="{!! asset('/css/styleMain.css')!!}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('/css/carousel.css')!!}" >
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="collapse navbar-collapse"></div>
    <header class="p-2 mb-2">
        <div class="container-lg">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <button href="#" class="btn btn-outline-light-bottom-3 btn-lg">GelaStore</button>
            <br><br>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="#" class="nav-link px-2 link-dark">Acerca de nosotros</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Opciones de soporte</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Llamanos 👉 3004589584</a></li>
                        <li><a class="dropdown-item" href="#">Escribenos 👉 GelaStore@gmail.com</a></li>
                        <li><a class="dropdown-item" href="#">Chatea con nosotros 👉 +57 3004589584</a></li>
                    </ul>
                </li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Buscar... " aria-label="Search">
            </form>
            <div class="text-end">
                <a href="{{route('login.show')}}" type="button" class="btn btn-primary">Login</a>
                <a href="{{route('register.show')}}" type="button" class="btn btn-primary">Sign-up</a>
            </div>
            </div>
        </div>
    </header>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">

            <img class="d-block w-100" src="{!! asset('img/si2.jpg')!!}" style="width:100%" alt="First slide">
        </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{!! asset('img/si4.png')!!}" style="width:100%" alt="Second slide">
            </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{!! asset('img/si3.png')!!}" style="width:100%" alt="Third slide">

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


    <main>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">

                        <img src="{!! asset('/img/productos_img/coco.jpg')!!}">

                    <div class="card-body">
                        <h3><b class="cart-title">Coco</b></h3>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat fugiat nisi ab rerum est harum iure excepturi consequuntur.
                        Molestias veritatis accusamus odit sequi aut. Quidem quas assumenda explicabo officiis corporis.</p>
                        <b><p>$ 300.00</p></b>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="#" type="button" class="btn btn-md btn-outline-primary">Detalles</a>
                            </div>
                            <a href="#" type="button" class="btn btn-md btn-outline-success">Agregar</a>

                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img src="{!! asset('/img/productos_img/coco.jpg')!!}">

                    <div class="card-body">
                        <h3><b class="cart-title">Coco</b></h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, officia. Veniam, fugiat, enim tempora reiciendis aliquid magni dolore laborum,
                        vel fuga nulla delectus dolorem pariatur illum. Impedit nobis perspiciatis consequuntur.</p>
                        <b><p>$ 300.00</p></b>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{route('views')}}" type="button" class="btn btn-md btn-outline-primary">Detalles</a>
                            </div>
                            <a href="#" type="button" class="btn btn-md btn-outline-success">Agregar</a>

                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img src="{!! asset('/img/productos_img/coco.jpg')!!}">

                    <div class="card-body">
                        <h3><b class="cart-title">Coco</b></h3>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit, similique sit rem ad optio error!
                        Nulla blanditiis ratione quibusdam quasi beatae provident quidem ex harum, in modi, tempore, ullam mollitia? lore</p>
                        <b><p>$ 300.00</p></b>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="#" type="button" class="btn btn-md btn-outline-primary">Detalles</a>
                            </div>
                            <a href="#" type="button" class="btn btn-md btn-outline-success">Agregar</a>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 GELA</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
