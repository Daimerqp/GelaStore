<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alimentos GELA</title>
    <link rel="shortcut icon" href="{{ asset('/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/styleMain.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/DetailGr.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>


<body>

    @include('layouts.partials.navbar')


    <main>
    <div class="container-md">
        <div class="row">
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('/img/productos_img/almendras.jpg') }}" width="500" height="500" alt="">
            </div>
            <div class="col-md-6 order-md-2">
                <h1>Almendras</h1>
                <div id="change"><h2>Precio(150gr): COP$ 6.000.00 <br></h2>
                <p class="lead">
                    <p><h4>Precios</h4>
                        <div class="my-3">
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">150gr(6.000.00)</label>
                            </div><br>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">250gr(8.000.00)</label>
                            </div><br>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">500gr(15.000.00)</label>
                            </div><br>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">1000gr(28.000.00)</label>
                            </div><br>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">5000gr(120.000.00)</label>
                            </div>
                        </div>
                    </p>
                    </p>
                </div>

                <div class="d-grid gap-4 col-8 mx-auto">
                        <a href="#" type="button" class="btn btn-md btn-outline-success">Agregar al carrito de compras</a>
                        <a href="{{route('pago')}}" type="button" class="btn btn-md btn-outline-success">Comprar ahora</a>
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

    <script src="/public/js/change.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
