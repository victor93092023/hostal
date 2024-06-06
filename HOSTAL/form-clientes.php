<!DOCTYPE html>
<HTML lang="es">
  <HEAD>
    <TITLE>Administración Hotel</TITLE>
    <?php //Metaetiquetas globales importadas
      include ('metaetiquetas-generales.php');
    ?>
    <META name='revised' content='Tuesday, February 20th, 2017, 11:08 pm' /><!--Última revisión del sitio-->
  </HEAD>

  <BODY>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de cliente</title>
    <!-- Aquí puedes incluir tus enlaces a CSS, fuentes, etc. -->
    <style>
        body {
            font-family: 'Century Gothic', Century Gothic;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .formulario {
            margin-top: 50px; /* Ajusta la distancia del formulario desde la parte superior */
            margin-bottom: 50px; /* Ajusta la distancia del formulario desde la parte inferior */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap; /* Permite que los elementos se envuelvan */
            width: 90%; /* Ancho del formulario */
            max-width: 800px; /* Ancho máximo del formulario */
            margin: 50px auto; /* Centra el formulario horizontalmente */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .formulario h2 {
            margin-bottom: 20px;
            text-align: center;
            width: 100%; /* Asegura que el título ocupe todo el ancho */
        }

        .formulario label {
            width: 100%; /* Ancho completo para los nombres de las celdas */
            font-weight: bold;
            margin-bottom: 5px; /* Espacio entre las celdas */
        }

        .formulario input[type="text"] {
            width: 100%; /* Ancho completo para los espacios de entrada */
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .formulario input[type="button"] {
            width: 100%;
            padding: 10px;
            background-color: #f8ac3d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .formulario input[type="button"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
        include ('titulo.php');
        include ('menu-principal.php');
    ?>
    <div class="formulario">
        <h2>Registro de cliente</h2>
        <form>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">

            <label for="dni">DNI</label>
            <input type="text" id="dni" name="dni" placeholder="DNI">

            <label for="sexo">Sexo</label>
            <input type="text" id="sexo" name="sexo" placeholder="Sexo">

            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento">

            <label for="pais">País</label>
            <input type="text" id="pais" name="pais" placeholder="País">

            <label for="provincia">Provincia</label>
            <input type="text" id="provincia" name="provincia" placeholder="Provincia">

            <label for="ciudad">Ciudad</label>
            <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad">

            <label for="codigo_postal">Código Postal</label>
            <input type="text" id="codigo_postal" name="codigo_postal" placeholder="Código Postal">

            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" placeholder="Dirección">

            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" placeholder="Teléfono">

            <label for="observacion">Observación</label>
            <input type="text" id="observacion" name="observacion" placeholder="Observación">

            <input type="button" value="RESERVAR" onclick="window.location.href='registrado.php'">
        </form>
    </div>
</body>
</html>
