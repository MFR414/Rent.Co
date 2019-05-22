<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent.Co - Penyewaan kamera</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body>
  <?php 
    session_start();
    if($_SESSION['user']==''){
      header("location:login_pemilik.php");
    }
    include "koneksi.php";
    $id=$_SESSION["id_user"];
    $sqlpemilik= "SELECT gamselfie_pemilik FROM pemilik_kamera WHERE id_pemilik = '$id'";
    $resultpemilik = mysqli_query($mysqli,$sqlpemilik);
    $row=mysqli_fetch_array($resultpemilik);
  ?>
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <!--<i class="fas fa-bars"></i>--> <img src="./gambarPemilik/logo-3-negatif.png" width="100" height="30" class="d-inline-block align-top" alt="">
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
              <p style="color:white; text-align: center;"><?php echo $_SESSION['user']; mysqli_close($mysqli)?></p>
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

      <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabel Konfirmasi Penyewaan</div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                     <tr><th rowspan="1" colspan="1">No</th>
                      <th rowspan="1" colspan="1">Nama Penyewa</th>
                      <th rowspan="1" colspan="1">Email</th>
                      <th rowspan="1" colspan="1">No Telp</th>
                      <th rowspan="1" colspan="1">No Ktp</th>
                      <th rowspan="1" colspan="1">Id Kamera</th>
                      <th rowspan="1" colspan="1">Nama Pemilik</th>
                      <th rowspan="1" colspan="1">Tanggal sewa</th>
                      <th rowspan="1" colspan="1">Tanggal kembali</th>
                      <th rowspan="1" colspan="1">Konfirmasi</th>
                    </thead>
                    <?php
                      include "koneksi.php";
                      $nama=$_SESSION["nama_user"];
                      $sql= "SELECT * FROM daftar_sewa WHERE nama_pemilik = '$nama' ";
                      $result = mysqli_query($mysqli,$sql);
                      while($rows = mysqli_fetch_array($result))
                        {
                    ?>
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo $rows['id_daftarsewa']?></td>
                        <td><?php echo $rows['nama_penyewa']?></td>
                        <td><?php echo $rows['email_penyewa']?></td>
                        <td><?php echo $rows['notelp_penyewa']?></td>
                        <td><?php echo $rows['noktp_penyewa']?></td>
                        <td><?php echo $rows['id_kam']?></td>
                        <td><?php echo $rows['nama_pemilik']?></td>
                        <td><?php echo $rows['tanggal_mulai_sewa']?></td>
                        <td><?php echo $rows['tanggal_selesai_sewa']?></td>
                        <td>
                          <form method="POST">
                            <button type = "submit" class="btn-sm btn-success" name="Yes" ><strong>Ya</strong></button>
                          </form>
                          <form method="POST">
                            <button type = "submit" class="btn-sm btn-danger" name="No" ><strong>Tidak</strong></button>
                          </form>
                        </td>
                      </tr>                    
                    </tbody>
                    <?php
                      }
                    ?>
                  </table>
                </div>
              </div>
                <div class="row">
                  <div class="col-sm-12 col-md-7">
                     <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  <!-- /#wrapper -->
</body>
</html>