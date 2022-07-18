<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate!</title>
    <link rel="shortcut icon" href="/resources/img/logo.png">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('/css/estilos3.css') !!}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}
    <script src="https://kit.fontawesome.com/b56bb6e72c.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <form action="" class="formulario " id="formulario">
            <!--Usuario-->
            <div class="formulario_grupo" id="_usuario">
                <label for="usuario" class="formulario_label">Usuario</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="usuario" id="usuario" placeholder="Nombre de usuario">
                    <i class="formulario_estado  fa-solid fa-circle-xmark"></i>
                </div>
                <p class="formulario_error">El nombre de usuario debe tener minimo 4 digitos y máximo 16, sin espacios, puede contener numeros y carácteres especiales</p>
            </div>
            <!--Nombre-->
            <div class="formulario_grupo" id="_nombre">
                <label for="nombre" class="formulario_label">Nombre</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder="Nombre" required>
                    <i class="formulario_estado fa-solid fa-circle-xmark"></i>
                </div>
                <p class="formulario_error">El nombre debe tener minimo 2 letras, sin numeros ni caracteres especiales</p>
            </div>
            {{-- APELLIDO --}}
            <div class="formulario_grupo" id="_apellido">
                <label for="nombre" class="formulario_label">Apellido</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="apellido" id="apellido" placeholder="Apellido" required>
                    <i class="formulario_estado fa-solid fa-circle-xmark"></i>
                </div>
                <p class="formulario_error">El nombre debe tener minimo 2 letras, sin numeros ni caracteres especiales</p>
            </div>
            <!--Contraseña-->
            <div class="formulario_grupo" id="_contraseña">
                <label for="contraseña" class="formulario_label">Contraseña</label>
                <div class="formulario_grupo-input">
                    <input type="password" class="formulario_input" name="contraseña" id="contraseña" required>
                    <i class="formulario_estado fa-solid fa-circle-xmark"></i>
                </div>
                <p class="formulario_error">La contraseña dene tener minimo 4 digitos</p>
            </div>

            <!--Contraseña_confirmacion-->
            <div class="formulario_grupo" id="_contraseña-con">
                <label for="contraseña-con" class="formulario_label">Confirmar Contraseña</label>
                <div class="formulario_grupo-input">
                    <input type="password" class="formulario_input" name="contraseña2" id="contraseña" required>
                    <i class="formulario_estado fa-solid fa-circle-xmark"></i>
                </div>
                <p class="formulario_error">Las contraseñas no coinciden</p>
            </div>

            <!--Correo de contacto-->
            <div class="formulario_grupo" id="_correo">
                <label for="correo" class="formulario_label">Correo electronico</label>
                <div class="formulario_grupo-input">
                    <input type="email" class="formulario_input" name="correo" id="correo" placeholder="Example@mail.com" required>
                    <i class="formulario_estado fa-solid fa-circle-xmark"></i>
                </div>
                <p class="formulario_error">El correo debe contener una terminacion "@mail.com"</p>
            </div>

            <!--Telefono-->
            <div class="formulario_grupo" id="_telefono">
                <label for="Telefono" class="formulario_label">Telefono</label>
                <div class="formulario_grupo-input">
                    <input type="text" class="formulario_input" name="telefono" id="Telefono" placeholder="3XXXXXXXXX" required>
                    <i class="formulario_estado fa-solid fa-circle-xmark"></i>
                </div>
                <p class="formulario_error">Este campo solo puede tener caracteres numericos, minimo 7 y maximo 10 digitos</p>
            </div>
            {{-- FORM PAIS --}}
            <div class="formulario_grupo" id="_pais">
                <label for="pais" class="formulario_label">Selecciona tu pais</label>
                <div class="formulario_grupo-input">
                    <select class="formulario_input" name="pais" id="pais" onchange="mosOcu()" required>
                        <option value="">Selecciona tu pais</option>
                        <option value="AG">Antigua y Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AW">Aruba</option>
                        <option value="AZ">Azerbaiyán</option>
                        <option value="BS">Bahamas</option>
                        <option value="BB">Barbados</option>
                        <option value="BZ">Belice</option>
                        <option value="BR">Brasil</option>
                        <option value="CA">Canadá</option>
                        <option value="CL">Chile</option>
                        <option value="CO">Colombia</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CU">Cuba</option>
                        <option value="EC">Ecuador</option>
                        <option value="SV">El Salvador</option>
                        <option value="US">Estados Unidos</option>
                        <option value="GR">Grecia</option>
                        <option value="GL">Groenlandia</option>
                        <option value="GT">Guatemala</option>
                        <option value="HT">Haití</option>
                        <option value="HN">Honduras</option>
                        <option value="IS">Islandia</option>
                        <option value="KY">Islas Caimán</option>
                        <option value="CC">Islas de Cocos o Keeling</option>
                        <option value="FK">Islas Malvinas</option>
                        <option value="JM">Jamaica</option>
                        <option value="MX">México</option>
                        <option value="PA">Panamá</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Perú</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="ZA">República de Sudáfrica</option>
                        <option value="DO">República Dominicana</option>
                        <option value="TT">Trinidad y Tobago</option>
                        <option value="UY">Uruguay</option>
                        <option value="VE">Venezuela</option>
                        </select>
                    <i class="formulario_estado fa-solid fa-circle-xmark"></i>
                </div>
                <p class="formulario_error">Debes seleccionar tu pais</p>
            </div>
            <div id="extra"> {{-- Oculto/Visible --}}
            {{-- DEPARTAMENTO --}}
            <div class="formulario_grupo" id="_pais">
                <label for="pais" class="formulario_label">Selecciona Departamento o Provincia</label>
                <div class="formulario_grupo-input">
                    <select class="formulario_input" id="departamento" name="departamento" required>
                        <option value = ""> </option>
                        <option value = "Amazonas">Amazonas</option>
                        <option value = "Antioquia">Antioquia</option>
                        <option value = "Arauca">Arauca</option>
                        <option value = "Atlántico">Atlántico</option>
                        <option value = "Bolívar">Bolívar</option>
                        <option value = "Boyacá">Boyacá</option>
                            <option value = "Caldas">Caldas</option>
                        <option value = "Caquetá">Caquetá</option>
                        <option value = "Casanare">Casanare</option>
                        <option value = "Cauca">Cauca</option>
                        <option value = "Cesar">Cesar</option>
                        <option value = "Chocó">Chocó</option>
                        <option value = "Córdoba">Córdoba</option>
                        <option value = "Cundinamarca">Cundinamarca</option>
                        <option value = "Guainía">Guainía</option>
                            <option value = "Guaviare">Guaviare</option>
                        <option value = "Huila">Huila</option>
                        <option value = "La Guajira">La Guajira</option>
                        <option value = "Magdalena">Magdalena</option>
                            <option value = "Meta">Meta</option>
                        <option value = "Nariño">Nariño</option>
                        <option value = "Norte de Santander">Norte de Santander</option>
                        <option value = "Putumayo">Putumayo</option>
                        <option value = "Quindío">Quindío</option>
                            <option value = "Risaralda">Risaralda</option>
                        <option value = "San Andrés y Providencia">San Andrés y Providencia</option>
                        <option value = "Santander">Santander</option>
                        <option value = "Sucre">Sucre</option>
                        <option value = "Tolima">Tolima</option>
                        <option value = "Valle del Cauca">Valle del Cauca</option>
                        <option value = "Vaupés">Vaupés</option>
                        <option value = "Vichada">Vichada</option>
                      </select>
                    <i class="formulario_estado fa-solid fa-circle-xmark"></i>
                </div>
                <p class="formulario_error">Debes seleccionar tu pais</p>
            </div>

        </div>{{-- FIN Oculto/Visible --}}
            <!--Tratamiento de datos-->
            <div class="formulario_grupo abs-center" id="_tratamiento">
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
    <script src="{!! asset('js/ubicacion.js') !!}"></script>
    <script src="{!! asset('js/formulario.js') !!}"></script>
</body>

</html>
