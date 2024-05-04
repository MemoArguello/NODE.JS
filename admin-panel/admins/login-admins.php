<?php require "../includeAdmin/header.php";?>
<?php require "../../config/config.php";?>
<?php
  if(isset($_SESSION['nombre_admin'])){
      header("Location: ".ADMINURL."");
  }

if(isset($_POST['submit'])){
  if(empty($_POST['nombre_admin']) || empty($_POST['password'])){
    echo "<script>alert('Rellene todos los campos, Por favor')</script>";
    }else{
      $nombre_admin = $_POST['nombre_admin'];
      $password = $_POST['password'];


      $login = $conn->prepare("SELECT * FROM administrador WHERE nombre_admin = :nombre_admin");
      $login->bindParam(':nombre_admin', $nombre_admin);
      $login->execute();

      $fetch = $login->fetch(PDO::FETCH_ASSOC);

      if ($login->rowCount() > 0) {
        if (password_verify($password, $fetch['password'])) {
            $_SESSION['nombre_admin'] = $fetch['nombre_admin'];
            $_SESSION['id_admin'] = $fetch['id_admin'];

            header("location: ".ADMINURL."");

        } else {
            echo "<script>alert('Email o Contraseña Incorrecta')</script>";        
        }        
    } else {
        echo "<script>alert('Email o Contraseña Incorrecta')</script>";

    }
    }
  }
  ?>
<section class="hero-section d-flex justify-content-center align-items-center">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
                <div class="hero-section-text mt-5 text-center">
                    <h6 class="text-white">Sistema de Control de Contenidos UC Unidad Pedagogica San Ignacio Guazú</h6>
                    <h1 class="hero-title text-white mt-4 mb-4">Acceso Funcionarios</h1>
                    <h6 class="text-white">Para solicitar acceso, comunícate con el departamento de TIC</h6>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <form class="custom-form hero-form" action="login-admins.php" method="post" role="form">
                    <h3 class="text-white mb-3 text-center">Iniciar Sesión</h3>
                    <div class="mb-3">
                        <input type="usuario" class="form-control" name="nombre_admin" id="usuario" placeholder="Usuario" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require "../includeAdmin/footer.php"?>