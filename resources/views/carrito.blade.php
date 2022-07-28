<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alimentos GELA</title>
    <link rel="shortcut icon" href="{{ asset('/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/styleMain.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>


<body>

    @include('layouts.partials.navbar')

    <main>
        <script src="{{ asset('carrito.js')}}"></script>
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p onload="showProducto()"></p>
                            </td>
                            <td>
                                <p onload="showPrice()"></p>
                            </td>
                            <td>
                                <input type="number" min="1" max="30" step="1" value="" name="" id="cantidad">
                            </td>
                            <td>
                                <p onload="total"></p>
                            </td>
                            <td>
                                <a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="eliminarModal">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td colspan="2">
                                <p class="h3" id="total">#</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-4 offset-sm-6 d-grid gap-2">
                    <a href="#"class="btn btn-primary btn-md">Pagar</a>
                </div>
            </div>
        </div>
    </main>
    <br><br><br><br>
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
