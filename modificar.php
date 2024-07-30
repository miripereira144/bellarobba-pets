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
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: #fff3e0;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .card-title {
            color: #6A8E3E;
            font-size: 1.8em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-label {
            color: #6A8E3E;
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #d4a017;
        }
        .btn-primary {
            background-color: #6A8E3E;
            border: none;
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #d4a017;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .footer {
            background-color: #6A8E3E;
            color: #fff;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 40px;
            box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.1);
        }
        .footer a {
            color: #d4a017;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer a:hover {
            color: #fff;
        }
        .footer .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .footer .row {
            width: 100%;
        }
        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center">Modificar Producto</h2>
                <p class="text-center">Ingrese los nuevos datos de la prenda.</p>
                <form action= "" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="prenda" class="form-label">Tipo de prenda</label>
                        <input type="text" class="form-control" id="prenda" name="prenda" placeholder="Tipo de Prenda" value="<?php echo $prenda; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" value="<?php echo $marca; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="talle" class="form-label">Talle</label>
                        <input type="text" class="form-control" id="talle" name="talle" placeholder="Talle" value="<?php echo $talle; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" value="<?php echo $precio; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Stock" value="<?php echo $stock; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen Actual</label>
                        <?php if ($imagen): ?>
                            <img src="data:image/jpg;base64,<?php echo base64_encode($imagen); ?>" alt="Imagen del producto" class="img-thumbnail" style="height: 100px;"/>
                        <?php else: ?>
                            <p>No hay imagen disponible.</p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Nueva Imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen">
                        <input type="file" class="form-control" id="imagen1" name="imagen1">
                        <input type="file" class="form-control" id="imagen2" name="imagen2">
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" name="guardar_cambios" class="btn btn-primary">Guardar Cambios</button>
                        <button type="submit" name="cancelar" formaction="" class="btn btn-secondary">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                   
                    <p>&copy; Bellarobba 2024. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
