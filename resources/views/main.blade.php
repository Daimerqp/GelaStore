<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimentos GELA</title>
    <link rel="shortcut icon" href="../resources/img/logo.jpg">
    <link rel="stylesheet" href="../resources/css/styleSL.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
</head>
<body bgcolor="#4E79C9">
    <header>
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="{{route('regis')}}">Registrate!</a>
            <a href="Iniciar.blade.php">Iniciar Sesion</a>
            <a href="Soporte.blade.php">Tienes algun problema?</a>
            <a href="AboutUs.blade.php">Acerca de nosotros</a>
        </div
        <div id="main">
          <button class="openbtn" onclick="openNav()">☰</button>  
        </div>
          
          <script src="../resources/js/SideLeft.js"></script>

        <section clas="Titulo" id="titulo">
            <h1>Alimentos Gela</h1>
            <h2><br></h2>
            <h3>Bienvenido a nuestra tienda de productos!</h3>
        </section>
    </header>
    <div class="slideshow-container" id="slideshow">
      
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="../resources/img/si2.jpg" style="width:100%" >
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="../resources/img/si4.png"  style="width:75% height=75%">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="../resources/img/si3.png" style="width:100%">
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    
    <script src=../resources/js/SlideAni.js></script>

    <!-- <div class="container">
        <button class="bton-prod"><h1>Coco</h1></button>
    </div> -->

<!-- <section class="Productos-nuevos">
        <div class="imagen-ent">
            <img src="IMGN/logo.jpg" alt=""> 
              <p>Producto:</p> 
        </div>
        <div class="imagen-ent">
            <img src="IMGN/logo.jpg" alt=""> 
              <p>Producto:</p> 
        </div>
        <div class="imagen-ent">
            <img src="IMGN/logo.jpg" alt=""> 
              <p>Producto:</p> 
        </div>
    </section>  -->
    
</body>

</html>