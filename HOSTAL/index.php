<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración Hotel</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>

<body>
    <header id="cajaTitulo">
        <figure>
            <img src="./img/Logotipo.png" alt="Mi Logo" title="Logotipo del sitio web">
            <figcaption>
                <h1 id="titulo">Panel de Administrador</h1>
            </figcaption>
        </figure>
    </header>

    <nav id="cajaMenuPrincipal">
        <ul>
            <li><a href="./index.php" title="Inicio">Inicio</a></li>
            <li><a href="./clientes.php" title="Clientes">Clientes</a></li>
            <li><a href="./habitaciones.php" title="Habitaciones">Habitaciones</a></li>
            <li><a href="./reservas.php" title="Reservas">Consultar reservas</a></li>
          <LI><A href="./form-clientes.php" title="form-clientes">Nueva reserva</A></LI>
        </ul>
    </nav>




  
    
    <style>
        body {
            font-family: 'Century Gothic', Century Gothic;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .tabla-habitaciones {
            margin-top: 50px;
            margin-bottom: 50px;
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tabla-habitaciones h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-weight: bold;
            font-size: 16px;
        }

        .reservar-button {
            padding: 8px 12px;
            background-color: #f8ac3d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .reservar-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="tabla-habitaciones">
        <h2>Disponibilidad de habitaciones</h2>
        <table>
            <thead>
                <tr>
                    <th>No de habitación</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Reservar</th> <!-- Cambio de título de la columna -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Habitación Simple</td>
                    <td>50€</td>
                    <td>Habitación sin vistas al exterior</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Habitación Doble</td>
                    <td>50€</td>
                    <td>Habitación con dos camas</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Habitación Doble</td>
                    <td>50€</td>
                    <td>Habitación con dos camas</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes'">Reservar</button></td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Habitación Cuádruple</td>
                    <td>50€</td>
                    <td>Habitación con cuatro camas</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>Habitación Simple</td>
                    <td>50€</td>
                    <td>Habitación sin vistas al exterior</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>Habitación Simple</td>
                    <td>50€</td>
                    <td>Habitación sin vistas al exterior</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
