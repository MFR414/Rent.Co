<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rent.Co - Penyewaan kamera - Index</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="shortcut icon" href="./gambarPemilik/tampilan/rentco.png" type="image/x-icon">
    <link rel="icon" href="./gambarPemilik/tampilan/rentco.png" type="image/x-icon">
  

</head>

<body id="page-top">
  <?php 
  session_start();
  if($_SESSION['user']==''){
    header("location:login_pemilik.php");
  }
  include "koneksi.php";
  $id=$_SESSION["id_user"];
  $sqlpemilik= "SELECT * FROM pemilik_kamera WHERE id_pemilik = '$id'";
  $resultpemilik = mysqli_query($mysqli,$sqlpemilik);
  $row=mysqli_fetch_array($resultpemilik);
  ?>

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <!--<i class="fas fa-bars"></i>--> <img src="./gambarPemilik/tampilan/logo-putih.png" width="100" height="30" class="d-inline-block align-top" alt="">
</button>
<a class="navbar-brand" href="index.php">
  <!--<img src="../../gambar/logo-3-negatif.png" width="100" height="30" class="d-inline-block align-top" alt="">-->
</a>

<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" width="800px">
  
</form>
</nav>
  <!--navbar search-->

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <div class="profil" style="margin-left:27%;">
                <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="./gambarPemilik/selfieKtp/<?php echo $row['gamselfie_pemilik']?>" width="100px;">
            </div>
            <p style="color:white; text-align: center;"><?php echo $_SESSION['user']?></p>
        </li>
        
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="confirm-sewa.php">
            <i class="far fa-handshake"></i>
            <span>Konfirmasi sewa</span></a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="profile_pemilik.php" >
          <i class="fas fa-fw fa-folder"></i>
          <span>Lihat Profil</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listkamera.php">
          <i class="fas fa-camera-retro"></i>
          <span>Kamera</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="	fas fa-door-open"></i>
          <span>Log out</span></a>
      </li>
    </ul>

  
    <div id="content-wrapper">
    <?php
    $sql= "SELECT * FROM kamera WHERE id_pemilik = '$id'";
    $result = mysqli_query($mysqli,$sql);
    while($rows = mysqli_fetch_array($result))
        {
    ?>

      <div class="container-fluid">
 
        <div class="row">  

          <div class="col-lg-4 col-md-6 mb-4">
 
            <div class="card h-100">
              <img class="card-img-top" src="../Rent.Co/gambar/kamera/<?php echo $rows['gambar_kamera']?>">
              <div class="card-body">
                <h4 class="card-title">
                  <p> <?php echo $rows['merek_kamera']?> <?php echo $rows['seri_kamera']?></p>
                </h4>
                <h5><?php echo $rows['harga_sewa']?></h5>
                <p class="card-text">Spesifikasi : <?php echo $rows['spesifikasi_kamera']?></p>
                <p class="card-text">Kondisi : <?php echo $rows['kondisi_kamera']?></p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <?php }?>

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
