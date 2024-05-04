<?php
            define("APPURL","http://localhost/RepositorioUC");
            define("Titulo","Unidad Pedagogica San Ignacio");
            define("IMAGENURL","http://localhost/RepositorioUC/admin-panel/publicaciones-admins/imagen");
            define("IMAGENCARRERA","http://localhost/RepositorioUC/admin-panel/carrera-admins/imagen");
            define("ABSTRACTURL","http://localhost/RepositorioUC/admin-panel/repositorio-admins/abstract");

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?=Titulo?></title>
        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">     
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="<?=APPURL?>/css/datatables.css">
        <link rel="stylesheet" href="<?=APPURL?>/css/datatables.min.css">
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link href="<?=APPURL;?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=APPURL;?>/css/bootstrap-icons.css" rel="stylesheet">
        <link href="<?=APPURL;?>/css/owl.carousel.min.css" rel="stylesheet">
        <link href="<?=APPURL;?>/css/owl.theme.default.min.css" rel="stylesheet">
        <link href="<?=APPURL;?>/css/tooplate-gotto-job.css" rel="stylesheet"> 
        <link rel="icon" type="image" href="<?=APPURL;?>/images/upsig.png">
        <link href="<?=APPURL;?>/css/sweetalert2.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
        <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>

        <script defer src="<?=APPURL?>/js/datatables.min.js"></script>
        <script defer src="<?=APPURL?>/js/dataTables.js"></script>
        <script defer src="<?=APPURL;?>/js/table.js"></script>
    </head>
    <body id="top">
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="inicio.php">
            <img src="<?=APPURL;?>/images/logo_2023.png" class="img-fluid logo-image">
            <div class="d-flex flex-column">
                <strong class="logo-text">Universidad Catolica</strong>
                <small class="logo-slogan">unidad pedagogica san ignacio</small>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Identidad</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink1">
                        <li><a class="dropdown-item" href="#">Quienes Somos</a></li>
                        <li><a class="dropdown-item" href="#">Nuestra Historia</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=APPURL?>/noticias.php">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=APPURL?>/carreras.php">Carreras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=APPURL?>/contacto.php">Contactos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=APPURL?>/repositorio.php">Repositorio</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
