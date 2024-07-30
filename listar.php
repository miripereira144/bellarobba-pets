<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bellarobba</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .navbar-brand {
            font-size: 1.5em;
            font-weight: bold;
        }
        .btn-custom {
            margin: 10px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table img {
            object-fit: cover;
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">BellaRobba Pets</h1>
        <div class="d-flex justify-content-center mb-4">
            <button type="submit" class="btn btn-outline-dark btn-custom"><a href="index.php" class="text-dark text-decoration-none">Inicio</a></button>
            <button type="submit" class="btn btn-outline-dark btn-custom"><a href="listar.php" class="text-dark text-decoration-none">Listar ropa</a></button>
            <button type="submit" class="btn btn-outline-dark btn-custom"><a href="agregar.html" class="text-dark text-decoration-none">Agregar ropa</a></button>
        </div>
        <h2 class="text-center mb-4">Lista de ropa</h2>
        <p class="text-center">La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <head class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>PRENDA</th>
                        <th>MARCA</th>
                        <th>TALLE</th>
                        <th>PRECIO</th>
                        <th>STOCK</th>
                        <th>IMAGEN</th>
                        <th>EDITAR</th>
                        <th>BORRAR</th>
                    </tr>
                </head>
                <body>
                    <?php
                    // 1) Conexion
                    $conexion = mysqli_connect("127.0.0.1", "root", "");
                    mysqli_select_db($conexion, "tienda");

                    // 2) Preparar la orden SQL
                    $consulta = 'SELECT * FROM ropa';

                    // 3) Ejecutar la orden y obtenemos los registros
                    $datos = mysqli_query($conexion, $consulta);

                    // 4) Mostrar los datos del registro
                    while ($reg =mysqli_fetch_array($datos)) { ?>
                        <tr>
                            <td><?php echo $reg['id']; ?></td>
                            <td><?php echo $reg['prenda']; ?></td>
                            <td><?php echo $reg['marca']; ?></td>
                            <td><?php echo $reg['talle']; ?></td>
                            <td>$<?php echo $reg['precio']; ?></td>
                            <td>$<?php echo $reg['stock']; ?></td>
                            <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt="Imagen de <?php echo $reg['prenda']; ?>"></td>
                            <td><a href="modificar.php?id=<?php echo $reg['id'];?>" class="btn btn-warning">Editar</a></td>
                            <td><a href="borrar.php?id=<?php echo $reg['id'];?>" class="btn btn-danger">Borrar</a></td>
                        </tr>
                    <?php }?>
                </body>
            </table>
        </div>
    </div>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

