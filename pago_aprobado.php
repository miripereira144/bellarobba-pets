<?php
 $pago_aprobado = true; // Cambia esta variable según la lógica de tu sistema de pago

if ($pago_aprobado) {
?>
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
        }
        .message {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #343a40;
            color: #fff;
        }
    </style>
</head>
<body>

    <header>
        <h1>Pago Aprobado</h1>
    </header>

    <div class="container">
        <div class="message">
            <p>Su pago ha sido aprobado. Gracias por su compra.</p>
            
            <a href="index.php" class="btn btn-dark">Volver al Inicio</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Instagram: <a href="https://www.instagram.com/bellarobba.pets" target="_blank">@bellarobba.pets</a> | <a href="https://www.instagram.com/bellarobba_16" target="_blank">@bellarobba_16</a></p>
        <p>Email: <a href="mailto:bellarobba44@gmail.com">bellarobba44@gmail.com</a></p>
        <p>&copy; Bellarobba 2024</p>
        <p><a href="index.php">Volver a la Página Principal</a></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
<?php
} else {
    header("Location: error.php"); // Redirige a una página de error o realiza otra acción
    exit();
}
?>
