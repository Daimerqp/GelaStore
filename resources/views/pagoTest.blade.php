<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{ asset('/img/logo.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Pagar compra</title>

    <script src="https://www.paypal.com/sdk/js?client-id=AeAbBP26bjOqlMLlJF-2OTndvVvQGTgtmLbMq6lj_-pU9V-iKYicoMvQwSzK0tiQIlJAP2dC7Fv6XEOD&currency=USD"></script>
</head>
<body class="d-center h-100px text-center text-dark bg-white">

@include('layouts.partials.navbar')

    <main>
    <div class="p-lg-5" id="paypal-button-container" name="paypalBtn"></div>
    <script src="{{ asset('/js/PaypalSc.js') }}"></script>
    </main>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2022 GelaStore </p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
            <li class="list-inline-item"><a href="#">Twitter</a></li>
            <li class="list-inline-item"><a href="#">Soporte</a></li>
        </ul>
    </footer>
</body>
</html>
