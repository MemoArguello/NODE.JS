<?php include "../includeAdmin/header.php";?>
<?php include "../../config/config.php";?>
<?php
if(!isset($_SESSION['nombre_admin'])){
  header("Location: ".ADMINURL."");
}
  $post = $conn->query("SELECT * FROM publicaciones");
  $post->execute();

  $posts = $post->fetchAll(PDO::FETCH_OBJ); 
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
                    <th scope="col">Titulo</th>
                    <th scope="col">Publicacion</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Fecha de Creacion</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($posts as $post):?>
                  <tr>
                    <td><?=$i++?></td>
                    <td><?=$post->titulo?></td>
                    <td><?=$post->publicacion?></td>
                    <td><img src="<?=IMAGENURL?>/<?=$post->imagen?>" alt="Imagen de la publicación" style="max-width: 100px;"></td>
                    <td><?=$post->fecha_creacion?></td>
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
