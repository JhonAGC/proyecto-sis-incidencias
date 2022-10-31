
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
  <script src="js/functionAlert.js"></script>
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
  </script>
</head>

<body class="sb-nav-fixed">

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand"  href="dashboard.php">SUNFRUIT</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
        class="fas fa-bars"></i></button>
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="userDropdown" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <?php echo $nombre ?>
          <i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right " id="evento" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Configuración</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Salir</a>
        </div>
      </li>
    </ul>
  </nav>



  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">

            <!-- foto de perfil -->
          
            <div class="ft_perfil">
              <div class="content_foto"><img src="img/images_perfil.png" alt="" class="foto_perfil"></div>
              
              <div class="perfil-nombre"> <h4 class="ft_nombre">


                <?php 
                $cod=$_SESSION['id'];
                $sqlquery="SELECT * FROM users WHERE id=$cod";
                $res=mysqli_query($mysqli,$sqlquery);
                $pre= mysqli_fetch_assoc($res);
                echo $pre['nombre'];
                ?>
              </h4>
              </div>
            </div>
            <!-- fin foto de perfil -->


            <!-- visible solo para el administrador -->
            <?php if ($tipo_usuario == 1) { ?>

<div class="sb-sidenav-menu-heading">ADMINISTRAR</div>
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
  aria-expanded="false" aria-controls="collapseLayouts">
  <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
   USUARIOS
  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
  <nav class="sb-sidenav-menu-nested nav">
    <a class="nav-link" href="users.php">Registrar nuevo usuario</a>
    <a class="nav-link" href="gestion-users.php">Gestion de usuarios</a>
  </nav>
</div>
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
  aria-expanded="false" aria-controls="collapsePages">
  <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
  Pages
  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth"
      aria-expanded="false" aria-controls="pagesCollapseAuth">
      Authentication
      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
      data-parent="#sidenavAccordionPages">
      <nav class="sb-sidenav-menu-nested nav">
        <a class="nav-link" href="login.html">Login</a>
        <a class="nav-link" href="register.html">Register</a>
        <a class="nav-link" href="password.html">Forgot Password</a>
      </nav>
    </div>

  </nav>
</div>

<?php } ?> <!-- administrador -->

<!-- GESTION DE CLIENTES-->
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError"
  aria-expanded="false" aria-controls="pagesCollapseError">
  <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
      CLIENTES
  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
  data-parent="#sidenavAccordionPages">
  <nav class="sb-sidenav-menu-nested nav">
      <a class="nav-link" href="401.html">Lista de clientes</a>
      <a class="nav-link" href="404.html">Administrar clientes</a>
      
  </nav>
</div>
<!--FIN  GESTION DE CLIENTES -->

<div class="sb-sidenav-menu-heading">Addons</div>
<a class="nav-link" href="charts.html">
  <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
  Areas
</a>
<a class="nav-link" href="tablas.php">
  <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
  Categorias
</a>
</div>
</div>
<div class="sb-sidenav-footer">
<div class="small">ICA – PERÚ 🌍</div>
Frutos de la tierra del sol
</div>
</nav>
</div>
    <div id="layoutSidenav_content">

  <main>
