<?php
session_start();

if(!$_SESSION['logged_in']){
  header('Location: oauth/src/index.php');
  exit();
}
extract($_SESSION['userData']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AUI Casino Bot</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img src="https://images-ext-1.discordapp.net/external/KBqZkpjDeMredqOw2f0_F2OZvKeXdxm_TYCME2BYBHE/%3Fsize%3D1024/https/cdn.discordapp.com/avatars/1068531863469174876/1ae299e0049d3c9da8780f2f14af9fe8.webp?width=320&height=320" alt="AdminLTELogo" height="60" width="60">
    <p>Among Us India</p>
  </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
  

    </nav>

    <?php
      $currentPage = 'casino.php';
      include 'pages/elements/sidebar.php';
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">AUI Casino Bot - General Settings</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <p>Bot Status: <span class="badge badge-success">Online</span></p>
      <hr>

      <!-- currency symbol -->
      <!-- put form in box -->
        <form>
          <div class="form-group">
            <label for="currencySymbol">Currency Symbol</label>
            <input type="text" class="form-control" id="currencySymbol" placeholder="Enter Currency Symbol">
          </div>
          <div class="form-group">
            <label for="Starting Balance">Starting Balance</label>
            <input type="text" class="form-control" id="Starting Balance" placeholder="500">
          </div>
          <!-- form for max cash -->
          <div class="form-group">
            <label for="Max Cash">Max Cash</label>
            <input type="text" class="form-control" id="Max Cash" placeholder="1000">
          </div>
          <!-- form for max bank -->
          <div class="form-group">
            <label for="Max Bank">Max Bank</label>
            <input type="text" class="form-control" id="Max Bank" placeholder="1000">
          </div>
          <hr>
          <button type="submit" class="btn btn-danger">Save</button>
        
        </form>
     
      
    </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE plugins -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
