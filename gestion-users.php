<?php 

include 'conexion.php';

session_start();

if (!isset($_SESSION['id'])) {

  header('Location: index.php');

}

$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];

//actualizar usuario






require 'vistas/header.php';


?>

<div class="title-gestionUsers">
<ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">LISTA DE USUARIOS REGISTRADOS</li>
          </ol>
</div>

<!--    tabla  usuarios-->

<div class="card mb-4">

            <div class="card-header">
              <i class="fas fa-table mr-1"></i>
              USUARIOS
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>CODIGO</th>
                      <th>USARIO</th>
                      <th>NOMBRE</th>
                      <th>TIPO DE USUARIO</th>
                      <th>ACCION</th>

                    </tr>
                  </thead>

                  <tbody>
                    
                  <?php 
                  
                  $query = " SELECT * FROM users";

                  $resultado = mysqli_query($mysqli,$query);
                  $n=0;
                  while($fila = mysqli_fetch_array($resultado)){ $n++; ?>
                    <tr>
                      
                        <td><?php echo $n ?></td>
                        <td> <?php echo $fila['usuario'] ?></td>
                        <td><?php echo $fila['nombre'] ?></td>
                        <td><?php if($fila['tipo_usuario']==1){
                            echo 'Administrador';
                            }else{
                            echo'Usuario normal';
                            } ?></td>

                        <td class="btn-accion">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo $fila['id']?>" data-whatever="@mdo"> 
                        <i class="fas fa-marker"></i> Editar
                      </button>
                  
                            
                            <a  href="borrar.php?id=<?php echo $fila['id']?>"  class="btn btn-danger btn-tb eliminar">Eliminar
                                <i class="far fa-trash-alt" ></i>
                            </a>
                        </td>


                    </tr>
                    
                  <?php include 'update_users.php';  }
                   ?>
                  

                  </tbody>

                  <tfoot>
                    <tr>
                    <th>CODIGO</th>
                      <th>USARIO</th>
                      <th>NOMBRE</th>
                      <th>TIPO DE USUARIO</th>
                      <th>ACCION</th>

                    </tr>
                  </tfoot>

                </table>
              </div>
            </div>
          </div>


<!-- ventana modal -->



          
 <script src="js/function.js"></script>         


<?php require 'vistas/footer.php';?>

