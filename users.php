<?php 
 include 'conexion.php';
 session_start();

 if (!isset($_SESSION['id'])) {

   header('Location: index.php');

 }

 $nombre = $_SESSION['nombre'];
 $tipo_usuario = $_SESSION['tipo_usuario'];

require 'vistas/header.php';

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>proyecto</title>
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
  </script>
</head>

<body class="bg-primary">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">REGISTRAR NUEVO USUARIO</h3>
                </div>
                <div class="card-body">
                  

                  <form method="POST" action="" class="form">
                    <?php require 'validacion.php'; ?>
                    <div class="form-group">
                      <label class="small mb-1" for="inputEmailAddress">Usuario</label>
                      <input class="form-control py-3"  type="text" name="usuario"
                        placeholder="Ingrese el usuario" />
                    </div>

                    <div class="form-group">
                      <label class="small mb-1" for="inputPassword">nombre</label>
                      <input class="form-control py-3"  type="text" name="nombre"
                        placeholder="Ingrese el nombre" />
                    </div>

                    <div class="form-group">
                        <label  class="col-form-label">TIPO DE USUARIO:</label>
                        <select name="tipo_usuario" id="" class="form-control">
                          <option value="1">Administrador</option>
                          <option value="2">Usuario Normal</option>
                        </select>
                      </div>
                    
                    <div class="form-group">
                      <label class="small mb-1" for="inputPassword">Password</label>
                      <input class="form-control py-3" " type="password" name="password"
                        placeholder="Ingrese la contraseña" />
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-1">
                      <input type="submit" class="btn btn-primary" name="registro" value="Registrar usuario" >
                    </div>


                  </form>


                </div>
                <div class="card-footer text-center">
                  <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

  





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script src="js/scripts.js"></script>
</body>

</html>   





<?php
require 'vistas/footer.php';
?>