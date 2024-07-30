<?php
// 1) Conexion
// a) realizar la conexion con la bbdd
// b) seleccionar la base de datos a usar
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda");

// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET['id'];

// 3) Preparar la SQL
// => Selecciona todos los campos de la tabla ropa donde el campo id sea igual a $id
// a) generar la consulta a realizar
$consulta = "SELECT * FROM ropa WHERE id=$id";

// 4) Ejecutar la orden y almacenamos en una variable el resultado
// a) ejecutar la consulta
$respuesta = mysqli_query($conexion, $consulta);

// 5) Transformamos el registro obtenido a un array
$datos = mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bellarobba</title>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body>

  <header>
    <h1>Detalle del producto</h1>
  </header>
  <?php
  // 6) Asignamos a diferentes variables los respectivos valores del array $datos.
  $id = $datos["id"];
  $prenda = $datos["prenda"];
  $marca = $datos["marca"];
  $talle = $datos["talle"];
  $precio = $datos["precio"];
  $imagen = base64_encode($datos['imagen']);
  $imagen2 = base64_encode($datos['imagen2']); // Asumiendo que la segunda imagen se guarda en la columna 'imagen2'
  ?>

  <div class="container">
    <div class="row">
      <div class="card w-50">
        <!-- Primera imagen -->
        <img class="card-img-top" src="data:image/jpeg;base64,<?php echo $imagen ?>" alt="Imagen de la prenda" />
        <!-- Segunda imagen -->
        <img class="card-img-top" src="data:image/jpeg;base64,<?php echo $imagen2 ?>" alt="Otra imagen de la prenda" />
        <div class="card-body">
        <p class="card-text">Prenda: <?php echo $prenda; ?></p>
          <h5 class="card-title">Marca: <?php echo $marca; ?></h5>
          <p class="card-text">Talle: <?php echo $talle; ?></p>
          <p class="card-text">Precio: $<?php echo $precio; ?></p>
          <a href="agregarcliente.php?id=<?php echo $datos['id']; ?>">
  <button type="button" name="button">Ingrese sus datos</button>
</a>

          <!-- Botón de Pago de MercadoPago -->
          <a href="https://www.mercadopago.com.ar/checkout/v1/redirect?preference-id=98841741-e7c8c5d5-bdef-436f-8974-76a5dd528025" class="btn btn-primary">Comprar</a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <br>
  </footer>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>
</html>
