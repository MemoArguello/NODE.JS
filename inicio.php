<?php require "include/header.php"; ?>
<?php require "config/config.php"; ?>
<?php
    $carrera = $conn->query("SELECT * FROM carreras");
    $carrera->execute();

    $Allcarrera = $carrera->fetchAll(PDO::FETCH_OBJ);
?>
      <main>
            <section class="hero-section d-flex justify-content-center align-items-center">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12 mb-5 mb-lg-0">
                            <div class="container text-center">
                                <h6 class="text-white">Preparate para el futuro</h6>

                                <h1 class="hero-title text-white mt-4 mb-4">Elegi Estudiar<br> En la UC SAN IGNACIO</h1>

                                <a href="#carreras-section" class="custom-btn custom-border-btn btn">Ver Carreras</a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12">
                            <form class="custom-form hero-form" action="#" method="get" role="form">
                                <h3 class="text-white mb-3" align="center">Universidad Católica "Nuestra Señora de la Asunción" Unidad Pedagógica San Ignacio Guazú</h3>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="job-section recent-jobs-section section-padding" id="carreras-section">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-12 mb-4">
                            <h2>Carreras de Grado</h2>

                            <p><strong>¡Prepárate para el futuro!</strong> elegí estudiar en la UC SAN IGNACIO 🙆‍♀️🎓</p>
                        </div>

                        <div class="clearfix"></div>
                        <?php foreach($Allcarrera as $carrera) : ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="job-thumb job-thumb-box">
                                <div class="job-image-box-wrap">
                                    <a href="#">
                                        <img src="<?=IMAGENCARRERA?>/<?=$carrera->imagen?>" class="job-image img-fluid" alt="">
                                    </a>
                                </div>

                                <div class="job-body">
                                    <h4 class="job-title">
                                        <a href="#" class="job-title-link"><?=$carrera->nombre_carrera?></a>
                                    </h4>

                                    <div class="d-flex align-items-center">
                                        <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                            <img src="images/carreras/ucsanig.png" class="job-image me-3 img-fluid" alt="">
                                            <p class="mb-0"><?=$carrera->informacion?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    </div>
                </div>
            </section>
        </main>
<?php require "include/footer.php" ?>
