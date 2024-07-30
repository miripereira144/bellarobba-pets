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
            background-color: #FAF3E0;
            color: #5A4637;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #5A4637;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #D4A373;
        }
        .btn-outline-dark {
            color: #5A4637;
            border-color: #5A4637;
        }
        .btn-outline-dark:hover {
            color: #FFF;
            background-color: #5A4637;
            border-color: #5A4637;
        }
        .bg-dark {
            background-color: #5A4637 !important;
        }
        .text-white {
            color: #FAF3E0 !important;
        }
        .btn-petshop {
            background-color: #D4A373;
            color: #5A4637;
            border: none;
        }
        .btn-petshop:hover {
            background-color: #B5834A;
            color: #FAF3E0;
        }
        .card {
            border: 1px solid #D4A373;
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
        }
        .card-body {
            background-color: #FAE1C4;
        }
        .card-footer {
            background-color: #FAF3E0;
        }
        footer {
            background-color: #5A4637;
        }
        footer p {
            color: #FAF3E0;
        }
        .navbar-brand {
            font-size: 1.5em;
            font-weight: bold;
        }
        .badge {
            background-color: #D4A373;
        }
    </style>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Pagina principal</a>
            <form class="d-flex">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1">Productos</i>Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Collie</h1>
                <p class="lead fw-normal text-white-50 mb-0">45 x 60 CM</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

              <?php
              // 1) Conexion
              $conexion = mysqli_connect("127.0.0.1", "root", "");
              mysqli_select_db($conexion, "tienda");

              // 2) Preparar la orden SQL
              $consulta="SELECT * FROM `ropa` WHERE `prenda` = 'collie' ";

              // 3) Ejecutar la orden y obtenemos los registros
              $datos= mysqli_query($conexion, $consulta);

              //  recorro todos los registros y genero una CARD PARA CADA UNA
              while ($reg = mysqli_fetch_array($datos)) {?>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo ucwords($reg['prenda']) ?></h5>
                                <!-- Product price-->
                              <h2>$:<?php echo $reg['precio']; ?></h2>
                              <h3>stock: <?php echo $reg['stock']; ?></h3>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-petshop mt-auto" href="agregarcliente.php">Agregar cliente</a>
                                <!-- Botón de Pago de MercadoPago -->
                               <a href="https://www.mercadopago.com.ar/checkout/v1/redirect?preference-id=98841741-782fb030-9620-4ec5-a034-fb8ec07f3a9d" class="btn btn-primary">Comprar</a>
                                <a class="btn btn-petshop mt-auto" href="index.php">Inicio</a>
                                <a class="btn btn-petshop mt-auto scroll-to-top" href="#">Volver al Inicio</a>
                            </div>
                        </div>
                    </div>
                </div>

              <?php } ?>

        </div>
    </section>
 
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Footer-->
   <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white"> &copy; Bellarobba 2024</p></div>
    </footer>
</body>
</html>
