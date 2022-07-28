<div class="collapse navbar-collapse"></div>
    <header class="p-2 mb-2">
        <div class="container-lg">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <button href="#" class="btn btn-outline-light-bottom-3 btn-lg">GelaStore</button>
            <br><br>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 link-dark">Acerca de nosotros</a></li>
                <li class="nav-item"><a href="{{ route('carrito') }}" class="nav-link px-2 link-dark">Tu carrito</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Opciones de soporte</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="mailto:gelastore@gmail.com">Escribenos</a></li>
                        <li><a class="dropdown-item" href="https://api.WhatsApp.com/send?phone=3012439584">Chatea con nosotros</a></li>
                    </ul>
                </li>
            </ul>

        @auth
            {{auth()->user()->name}}
            <div class="text-end px-2">
            <a href="{{ route('logout.perform') }}" class="btn btn-primary me-2">Logout</a>
            </div>
         @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-primary me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>
