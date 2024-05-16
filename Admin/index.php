
<?php
   require('../connect.php');
   if (!isset($_SESSION['isUserLoggedIn'])){
     echo "<script>window.location.href='login.php';</script>";
   }
   // execute a query
   $sql = 'SELECT * FROM admin';
   $statement = $pdo->query($sql);
   $user_data = $statement->fetch(PDO::FETCH_ASSOC);

   
   
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BackOffice | Dashboard </title>
  <form method="post" action="../controler/update_section_visibility.php">
    <!-- Form content -->
</form>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
 
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BackOffice</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="IMG-3565-photo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">De Sousa Martins Samuel</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

 <!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the.nav-icon class
         with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
      <a href="#" class="nav-link right">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
      <?php if(isset($_GET["homesetting"])){
?>
Home setting
<?php } else { ?> ....
<?php } ?>
      <li class="nav-item menu-open">
<a href="index.php?homesetting=true" class="nav-link">
<i class="fa fa-cog"></i>
<p> Contrôle du Home </p> </a>
</li>

    <li class="nav-item menu-open">
<a href="index.php" class="nav-link">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p> Contrôle des sections </p> </a>
  </ul>
</nav>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tableau de bord</h1>

            <div class="card card-primary col-lg-12"> <div class="card-header">
              
<h3 class="card-title">Page principale</h3> </div>
<form>
<div class="card-body">
<div class="form-group">
<label for="InputTitre">Titre</label>
<input type="text" class="form-control" id="InputTitle" placeholder="Titre">
</div>
<div class="form-group">
<label for="InputSousTitre">Sous titre</label>
<input type="text" class="form-control" id="InputSousTitre" placeholder="Sous titre"> </div>
<div class="form-check">
<input type="checkbox" class="form-check-input" id="ShowIcons">
<label class="form-check-label" for="ShowIcons">Montrer les icones des réseaux sociaux ?</label> </div>
</div>
<!-- /.card-body -->
<div class="card-footer">
<button type="submit" class="btn btn-primary">Ok</button> </div>
</form> </div>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"> <a href="logout.php"> Lougout </a> </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content --> <section class="content">
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
<div class="form-check">
<input class="form-check-input" name="home" type="checkbox" value="1" id="flexCheck1"
<?php
if ($user_data['home_section']){
echo "checked";
}
?>
>
<label class="form-check-label" for="flexCheck1">
Accueil
</label>
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="1" id="flexCheck2"> <label class="form-check-label" name="about" for="flexCheck2">
À propos de moi
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="1" id="flexCheck3"> <label class="form-check-label" name="resume" for="flexCheck3">
Compétences
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="1" id="flexCheck4"> <label class="form-check-label" name="services" for="flexCheck4">
Réalisations
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="1" id="flexCheck5"> <label class="form-check-label" name="portfolio" for="flexCheck5">
Contact
</label>
</div>
<input type="submit" class="btn btn-sm btn-primary" name="update-section" value="Save">
</form> </div>
</div><!-- /.container-fluid --> </section>


         
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
