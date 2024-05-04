<?php require"../includeAdmin/header.php";?>
<?php require"../../config/config.php";?>
<?php
  if(!isset($_SESSION['nombre_admin'])){
    header("Location: ".ADMINURL."");
  }
  
  if(isset($_POST['submit'])){
      if(empty($_POST['nombre_carrera']) || empty($_POST['informacion']) || empty($_FILES['imagen'])){
          echo "<script>alert('Rellene todos los campos, Por favor')</script>";
      }else{
          $nombre_carrera = $_POST['nombre_carrera'];
          $imagen = $_FILES['imagen']['name'];
          $informacion = $_POST['informacion'];
  
          $dir = "imagen/". basename($imagen);
  
          $insert = $conn->prepare("INSERT INTO carreras (nombre_carrera, informacion, imagen) VALUES (:nombre_carrera, :informacion, :imagen)");
  
          $insert -> execute([
              ":nombre_carrera" => $nombre_carrera,
              ":informacion" =>$informacion,
              ":imagen" => $imagen,
          ]);
  
          if(move_uploaded_file($_FILES['imagen']['tmp_name'], $dir)){
            echo "<script>alert('Registro exitoso');
            window.location.href='".ADMINURL."/carrera-admins/show-carrera.php'</script>";
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
          <h5 class="card-title mb-5 d-inline">Registrar Carrera</h5>
          <form method="POST" action="" enctype="multipart/form-data">
            <!-- Email input -->
            <div class="form-outline mb-4 mt-4">
              <textarea class="form-control" name="nombre_carrera" id="exampleFormControlTextarea1" rows="3" placeholder="Nombre de la Carrera"></textarea>
            </div>
            <div class="form-outline mb-4 mt-4">
              <input type="text" name="informacion" id="form2Example1" class="form-control" placeholder="Informacion" />
            </div>
            <div class="form-outline mb-4 mt-4">
            <h5 class="card-title mb-5 d-inline">Imagen</h5>
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
<?php require"../includeAdmin/footer.php";?>
