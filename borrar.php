<?php 
include 'conexion.php';

if(isset($_GET['id'])){

    
    $id=$_GET['id'];

    $query = "DELETE FROM users WHERE id = $id";
    $resultado = mysqli_query($mysqli,$query);

    if(!$resultado){
        die("fallo resultado");

    }

    

header('location: gestion-users.php');
?>
<script>
    setTimeout(() => {
        Window.history.replaceState(null,null,window.location.pathname)
    }, 0);
</script>
<?php
}
?>