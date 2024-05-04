<?php include "../includeAdmin/header.php";?>
<?php include "../../config/config.php";?>
<?php
if(!isset($_SESSION['nombre_admin'])){
  header("Location: ".ADMINURL."");
}
  $administrador = $conn->query("SELECT nombre_admin, fecha_creacion FROM administrador");
  $administrador->execute();

  $admins = $administrador->fetchAll(PDO::FETCH_OBJ); 
?>
<div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Admins</h5>
             <div class="table-responsive">
             <table id="example" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre de Usuario</th>
                    <th scope="col">Fecha de Creacion</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($admins as $admin):?>
                  <tr>
                    <td><?=$i++?></td>
                    <td><?=$admin->nombre_admin?></td>
                    <td><?=$admin->fecha_creacion?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre de Usuario</th>
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
