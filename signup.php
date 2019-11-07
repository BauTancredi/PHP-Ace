<?php
include_once("SingUpForm.php");

$errores = [];
$signupForm = new SingUpForm();
if ($_POST) {
  $errores = $signupForm->enviar();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Faster+One|IBM+Plex+Sans:400,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/styles.css">

    <title>Creá una cuenta y seleccioná los mejores productos de tenis - Ace</title>
  </head>
  <body class="signup">
    <main>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 col-lg-4 offset-md-2 offset-lg-4 mt-4 pt-4">
            <h1 class="text-white text-center brand">Ace</h1>
            <form class="bg-white p-4 auth-form p-relative action="signup.php" method="post" enctype="multipart/form-data">
              <div class="p-absolute d-flex justify-content-between auth-nav">
                <a class="flex-fill text-center pb-2" href="signin.php">Iniciar sesión</a>
                <a class="flex-fill text-center pb-2 active" href="signup.php">Crear usuario</a>
              </div>
              <div class="form-group">
                <div class="input-group mb-3 mt-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-address-card"></i></span>
                  </div>
                  <input name="fullname" type="text" class="form-control <?= isset($errores["fullname"]) ? "is-invalid" : "" ?>" placeholder="Nombre completo" value="<?= $signupForm->getFullname() ?>">
                  <?php if(isset($errores["fullname"])): ?>
                    <div class="invalid-feedback">
                      <?= $errores["fullname"] ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                  </div>
                  <input name="email" type="email" class="form-control <?= isset($errores["email"]) ? "is-invalid" : "" ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico" value="<?= $signupForm->getEmail() ?>">
                  <?php if(isset($errores["email"])): ?>
                    <div class="invalid-feedback">
                      <?= $errores["email"] ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                  </div>
                  <input name="password" type="password" class="form-control <?= isset($errores["password"]) ? "is-invalid" : "" ?>" placeholder="Contraseña">
                  <?php if(isset($errores["password"])): ?>
                    <div class="invalid-feedback">
                      <?= $errores["password"] ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <div class="form-group">
                <label for="profilePicture">Foto de perfil</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-camera"></i></span>
                  </div>
                  <input name="avatar" type="file" id="profilePicture" class="form-control <?= isset($errores["avatar"]) ? "is-invalid" : "" ?>">
                  <?php if(isset($errores["avatar"])): ?>
                    <div class="invalid-feedback">
                      <?= $errores["avatar"] ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordar sesión</label>
              </div> -->
              <button name="submit" type="submit" class="btn btn-primary btn-block">Crear usuario</button>
            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/d3d10edd35.js" crossorigin="anonymous"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>