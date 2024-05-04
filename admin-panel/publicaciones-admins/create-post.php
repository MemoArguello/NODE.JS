<?php include "../includeAdmin/header.php"; ?>
<?php include "../../config/config.php"; ?>
<?php
if(!isset($_SESSION['nombre_admin'])){
  header("Location: ".ADMINURL."");
}

if(isset($_POST['submit'])){
    if(empty($_POST['titulo']) || empty($_POST['publicacion']) || empty($_FILES['imagen'])){
        echo "<script>alert('Rellene todos los campos, Por favor')</script>";
    }else{
        $titulo = $_POST['titulo'];
        $imagen = $_FILES['imagen']['name'];
        $publicacion = $_POST['publicacion'];

        $dir = "imagen/". basename($imagen);

        $insert = $conn->prepare("INSERT INTO publicaciones (titulo, publicacion, imagen) VALUES (:titulo, :publicacion, :imagen)");

        $insert -> execute([
            ":titulo" => $titulo,
            ":publicacion" => $publicacion,
            ":imagen" => $imagen,
        ]);

        if(move_uploaded_file($_FILES['imagen']['tmp_name'], $dir)){
          echo "<script>alert('Registro exitoso');
          window.location.href='".ADMINURL."/publicaciones-admins/show-post.php'</script>";
            exit; 
        } else {
            echo "<script>alert('Error al subir el archivo de imagen')</script>";
        }
    }
}
?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Crear Publicacion</h5>
          <form method="POST" action="create-post.php" enctype="multipart/form-data">
            <!-- Email input -->
            <div class="form-outline mb-4 mt-4">
              <input type="text" name="titulo" id="form2Example1" class="form-control" placeholder="Titulo" />
            </div>
            <div class="form-outline mb-4 mt-4">
            <textarea name="publicacion"  class="form-control" id="" cols="30" rows="10" placeholder="Publicacion:"></textarea>
            </div>
            <h5 class="card-title mb-5 d-inline">Subir Imagen</h5>
            <div class="form-outline mb-4 mt-4">
              <input type="file" name="imagen" id="form2Example1" class="form-control" />
            </div> 
            <br>
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "../includeAdmin/footer.php"; ?>