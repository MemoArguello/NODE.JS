<?php require "include/header.php"; ?>
<?php require "config/config.php"; ?>
<?php
$carreras = $conn->query("SELECT * FROM carreras");
$carreras->execute();

$Allcarreras = $carreras->fetchAll(PDO::FETCH_OBJ);

?>
<?php
// Definir el número de registros por página
$registros_por_pagina = 10;

// Obtener el número de página actual, si no está definido, establecerlo en 1
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el desplazamiento para la consulta SQL
$offset = ($pagina_actual - 1) * $registros_por_pagina;

// Obtener el total de registros
$total_registros = $conn->query("SELECT COUNT(*) FROM publicaciones")->fetchColumn();

// Calcular el total de páginas
$total_paginas = ceil($total_registros / $registros_por_pagina);

// Consulta SQL para obtener los registros de la página actual
$consulta = $conn->prepare("SELECT * FROM publicaciones LIMIT :offset, :limit");
$consulta->bindParam(':offset', $offset, PDO::PARAM_INT);
$consulta->bindParam(':limit', $registros_por_pagina, PDO::PARAM_INT);
$consulta->execute();

$posts = $consulta->fetchAll(PDO::FETCH_OBJ);
?>
<main>
    <header class="site-header">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h1 class="text-white">Carreras</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= APPURL ?>">Inicio</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Carreras</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <section class="job-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <?php foreach ($Allcarreras as $carrera) : ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="job-thumb job-thumb-box">
                            <div class="job-image-box-wrap">
                                <a href="<?= APPURL ?>/noticias.php">
                                    <img src="<?= IMAGENCARRERA ?>/<?= $carrera->imagen ?>" class="job-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="job-body">
                                <h4 class="job-title">
                                    <a href="job-details.html" class="job-title-link"><?= $carrera->nombre_carrera ?></a>
                                </h4>

                                <div class="d-flex align-items-center">
                                    <p class="job-location">
                                        <?=$carrera->informacion?>
                                    </p>
                                </div>

                                <div class="d-flex align-items-center border-top pt-3">

                                    <a href="<?= APPURL ?>/noticias.php" class="custom-btn btn ms-auto">Mas Informacion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-lg-12 col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5">
                            <!-- Botón "Anterior" -->
                            <li class="page-item <?php echo $pagina_actual <= 1 ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?pagina=<?php echo $pagina_actual - 1; ?>" aria-label="Anterior">
                                    <span aria-hidden="true">Anterior</span>
                                </a>
                            </li>

                            <!-- Botones para cada página -->
                            <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
                                <li class="page-item <?php echo $pagina_actual == $i ? 'active' : ''; ?>">
                                    <a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php endfor; ?>

                            <!-- Botón "Siguiente" -->
                            <li class="page-item <?php echo $pagina_actual >= $total_paginas ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?pagina=<?php echo min($pagina_actual + 1, $total_paginas); ?>" aria-label="Siguiente">
                                    <span aria-hidden="true">Siguiente</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>

</main>
<?php require "include/footer.php" ?>