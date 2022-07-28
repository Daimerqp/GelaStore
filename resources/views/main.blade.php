<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alimentos GELA</title>
    <link rel="shortcut icon" href="{{ asset('/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/styleSL.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/styleMain.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/carousel.css') }}" >
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        h1 {text-align: center;}
    </style>
</head>

<body>
    <script src="{{ asset('carrito.js')}}"></script>

    @include('layouts.partials.navbar')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/img/si2.jpg') }}" style="width:100%" alt="First slide">
        </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/img/si4.png') }}" style="width:100%" alt="Second slide">
            </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/img/si3.png') }}" style="width:100%" alt="Third slide">
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
    <h1 >Todos Nuestros Productos</h1>
        <br><br>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('/img/productos_img/coco.jpg') }}">

                    <div class="card-body">
                        <h3><b class="cart-title" id="nProduct">Coco Deshidratado</b></h3>
                        <p class="card-text">Descubre la versatilidad del coco deshidratado, puede ser tu gran aliado a la hora de preparar platos deliciosos y saludables. </p>
                        <b><p id="price">$ 4.000<br><br><br></p></b>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{ route('coco') }}" type="button" class="btn btn-md btn-outline-primary">Detalles</a>
                            </div>
                            <a href="#" type="button" class="btn btn-md btn-outline-success" onclick="getProduct">Agregar</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('/img/productos_img/almendras.jpg') }}">

                    <div class="card-body">
                        <h3><b class="cart-title" id="nProduct">Almendras</b></h3>
                        <p class="card-text">Las almendras son uno de los frutos secos más nutritivos del planeta, tienen un sabor delicado y dulzón, y contienen infinidad de propiedades beneficiosas para nuestro organismo.
                            Son ricas en fibras, proteínas, vitaminas B y E, grasas saludables.</p>
                        <b><p>$ 6.000</p></b>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{ route('almendras') }}" type="button" class="btn btn-md btn-outline-primary">Detalles</a>
                            </div>
                            <a href="#" type="button" class="btn btn-md btn-outline-success">Agregar</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('/img/productos_img/hojuelas.jpg') }}">

                    <div class="card-body">
                        <h3><b class="cart-title" id="nProduct">Hojuelas de Maiz</b></h3>
                        <p class="card-text">Que no falten esas deliciosas hojuelas en nuestros desayunos.
                            recuerda que vienen en diferentes presentaciones.</p>
                        <b><p>$ 3.500 <br><br><br><br></p></b>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{ route('hojuelas') }}" type="button" class="btn btn-md btn-outline-primary">Detalles</a>
                            </div>
                            <a href="#" type="button" class="btn btn-md btn-outline-success">Agregar</a>
                        </div>
                    </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('/img/productos_img/granola.jpg') }}">
                    <div class="card-body">
                        <h3><b class="cart-title" id="nProduct">Granola</b></h3>
                        <p class="card-text">Te traemos una excelente opción para tus comidas ligeras o intermedias. Tanto en la mañana como en un break de la tarde, nuestra granola,
                            a parte de deliciosa es una excelente opción para alimentarte y además, la puedes mezclar con tus bebidas y frutas favoritas.</p>
                        <b><p>$ 4.000</p></b>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{ route('granola') }}" type="button" class="btn btn-md btn-outline-primary">Detalles</a>
                            </div>
                            <a href="#" type="button" class="btn btn-md btn-outline-success">Agregar</a>
                        </div>
                    </div>

                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('/img/productos_img/quinua.jpg') }}">

                    <div class="card-body">
                        <h3><b class="cart-title" id="nProduct">Quinua</b></h3>
                        <p class="card-text">Es ampliamente utilizado en las sopas, en ensaladas,
                            usados como cereales o pastas e incluso se fermentan para obtener cerveza. Se usan en postres, galletas, masas y crepes</p>
                        <b><p>$ 8.000 <br><br><br><br> </p></b>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{ route('quinua') }}" type="button" class="btn btn-md btn-outline-primary">Detalles</a>
                            </div>
                            <a href="#" type="button" class="btn btn-md btn-outline-success">Agregar</a>
                        </div>
                    </div>

                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('/img/productos_img/arandanos.jpg') }}">

                    <div class="card-body">
                        <h3><b class="cart-title" id="nProduct">Arandanos Deshidratados</b></h3>
                        <p class="card-text">No hay otra palabra que describa este fruto deshidratado.</p>
                        Presentaciones perfectas para cada ocasión, desde
                        llevar un snak al trabajo hasta una presentación
                        perfecta para compartir con.
                        <b><p>$ 6.000</p></b>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                            <a href="{{ route('arandanos') }}" type="button" class="btn btn-md btn-outline-primary">Detalles</a>
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
        <p class="mb-1">&copy; 2022 GelaStore </p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
            <li class="list-inline-item"><a href="#">Twitter</a></li>
            <li class="list-inline-item"><a href="#">Soporte</a></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
