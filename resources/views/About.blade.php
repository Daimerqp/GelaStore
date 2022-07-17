<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Acerca De Nosotros</title>
        <link rel="shortcut icon" href="/public/img/logo.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/public/css/styleAbout.css">
        <!--Bootstrap-->
        <link rel="stylesheet" href="/assets/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
<body id="fondo">
    
    <div class="contaiber-fluid">
        <header class="p-2 mb-0">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <button href="#" class="btn btn-outline-light-bottom-3 btn-lg">GelaStore</button>
                <br><br>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-dark">Acerca de nosotros</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Opciones de soporte</a></li>
                </ul>
                </div>
                </div>
            </div>
        </header>
    
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
        <img src="/public/img/granola.jpg" id="imgGr" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead" id="text1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, recusandae quasi? Cupiditate eum deserunt illo nam animi eos autem velit totam! Ut molestias assumenda nemo, quod maxime voluptate. Consequuntur, autem!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="main.html" data-toggle="tooltip" data-placement="right" title=" A GelaStore" type="button" class="btn btn-primary btn-lg px-4 me-md-2">GelaStore</a>
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
        <h2>Featured title1</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
    </div>
    <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
        </div>
        <h2>Featured title2</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
    </div>
    <div class="feature col">
        <div class="feature-icon d-inline-flex align-items-center justify-content-center bg-primary bg-gradient text-white fs-2 mb-3">
            <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <h2>Featured title3</h2>
        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
        </a>
    </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
});
</script> 
</body>
</html>