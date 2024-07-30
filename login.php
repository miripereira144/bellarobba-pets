<?php
// Iniciar sesión
session_start();

// Verificar si se enviaron los datos
if (isset($_POST["user"]) && isset($_POST["pass"])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $usuario = "admin";
    $contrasenia = "4444";

    // Verificar las credenciales
    if ($usuario === $user && $contrasenia === $pass) {
        // Redirigir a listar.php
        header("Location:listar.php");
        exit(); // Asegurarse de que no se ejecute más código
    } else {
        // Redirigir a error.html
        header("Location:error.html");
        exit(); // Asegurarse de que no se ejecute más código
    }
} else {
    // Redirigir si los datos no están presentes
    header("Location:error.html");
    exit(); // Asegurarse de que no se ejecute más código
}
?>
