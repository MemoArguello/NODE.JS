<?php
            session_start();
            define("URLCSS","http://localhost/RepositorioUC");
            define("IMAGENCARRERA","http://localhost/RepositorioUC/admin-panel/carrera-admins/imagen");
            define("IMAGENURL","http://localhost/RepositorioUC/admin-panel/publicaciones-admins/imagen");
            define("ADMINURL","http://localhost/RepositorioUC/admin-panel");
            define("Titulo","Unidad Pedagogica San Ignacio");
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
        <link href="<?=URLCSS?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=URLCSS?>/css/bootstrap-icons.css" rel="stylesheet">
        <link href="<?=URLCSS?>/css/owl.carousel.min.css" rel="stylesheet">
        <link href="<?=URLCSS?>/css/owl.theme.default.min.css" rel="stylesheet">
        <link href="<?=URLCSS?>/css/tooplate-gotto-job.css" rel="stylesheet"> 
        <link rel="icon" type="image" href="<?=URLCSS;?>/images/upsig.png">
        <link href="<?=URLCSS?>/css/sweetalert2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
        <script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script defer src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
        <script defer src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
        <script defer src="<?=URLCSS;?>/js/table.js"></script> 
    </head>
    <body id="top">
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?=ADMINURL?>">
            <img src="<?=URLCSS?>/images/logo_2023.png" class="img-fluid logo-image">
            <div class="d-flex flex-column">
                <strong class="logo-text">Universidad Catolica</strong>
                <small class="logo-slogan">unidad pedagogica san ignacio</small>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if(isset($_SESSION['nombre_admin'])) : ?>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link active" href="<?=ADMINURL?>/index.php">Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Repositorio</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink1">
                        <li><a class="dropdown-item" href="<?=ADMINURL?>/repositorio-admins/create-repositorio.php">Registrar</a></li>
                        <li><a class="dropdown-item" href="<?=ADMINURL?>/repositorio-admins/show-repositorio.php">Listado</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Carreras</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink1">
                        <li><a class="dropdown-item" href="<?=ADMINURL?>/carrera-admins/create-carrera.php">Registrar</a></li>
                        <li><a class="dropdown-item" href="<?=ADMINURL?>/carrera-admins/show-carrera.php">Listado</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Publicaciones</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink1">
                        <li><a class="dropdown-item" href="<?=ADMINURL?>/publicaciones-admins/create-post.php">Registrar</a></li>
                        <li><a class="dropdown-item" href="<?=ADMINURL?>/publicaciones-admins/show-post.php">Listado</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarLightDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Administadores</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink1">
                        <li><a class="dropdown-item" href="<?=ADMINURL?>/admins/create-admins.php">Registrar</a></li>
                        <li><a class="dropdown-item" href="<?=ADMINURL?>/admins/admins.php">Listado</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarLightDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?=$_SESSION['nombre_admin']?></a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink1">
                        <li><a class="dropdown-item" href="<?=ADMINURL?>/admins/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
            <?php endif;?>
        </div>
    </div>
</nav>
