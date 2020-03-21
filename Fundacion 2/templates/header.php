<?php

    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);

    if(isset($_GET['id'])){
        $archivoCache = 'cache/'.$pagina."-".$_GET['id'].'.html';


    }else{
        $archivoCache = 'cache/'.$pagina.'.html';
    }

    $tiempo = 360000;

    if(file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)){
        include($archivoCache);
        exit;
    }
    ob_start();

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="images/logo.png">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="css/lightgallery.css" /> 


    <!-- Carga del CSS de "Bootstrap" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Carga del CSS de "Font Awesome" -->
    <link rel="stylesheet" href="css/all.css">

    <!-- Carga del CSS de "Swiper" -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Carga del CSS de "VenoBox" -->
    <link rel="stylesheet" href="css/venobox.css">

    <!-- Carga del CSS de "Jarallax" -->
    <link rel="stylesheet" href="css/jarallax.css">

    <!-- Carga del CSS de "Pickadate.js" -->
    <link rel="stylesheet" href="js/pickadate.js/themes/default.css">


    <!-- Carga del CSS de "Date Picker" -->
    <link rel="stylesheet" href="js/pickadate.js/themes/default.date.css">


    <!-- Carga del CSS de "Time Picker" -->
    <link rel="stylesheet" href="js/pickadate.js/themes/default.time.css">

<!-- Carga de Fuentes de google-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <link rel="stylesheet"  href="css/baguetteBox.min.css">



    <!-- Carga del CSS personalizado -->
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/scripts.js"></script>
    <title><?php echo $titulo ?> | FBP Asilo San Luis Gonzaga</title>
</head>

<body>

    <section id="detalles-encabezado" class="d-none d-md-block py-3">
        <div class="container">
            <div class="row justify-content-md-between align-items-md-center">
                <div class="col-auto">
                    <a href="index.php" class="logo">
                        <img src="images/logo_yermista_mini.jpg" alt="Logo del sitio"  class="img-fluid">
                    </a>
                </div>

                
                <div class="col-12 col-md-auto">
                    <form action="inc/validar_login.php" method="POST" role="form" class="form-inline">

                        <label for="email" class="sr-only">Nombre de usuario:</label>

                        <div class="input-group mb-2 mb-sm-0 mr-sm-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Nombre de usuario"
                                size="10">
                        </div>

                        <label for="password" class="sr-only">Contraseña:</label>

                        <div class="input-group mb-2 mb-sm-0 mr-sm-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña"
                                size="10">
                        </div>

                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                    </div>
                </div>
            </div>
            </div>
        </div>

    </section>