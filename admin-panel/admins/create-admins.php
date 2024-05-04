<?php include "../includeAdmin/header.php"; ?>
<?php include "../../config/config.php";?>
<?php
if(!isset($_SESSION['nombre_admin'])){
  header("Location: ".ADMINURL."");
}

    if(isset($_POST['submit'])){
        if(empty($_POST['nombre_admin']) OR empty($_POST['password'])){
          echo "<script>alert('Rellene todos los campos, Por favor')</script>";
        }else{
          $nombre = $_POST['nombre_admin'];
          $codigo = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $confirm_password = $_POST['confirm_password'];
          
          // Verificar si el nombre de usuario ya existe en la base de datos
          $checkUser = $conn->prepare("SELECT * FROM administrador WHERE nombre_admin = :nombre");
          $checkUser->bindParam(':nombre', $nombre);
          $checkUser->execute();

          if($checkUser->rowCount() > 0){
            echo "<script>alert('El nombre de usuario ya está en uso')</script>";
          } else {
          if (!password_verify($confirm_password, $codigo)) {
              echo "<script>alert('Las contraseñas no coinciden')</script>";
          } else {
            $insert = $conn->prepare("INSERT INTO administrador (nombre_admin, password)
                      values (:nombre, :codigo)");

            $insert -> execute([
                ":nombre" => $nombre,
                ":codigo" => $codigo
            ]);
            if ($insert){
              echo "<script>alert('Rregistrado correctamente')</script>";
            } 
          }
        }
    }
  }
?>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Registrar Administrador</h5>
          <form method="POST" action="create-admins.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="nombre_admin" id="form2Example1" class="form-control" placeholder="Nombre de Usuario" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form2Example1" class="form-control" placeholder="Contraseña" />
                </div>
                <div class="form-outline mb-4">
                  <input type="password" name="confirm_password" id="form2Example1" class="form-control" placeholder="Confirmar Contraseña" />
                </div>
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Registrar</button>
              </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "../includeAdmin/footer.php"; ?>