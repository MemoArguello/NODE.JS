<?php include "../includeAdmin/header.php";?>
<?php include "../../config/config.php";?>
<?php
if(!isset($_SESSION['nombre_admin'])){
  header("Location: ".ADMINURL."");
}
  $repo = $conn->query("SELECT * FROM repositorio");
  $repo->execute();

  $AllRepo = $repo->fetchAll(PDO::FETCH_OBJ); 
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
                    <th scope="col">Autor</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Abstract</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($AllRepo as $repo):?>
                  <tr>
                    <td><?=$i++?></td>
                    <td><?=$repo->titulo?></td>
                    <td><?=$repo->autor?></td>
                    <td><?=$repo->fecha?></td>
                    <td><?=$repo->abstract?></td>
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
  </div>
  <?php include "../includeAdmin/footer.php";?>