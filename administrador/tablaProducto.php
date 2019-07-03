<?php
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MProducto.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/controlador/CProducto.php';
include_once '../backend/controlador/CAdmin.php';
$producto= new CProducto();
session_start();
if(!isset($_SESSION["autentificado"])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bella Sulamita</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/css.css" />
    <link rel="stylesheet" href="style/font-awesome.min.css"/>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <a class="navbar-brand" href="panel.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="panel.php">Home <span class="sr-only">(current)</span></a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <li><a href="salir.php"><i class="fa fa-power-off"></i></a></li>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 collapse d-md-flex bg-dark pt-2 min-vh-100" id="sidebar">
                <ul class="nav flex-column flex-nowrap">
                    <li class="nav-item">

                        <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse"
                            data-target="#submenu1"><i class="fa fa-plus" aria-hidden="true"></i>  Agregar</a>
                        <div class="collapse" id="submenu1" aria-expanded="false">
                            <ul class="flex-column pl-2 nav">
                                <li class="nav-item">
                                    <a class="nav-link py-1" href="agregarProducto.php">Producto</a>
                                    <a class="nav-link py-1" href="agregarBanner.php">Banner</a>
                                    <a class="nav-link py-1" href="agregarSlider.php"><i class="fa fa-sliders" aria-hidden="true"></i> Slider</a>
                                </li>
                            </ul>
                        </div>

                        <a class="nav-link collapsed" href="#submenu2" data-toggle="collapse"
                            data-target="#submenu2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Actualizar</a>
                        <div class="collapse" id="submenu2" aria-expanded="false">
                            <ul class="flex-column pl-2 nav">
                                <li class="nav-item">
                                    <a class="nav-link py-1" href="tablaProducto.php">Producto</a>
                                    <a class="nav-link py-1" href="tablaBanner.php">Banner</a>
                                    <a class="nav-link py-1" href="tablaSlider.php">Slider</a>
                                </li>
                            </ul>
                        </div>


                        <a class="nav-link collapsed" href="#submenu3" data-toggle="collapse"
                            data-target="#submenu3"><i class="fa fa-trash-o" aria-hidden="true"></i>  Eliminar</a>
                        <div class="collapse" id="submenu3" aria-expanded="false">
                            <ul class="flex-column pl-2 nav">
                                <li class="nav-item">
                                    <a class="nav-link py-1" href="eliminarProducto.php">Producto</a>
                                    <a class="nav-link py-1" href="eliminarBanner.php">Banner</a>
                                    <a class="nav-link py-1" href="eliminarSlider.php">Slider</a>
                                </li>
                            </ul>
                        </div>

                        <a class="nav-link collapsed" href="#submenu4" data-toggle="collapse"
                            data-target="#submenu4"><i class="fa fa-eye" aria-hidden="true"></i>  Ver Productos</a>
                        <div class="collapse" id="submenu4" aria-expanded="false">
                            <ul class="flex-column pl-2 nav">
                                <li class="nav-item">
                                    <a class="nav-link py-1" href="tablaProducto.php">Producto</a>
                                    <a class="nav-link py-1" href="tablaBanner.php">Banner</a>
                                    <a class="nav-link py-1" href="tablaSlider.php">Slider</a>
                                </li>
                            </ul>
                        </div>


                    </li>
                </ul>
            </div>
            <div class="col pt-2">


                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Tabla de Productos</strong>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID Producto</th>
                                                <th scope="col">Nombre del producto</th>
                                                <th scope="col">Tallas</th>
                                                <th scope="col">Precio</th>
                                                <th scope="col">Marca</th>
                                                <th scope="col">Color</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">Editar</th>
                                                <th scope="col">Eliminar</th>
                                            </tr>
                                        </thead>
                                        <?php echo $producto->mostrarProductoAdmin() ?>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <!-- Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>

</body>


</html>