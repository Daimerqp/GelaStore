<!doctype html>
<html lang="eS">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{!! asset('/img/logo.jpg') !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesion GELA</title>
    <link rel="stylesheet" href="{!! asset('/css/app.css') !!}">
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

</head>
<body class="text-center">

<main class="form-signin">
<div class="container-sm">
        <form method="post">
            @csrf
            <div class="col-xs-1">
                <img class="mb-4" src="/img/logo.jpg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Inicia sesión</h1>
                        {{-- MENSAJE DE ERROR --}}
                @error('message')
                    <div class="alert alert-danger">
                        <strong>ERROR!</strong> Verifica los datos de ingreso.
                    </div>
                @enderror

                            {{-- FORMULARIO DE LOGUEO --}}
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    <label for="floatingInput">Ingresa tu e-mail</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="email" name="password" placeholder="Password">
                    <label for="floatingPassword">Ingresa tu contraseña</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="remember-me"> Recordar
                    </label>
                </div>
                                    {{-- BOTON DE ENVÍO --}}
                <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>

            </div>
        </form>
</div>
<p class="mt-5 mb-3 text-muted">GELA &copy; 2022</p>
</main>



</body>
</html>
