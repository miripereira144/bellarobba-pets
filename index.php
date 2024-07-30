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
            height: 200px;
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

    </style>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="btn btn-outline-dark " href="index.php">Bellarobba</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="btn btn-petshop" href="nuestra_historia.php">Nuestra Historia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
</ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <a href="login.html" style="text-decoration: none; color: inherit;">Vendedores</a>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <button class="btn btn-petshop" type="submit"><a href="naila.php" style="text-decoration: none; color: inherit;">Naila</a></button>
    <button class="btn btn-petshop" type="submit"><a href="collie.php" style="text-decoration: none; color: inherit;">Collie</a></button>
    <button class="btn btn-petshop" type="submit"><a href="angora.php" style="text-decoration: none; color: inherit;">Angora</a></button>
    <button class="btn btn-petshop" type="submit"><a href="gran_danes.php" style="text-decoration: none; color: inherit;">Gran Danes</a></button>
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Bellarobba</h1>
                <p class="lead fw-normal text-white-50 mb-0">In Tua Vitta</p>
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
                $consulta = 'SELECT * FROM ropa';

                // 3) Ejecutar la orden y obtenemos los registros
                $datos = mysqli_query($conexion, $consulta);

                // 4) Recorrer todos los registros y generar una CARD para cada uno
                while ($reg = mysqli_fetch_array($datos)) { ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo ucwords($reg['marca']) ?></h5>
                                    <!-- Product price-->
                                    <h2>$<?php echo $reg['precio']; ?></h2>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- Botón que lleva a la página del producto-->
                                <div class="text-center">
                                    <a href="productos.php?id=<?php echo $reg['id'];?>">
                                        <button class="btn btn-petshop" type="button">Ver producto</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Footer-->

    <footer class="py-5 bg-dark">
     <tr>  <div class="container"><p class="m-0 text-center text-white"><p>Instagram: 
                             <a href="https://www.instagram.com/bellarobba.pets" 
                             target="_blank">@bellarobba.pets</a> 
                             <a href="https://www.instagram.com/bellarobba_16" 
                             target="_blank">@bellarobba_16</a>
                             <p>Email: <a href="mailto:bellarobba44@gmail.com">bellarobba44@gmail.com</a></p>


        <div class="container"><p class="m-0 text-center text-white">&copy; Bellarobba 2024</p></div>
    </tr> 
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- Incluir el archivo JavaScript -->
    <script src="js/welcome.js"></script>

</body>
</html>
