<?php
// borrar.php

// 1) Conexión a la base de datos
$conexion = new mysqli("127.0.0.1", "root", "", "tienda");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// 2) Almacenamos los datos del envío GET
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$mensaje = "";
$tipo_mensaje = "";

if ($id > 0) {
    // 3) Preparar la SQL
    $consulta = "DELETE FROM ropa WHERE id = ?";
    
    // 4) Ejecutar la orden y verificar si se eliminó algún registro
    if ($stmt = $conexion->prepare($consulta)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            // Registro eliminado con éxito
            $mensaje = "Producto eliminado con éxito.";
            $tipo_mensaje = "success";
        } else {
            // No se encontró el registro para eliminar
            $mensaje = "No se encontró el producto para eliminar.";
            $tipo_mensaje = "warning";
        }
        
        $stmt->close();
    } else {
        $mensaje = "Error al preparar la consulta: " . $conexion->error;
        $tipo_mensaje = "danger";
    }
} else {
    $mensaje = "ID no válido.";
    $tipo_mensaje = "danger";
}

// Cerrar conexión
$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .footer {
            background-color: #6A8E3E;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer a {
            color: white;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="alert alert-<?php echo $tipo_mensaje; ?>" role="alert">
            <?php echo $mensaje; ?>
        </div>
        <a href="index.php" class="btn btn-primary">Volver al Inicio</a>
    </div>
    
    <div class="footer">
        <p>Instagram: <a href="https://www.instagram.com/bellarobba.pets" target="_blank">@bellarobba.pets</a> | <a href="https://www.instagram.com/bellarobba_16" target="_blank">@bellarobba_16</a></p>
        <p>Email: <a href="mailto:bellarobba44@gmail.com">bellarobba44@gmail.com</a></p>
        <p><a href="index.php">Volver a la Página Principal</a></p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
