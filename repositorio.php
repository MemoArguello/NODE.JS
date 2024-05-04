<?php require "include/header.php"; ?>
<?php require "config/config.php"; ?>
<?php
$repositorios = $conn->query("SELECT * FROM repositorio");
$repositorios->execute();

$Allrepositorios = $repositorios->fetchAll(PDO::FETCH_OBJ);

?>
<main>
    <header class="site-header">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h1 class="text-white">Repositorio de Tesis y Trabajos Finales de Grado</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= APPURL ?>">Inicio</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Repositorio</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </header>
    <section class="job-section section-padding">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="table-responsive">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Abstract</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($Allrepositorios as $repositorio) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $repositorio->titulo ?></td>
                                    <td><?= $repositorio->autor ?></td>
                                    <td><?= $repositorio->fecha ?></td>
                                    <td>
                                        <a href="<?= ABSTRACTURL ?>/<?= $repositorio->abstract ?>" download>
                                            <button class="btn btn-primary">Descargar</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Abstract</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

</main>
<?php require "include/footer.php" ?>