<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Consulta de clientes</TITLE>
		<?php //Metaetiquetas globales importadas
			include ('metaetiquetas-generales.php');
		?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de clientes</title>
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
            width: 80%; /* Ancho del formulario */
            max-width: 600px; /* Ancho máximo del formulario */
            margin: 50px auto; /* Centra el formulario horizontalmente */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .formulario h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .formulario label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .formulario input[type="text"],
        .formulario input[type="search"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .formulario input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #f8ac3d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .formulario input[type="submit"]:hover {
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
        <form>
            <h2>Buscar cliente</h2>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos">

            <label for="dni">DNI</label>
            <input type="text" id="dni" name="dni" placeholder="Ingrese el DNI">

            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" placeholder="Ingrese el teléfono">

            <input type="submit" value="BUSCAR">
        </form>
    </div>
</body>
</html>


