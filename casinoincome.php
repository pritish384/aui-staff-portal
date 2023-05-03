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
            <h1 class="m-0">AUI Casino Bot - Income Settings</h1>
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
            <label for="work">WORK</label>
            <p id="work" class="form-text text-muted">COOLDOWN</p>
            <p id="work" class="form-text text-muted">Restrict how often this command can be used. (Seconds)</p>
            <input type="number" class="form-control" id="workcooldown" placeholder="600">
          </div>
          <!-- payout -->
            <div class="form-group">
                <label for="payout">PAYOUT</label>
                <p id="" class="form-text text-muted">Adjust the maximum and minimum payout.</p>
                <!-- minimum maximum -->
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control" id="payoutmin" placeholder="100">
                    </div>
                    <p id="" class="form-text text-muted">TO</p>
                    <div class="col">
                        <input type="number" class="form-control" id="payoutmax" placeholder="1000">
                    </div>
                </div>
            </div>
            <hr>
            <!-- crime -->
            <div class="form-group">
                <label for="crime">CRIME</label>
                <p id="crime" class="form-text text-muted">COOLDOWN</p>
                <p id="crime" class="form-text text-muted">Restrict how often this command can be used. (Seconds)</p>
                <input type="number" class="form-control" id="crimecooldown" placeholder="600">
            </div>
            
            <!-- payout -->
            <div class="form-group">
                <label for="payout">PAYOUT</label>
                <p id="" class="form-text text-muted">Adjust the maximum and minimum payout.</p>
                <!-- minimum maximum -->
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control" id="payoutmin" placeholder="100">
                    </div>
                    <p id="" class="form-text text-muted">TO</p>
                    <div class="col">
                        <input type="number" class="form-control" id="payoutmax" placeholder="1000">
                    </div>
                </div>
            </div>
            <!-- fine -->
            <div class="form-group">
                <label for="fine">FINE</label>
                <p id="fine" class="form-text text-muted">Adjust the maximum and minimum fine. (%)</p>
                <!-- minimum maximum -->
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control" id="finemin" placeholder="100 %">
                    </div>
                    <p id="" class="form-text text-muted">TO</p>
                    <div class="col">
                        <input type="number" class="form-control" id="finemax" placeholder="1000 %">
                    </div>
                </div>
            </div>
            <hr>
            <!-- rob -->
            <div class="form-group">
                <label for="rob">ROB</label>
                <p id="rob" class="form-text text-muted">COOLDOWN</p>
                <p id="rob" class="form-text text-muted">Restrict how often this command can be used. (Seconds)</p>
                <input type="number" class="form-control" id="robcooldown" placeholder="600">
            </div>
            <!-- payout -->
            <div class="form-group">
                <label for="payout">PAYOUT</label>
                <p id="" class="form-text text-muted">Adjust the maximum and minimum payout.</p>
                <!-- minimum maximum -->
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control" id="payoutmin" placeholder="100">
                    </div>
                    <p id="" class="form-text text-muted">TO</p>
                    <div class="col">
                        <input type="number" class="form-control" id="payoutmax" placeholder="1000">
                    </div>
                </div>
            </div>
            <!-- fine -->
            <div class="form-group">
                <label for="fine">FINE</label>
                <p id="fine" class="form-text text-muted">Adjust the maximum and minimum fine. (%)</p>
                <!-- minimum maximum -->
                <div class="row">
                    <div class="col">
                        <input type="number" class="form-control" id="finemin" placeholder="100 %">
                    </div>
                    <p id="" class="form-text text-muted">TO</p>
                    <div class="col">
                        <input type="number" class="form-control" id="finemax" placeholder="1000 %">
                    </div>
                </div>
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
