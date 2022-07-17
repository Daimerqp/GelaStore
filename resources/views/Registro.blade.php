<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrate!</title>
	<link rel="shortcut icon" href="">
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="{!! asset('/css/estilos3.css') !!}">
	
</head>
<body>
	<main>
		<form action ="" class="formulario " id = "formulario">
			<!--Usuario-->
			<div class="formulario_grupo" id = "_usuario">
				<label for="usuario" class ="formulario_label">Usuario</label>
				<div class="formulario_grupo-input">
					<input type="text" class = "formulario_input" name ="usuario" id ="usuario" placeholder ="Nombre de usuario">
					<i class="formulario_estado  fa-solid fa-circle-xmark"></i>
				</div>
				<p class="formulario_error">El nombre de usuario debe tener minimo 4 digitos y máximo 16, sin espacios, puede contener numeros y carácteres especiales</p>	
			</div>
			<!--Nombre-->
			<div class="formulario_grupo" id = "_nombre">
				<label for="nombre" class ="formulario_label">Nombre</label>
				<div class="formulario_grupo-input">
					<input type="text" class = "formulario_input" name ="nombre" id ="nombre" placeholder ="Nombre">
					<i class="formulario_estado fa-solid fa-circle-xmark"></i>
				</div>
				<p class="formulario_error">El nombre debe tener minimo 2 letras, sin numeros ni caracteres especiales</p>	
			</div>	
			<!--Contraseña-->
			<div class="formulario_grupo" id = "_contraseña">
				<label for="contraseña" class ="formulario_label">Contraseña</label>
				<div class="formulario_grupo-input">
					<input type="password" class = "formulario_input" name ="contraseña" id ="contraseña">
					<i class="formulario_estado fa-solid fa-circle-xmark"></i>
				</div>
				<p class="formulario_error">La contraseña dene tener minimo 4 digitos</p>	
			</div>

			<!--Contraseña_confirmacion-->
			<div class="formulario_grupo" id = "_contraseña-con">
				<label for="contraseña-con" class ="formulario_label">Confirmar Contraseña</label>
				<div class="formulario_grupo-input">
					<input type="password" class = "formulario_input" name ="contraseña2" id ="contraseña">
					<i class="formulario_estado fa-solid fa-circle-xmark"></i>
				</div>
				<p class="formulario_error">Las contraseñas no coinciden</p>	
			</div>

			<!--Correo de contacto-->
			<div class="formulario_grupo" id = "_correo">
				<label for="correo" class ="formulario_label">Correo electronico</label>
				<div class="formulario_grupo-input">
					<input type="email" class = "formulario_input" name ="correo" id ="correo" placeholder ="nombrecorreo@gmail.com">
					<i class="formulario_estado fa-solid fa-circle-xmark"></i>
				</div>
				<p class="formulario_error">El correo debe contener una terminacion "@gmail.com"</p>	
			</div>

			<!--Telefono-->
			<div class="formulario_grupo" id = "_telefono">
				<label for="Telefono" class ="formulario_label">Telefono</label>
				<div class="formulario_grupo-input">
					<input type="text" class = "formulario_input" name ="telefono" id ="Telefono" placeholder ="3148965685">
					<i class="formulario_estado fa-solid fa-circle-xmark"></i>
				</div>
				<p class="formulario_error">Este campo solo puede tener caracteres numericos, minimo 7 y maximo 10 digitos</p>
			</div>

			<!--Tratamiento de datos-->
			<div class="formulario_grupo" id="_tratamiento">
				<label class="formulario_label">
					<input class= "formulario_checkbox" type="checkbox" name="tratamiento" id="tratamiento">Acepto el tratamiento de datos
				</label>
			</div>

			<div class="error_formulario" id="error_formulario">
				<i class="fa-solid fa-triangle-exclamation"></i> <b>Error:</b>Todos los campos deben de estar completos
			</div>

			<div class="formulario_grupo formulario_enviar">
				<button type="submit" class="formulario_boton">Enviar</button>
				<p class="mensaje_envio" id="mensaje_envio">Se ha enviado el formulario</p>
			</div>
		</form>
		
	</main>

	<script src="/resources/js/formulario.js"></script>
</body>
</html>