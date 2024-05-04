<?php include "../includeAdmin/header.php";?>
<?php include "../../config/config.php";?>
<?php
if(!isset($_SESSION['nombre_admin'])){
  header("Location: ".ADMINURL."");
}
  $carrera = $conn->query("SELECT * FROM carreras");
  $carrera->execute();

  $carreras = $carrera->fetchAll(PDO::FETCH_OBJ); 
?>
<div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Carreras Registradas</h5>
             <div class="table-responsive">
             <table id="example" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Publicacion</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Fecha de Creacion</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($carreras as $carrera):?>
                  <tr>
                    <td><?=$i++?></td>
                    <td><?=$carrera->nombre_carrera?></td>
                    <td><?=$carrera->informacion?></td>
                    <td><img src="<?=IMAGENCARRERA?>/<?=$carrera->imagen?>" alt="Imagen de la carrera" style="max-width: 100px;"></td>
                    <td><?=$carrera->fecha_creacion?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Publicacion</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Fecha de Creacion</th>
                  </tr>
                </tfoot>
              </table> 
             </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <?php include "../includeAdmin/footer.php";?>