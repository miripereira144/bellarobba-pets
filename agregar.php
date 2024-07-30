<?php
// 1) Conexión
$conexion = mysqli_connect("127.0.0.1", "root", "");
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
mysqli_select_db($conexion, "tienda");

// 2) Almacenamos los datos del envío POST
$prenda = mysqli_real_escape_string($conexion, $_POST['prenda']);
$marca = mysqli_real_escape_string($conexion, $_POST['marca']);
$talle = mysqli_real_escape_string($conexion, $_POST['talle']);
$precio = mysqli_real_escape_string($conexion, $_POST['precio']);
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

// 3) Preparar la orden SQL
$consulta = "INSERT INTO ropa (id, prenda, marca, talle, precio, imagen) VALUES ('','$prenda' '$marca', '$talle', '$precio', '$imagen')";

// 4) Ejecutar la consulta y verificar si fue exitosa
if (mysqli_query($conexion, $consulta)) {
    echo "Producto agregado exitosamente";
    header('Location:listar.php'); // Redirige a listar.php después de agregar el producto
    exit();
} else {
    echo "Error al agregar el producto: " . mysqli_error($conexion);
}

// 5) Cerrar la conexión
mysqli_close($conexion);
?>


