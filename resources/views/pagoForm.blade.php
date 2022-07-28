<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Pagar Pedido</title>
    <link rel="stylesheet" href="{{ asset('/css/stylePago.css') }}">
    <link rel="shortcut icon" href="/public/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <style>
    .container {
      max-width: 960px;
  }
  </style>

  <body class="bg-light">
  @include('layouts.partials.navbar')
<div class="container">

  <main>
    <br><br><br>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Productos en tu carrito</span>
          <span class="badge bg-primary rounded-pill">#</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Second product</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Third item</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (COP)</span>
            <strong>$</strong>
          </li>
        </ul>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Datos de envio</h4>

        <form action="{{ route('pagoTest') }}" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombres</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Se solicita su nombre
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellidos</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Se solicita almenos un apellido
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nombre de usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Nombre de usuario" required>
              <div class="invalid-feedback">
                  Se solicita su nombre de usuario
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Correo electronico <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="usted@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
                Se necesita una direccion de entrega
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Dirección 2<span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Pais</label>
              <select class="form-select" id="country" required>
                <option value="">Elegir</option>
                <option>Colombia</option>
              </select>
              <div class="invalid-feedback">
                Por favor ingrese un pais valido
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Ciudad</label>
              <select class="form-select" id="state" required>
                <option value="">Elegir</option>
                <option>Medellín</option>
                <option value="">Bogotá</option>
              </select>
              <div class="invalid-feedback">
                Por favor ingrese una ciudad disponible
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Codigo postal</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Se necesita un codigo postal
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Guardar información</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Método de pago</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Tarjeta de Debito/Credito</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>
          <hr class="my-4">
          @auth
          <button class="w-100 btn btn-primary btn-lg" type="submit">Continuar</button>
          @endauth
          @guest
          {{-- {{auth()->user()->name}} --}}
          <button class="w-100 btn btn-primary btn-lg" disabled type="submit">Continuar</button>
          @endguest
        </form>
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
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="{{ asset('/js/pagoVal.js') }}"></script>
  </body>
</html>
