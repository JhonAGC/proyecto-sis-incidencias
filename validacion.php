<?php  

include 'conexion.php';

if(!empty($_POST['registro'])){
    if(empty($_POST['usuario']) or empty($_POST['nombre']) or empty($_POST['tipo_usuario']) or empty($_POST['password'])){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error: </strong> Rellenar los campos del formulario.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }else{
        
        $usuario = $_POST['usuario'];
        $nombre = $_POST['nombre'];
        $tipo_usuario = $_POST['tipo_usuario'];
        
        $password = $_POST['password'];
        $contraseña = sha1($password);
        $query = "INSERT INTO users(usuario,nombre,password,tipo_usuario) VALUE ('$usuario','$nombre','$contraseña','$tipo_usuario')";
        $resultado = mysqli_query($mysqli,$query);
        
        header('ocation: users.php');

        if(isset($resultado)){
            
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Guardado: </strong> Se guardo correctamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }else{
            echo '<div class="alerta_rojo"> <h4>error en el registro</h4></div>';
        }
        
        

    }
}else if(!empty($_POST['actualizar'])){
    if(empty($_POST['usuario']) or empty($_POST['nombre'])or empty($_POST['contraseña']) or empty($_POST['tipo_usuario'])){
        
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error: </strong> Rellenar los campos del formulario.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }else{
        //variables
        $cod = $_POST['id'];
        $users = $_POST['usuario'];
        $name = $_POST['nombre'];
        $tipo_users = $_POST['tipo_usuario'];

        $password = $_POST['contraseña'];
        $contraseña = sha1($password);

        // sql
        $querys = "UPDATE users set usuario='$users',nombre='$name',password='$contraseña', tipo_usuario='$tipo_users' WHERE id='$cod'";

        $resultados = mysqli_query($mysqli,$querys);
        
        if(isset($resultados)){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>GUARDADO</strong> Se guardo correctamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }else{
            echo '<div class="alerta_rojo"> <h4>error en el registro</h4></div>';
        }
        


    }
    
}

?>


