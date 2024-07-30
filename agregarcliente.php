
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bellarobba</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #6A8E3E;
        }
        form {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        input[type="submit"] {
            margin-top: 20px;
            background-color: #6A8E3E;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #5a7a35;
        }
        .buttons-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            margin: 5px;
            padding: 10px 20px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }
        .btn-dark {
            background-color: #343a40;
        }
        .btn-dark:hover {
            background-color: #23272b;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        footer {
            background-color: #6A8E3E;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        footer a {
            color: white;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Datos del Cliente</h1>
    </header>

    <div class="container">
        <form method="POST" action="">
            <label for="nombre">Nombre</label>
            <input type="text"  name="nombre" placeholder="Nombre" required>
            <label for="apellido">Apellido</label>
            <input type="text"  name="apellido" placeholder="Apellido" required>
            <label for="mail">Mail</label>
            <input type="email"  name="mail" placeholder="Mail" required>
            <label for="telefono">Teléfono</label>
            <input type="text"  name="telefono" placeholder="Telefono" required>
            <label for="compra">Compra</label>
            <input type="text"  name="compra" placeholder="Compra">
            <label for="direccion">Dirección</label>
            <input type="text"  name="direccion" placeholder="Dirección">
            <label for="ciudad">Ciudad</label>
            <input type="text"  name="ciudad" placeholder="Ciudad">
            <label for="pais">País</label>
            <input type="text"  name="pais" placeholder="País">
            <label for="fecha_registro">Fecha de Registro</label>
            <input type="date"  name="fecha_registro" placeholder="Fecha de Registro">
            <input type="submit" name="guardar_cliente" value="Aceptar">
        </form>

        <?php
        if (array_key_exists('guardar_cliente', $_POST)) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $mail = $_POST['mail'];
            $telefono = $_POST['telefono'];
            $compra = $_POST['compra'];
            $direccion = $_POST['direccion'];
            $ciudad = $_POST['ciudad'];
            $pais = $_POST['pais'];
            $fecha_registro = $_POST['fecha_registro'];

            // Conexión a la base de datos
            $conexion = mysqli_connect("127.0.0.1", "root", "", "tienda");

            // Verificar conexión
            if ($conexion->connect_error) {
                die("Conexión fallida: " . $conexion->connect_error);
            }

            // Preparar la consulta SQL
            $consulta = "INSERT INTO clientes (nombre, apellido, mail, telefono, compra, direccion, ciudad, pais, fecha_registro)
                        VALUES ('$nombre', '$apellido', '$mail', '$telefono', '$compra', '$direccion', '$ciudad', '$pais', '$fecha_registro')";

            // Ejecutar la consulta
            if (mysqli_query($conexion, $consulta)) {
                echo "<p>Cliente registrado exitosamente.</p>";
                // Redirigir a la página de pago si es necesario
                // header('Location: ' . $datos["pago"]);
                // exit();
            } else {
                echo "<p>Error al registrar el cliente: " . mysqli_error($conexion) . "</p>";
            }

            // Cerrar la conexión
            mysqli_close($conexion);
        }
        ?>

        <div class="buttons-container">
            <a href="index.php" class="btn btn-dark">Inicio</a>
        </div>
    </div>

    <footer>
        <p>Instagram: <a href="https://www.instagram.com/bellarobba.pets" target="_blank">@bellarobba.pets</a> | <a href="https://www.instagram.com/bellarobba_16" target="_blank">@bellarobba_16</a></p>
        <p>Email: <a href="mailto:bellarobba44@gmail.com">bellarobba44@gmail.com</a></p>
        <p>&copy; Bellarobba 2024</p>
        <p><a href="index.php">Volver a la Página Principal</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
</html>
