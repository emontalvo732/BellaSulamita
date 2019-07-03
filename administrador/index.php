<?php
include_once '../backend/modelo/BD.php';
include_once '../backend/modelo/MAdmin.php';
include_once '../backend/controlador/CAdmin.php';
session_start();
$admin= new CAdmin();
if(isset($_POST["usuario"]) && isset($_POST["password"])){
    $admin->autentificar($_POST["usuario"], $_POST["password"]);
}

if(isset($_SESSION["autentificado"])){
    header("Location: panel.php");
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

    <link rel="stylesheet" href="style/css.css" />
    <link rel="stylesheet" href="style/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="../">Regresar A Pagina Principal</a>
            </form>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-white mb-4">Bootstrap 4 Login Form</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <!-- form card login -->
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="mb-0">Iniciar Sesión</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate=""
                                    method="POST">
                                    <div class="form-group">
                                        <label for="uname1">Usuario</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="usuario"
                                            id="uname1" required="">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control form-control-lg rounded-0" id="pwd1"
                                            required="" autocomplete="new-password" name="password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg float-right"
                                        id="btnLogin">Entrar</button>
                                </form>
                            </div>
                            <!--/card-block-->
                        </div>
                        <!-- /form card login -->
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->



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