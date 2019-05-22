<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent.Co - Tambah kamera</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="shortcut icon" href="./gambarPemilik/tampilan/rentco.png" type="image/x-icon">
    <link rel="icon" href="./gambarPemilik/tampilan/rentco.png" type="image/x-icon">
</head>
<body>
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
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kamera</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Log out</span></a>
        </li>
      </ul>

    <div id="content-wrapper">
    <aside class="col-sm-10" style="margin-top:20px; background-color:#ffffff; margin-bottom:300px;">
        <div class="sidebar_widget">
            <div class="widget_heading">
              <h5><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah data kamera</h5><br>
            </div>
              <form method="POST"  enctype="multipart/form-data">
                    <div class="md-form">
                      <label for="form3" class="" >Merk kamera</label>
                      <input type="text" id="form3" class="form-control" name="merk">
                    </div><br>
                    <div class="md-form">
                        <label for="form4" >Seri Kamera</label>
                        <input type="text" id="form4" class="form-control" name="seri">
                    </div><br>
                    <div class="md-form">
                        <label for="form7">Spesifikasi Kamera</label>
                        <textarea class="form-control" id="SpekTextArea" rows="3" name="spek"></textarea>
                    </div><br>
                    <div class="md-form">
                        <label for="form6">Kondisi Kamera</label>
                        <textarea class="form-control" id="kondisiTextArea" rows="3" name="kondisi"></textarea>
                    </div><br>
                    <div class="md-form">
                        <label for="form5">Harga Sewa</label>
                        <input type="text" id="form5" class="form-control" name="harga">
                    </div><br>
                    <div class="md-form">
                        <label for="form8">Status Kamera</label>
                        <input type="text" id="form8" class="form-control" name="status">
                    </div><br>
                    <div class="md-form">
                        <label for="form9">Foto Kamera</label>
                        <input type="file" name="gbrKamUpdate">
                    </div><br>
                    <div class="form-group">
                      <button type="submit" class="btn btn-dark"  name="update">Tambah Data</button>
                    </div>        
              </form>
          </div>
      </aside>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Rent.co 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <?php
    if(isset($_POST['simpan'])){
      $merk = $_POST['merk'];
      $seri = $_POST['seri'];
      $spek = $_POST['spek'];
      $kondisi = $_POST['kondisi'];
      $harga = $_POST['harga'];
      $status = $_POST['status'];
      $filename = $_FILES['gbrKam']['name'];
      $filetmp = $_FILES['gbrKam']['tmp_name'];
      $filefolder = "../../gambar/kamera/".$filename;
      move_uploaded_file($filetmp,$filefolder);

      $sql = "INSERT INTO kamera SET id_pemilik ='$id',merek_kamera='$merk',
              seri_kamera='$seri',spesifikasi_kamera='$spek',kondisi_kamera='$kondisi'
              ,harga_sewa='$harga',status_kamera='$status',gambar_kamera='$filename'";
      $result = mysqli_query($mysqli,$sql);
      if($result){
        $message = "Tambah Kamera Succesfull";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }else{
        $message = "Tambah Kamera Unsuccesfull";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
    }
  ?>



    
</body>
</html>