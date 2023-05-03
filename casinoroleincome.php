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
            <h1 class="m-0">AUI Casino Bot - Role Income Settings</h1>
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
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Role Income</h3>
  
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>Role ID</th>
                        <th>Roles</th>
                        <th>Income</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>789632541026</td>
                        <!-- custom color badge -->
                        <style>
                          .badge-custom {
                            background-color: #00ffea;
                            color: black;
                          }
                        </style>

                        <td><span class="badge badge-custom">Admin</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">12000005625</div>
                        </td>
                    </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="javascript:void(0)" id="change-role-income-btn" class="btn btn-sm btn-danger float-left">Change</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
              <div id="role-income-form" style="display:none;">
                    <!-- make a form to add or remove role income -->
                    <!-- card -->
                    <div class="card card-body">
                        <form>
                            <!-- dropdown input -->
                            <label for="role-income-role">Role Income</label>
                            <select class="form-control" id="role-income-role">
                            <option>Admin</option>
                            <option>Mod</option>
                            <option>Member</option>
                            </select>
                            <br>
                            <label for="role-income-amount">Amount</label>
                            <input type="number" class="form-control" id="role-income-amount" placeholder="Enter amount">
                            <p class="text-muted">Leave Empty if you are removing role income.</p>
                            <br>
                            <button type="submit" class="btn btn-info">+ Add role Income</button>
                            <button type="submit" class="btn btn-danger">Remove role Income</button>
                              
                              
                           
                        </form>
                    </div>
                </div>

                    
            
            
            </div>
            <!-- /.col -->
     
      
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
