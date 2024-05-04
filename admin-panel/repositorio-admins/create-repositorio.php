<?php include "../includeAdmin/header.php"; ?>
<?php include "../../config/config.php"; ?>
<?php
if(!isset($_SESSION['nombre_admin'])){
  header("Location: ".ADMINURL."");
}

if(isset($_POST['submit'])){
    if(empty($_POST['titulo']) || empty($_POST['autor']) || empty($_POST['fecha']) || empty($_FILES['abstract'])){
        echo "<script>alert('Rellene todos los campos, Por favor')</script>";
    }else{
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $fecha = $_POST['fecha'];
        $abstract = $_FILES['abstract']['name'];

        $dir = "abstract/". basename($abstract);

        $insert = $conn->prepare("INSERT INTO repositorio (titulo, autor, fecha, abstract) VALUES (:titulo, :autor, :fecha, :abstract)");

        $insert -> execute([
            ":titulo" => $titulo,
            ":autor" => $autor,
            ":fecha" => $fecha,
            ":abstract" => $abstract,
        ]);

        if(move_uploaded_file($_FILES['abstract']['tmp_name'], $dir)){
          echo "<script>alert('Registro exitoso');
          window.location.href='".ADMINURL."/repositorio-admins/show-repositorio.php'</script>";
            exit; 
        } else {
            echo "<script>alert('Error al subir el abstract')</script>";
        }
    }
}
?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Subir Informacion</h5>
          <form method="POST" action="" enctype="multipart/form-data">
            <!-- Email input -->
            <div class="form-outline mb-4 mt-4">
              <textarea class="form-control" name="titulo" id="exampleFormControlTextarea1" rows="3" placeholder="Titulo de la Tesis"></textarea>
            </div>
            <div class="form-outline mb-4 mt-4">
              <input type="text" name="autor" id="form2Example1" class="form-control" placeholder="Autor" />
            </div>
            <div class="form-outline mb-4 mt-4">
            <h5 class="card-title mb-5 d-inline">Fecha</h5>
              <input type="date" name="fecha" id="form2Example1" class="form-control"/>
            </div>
            <div class="form-outline mb-4 mt-4">
            <h5 class="card-title mb-5 d-inline">Abstract</h5>
              <input type="file" name="abstract" id="form2Example1" class="form-control" />
            </div>
            <br>
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "../includeAdmin/footer.php"; ?>