<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rent.Co - Daftar Kamera</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

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

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Kamera</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Tabel Data Kamera</div>
              <div class="card-body">
                <div class="table-responsive">
                  <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12">
                      <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                      <a class="btn btn-primary" href="add_kamera.php" role="button">Tambah kamera</a>
                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 60px;">Merk kamera</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px;">Seri</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">Harga</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 100px;">Kondisi</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 80px;">Spesifikasi</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Foto</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110px;"></th>
                      </tr>
                    </thead>
                    <?php
                      include "koneksi.php";
                      $id=$_SESSION["id_user"];
                      $sql= "SELECT * FROM kamera WHERE id_pemilik = '$id' ";
                      $result = mysqli_query($mysqli,$sql);
                      while($rows = mysqli_fetch_array($result))
                        {
                    ?>
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo $rows['merek_kamera']?></td>
                        <td><?php echo $rows['seri_kamera']?></td>
                        <td><?php echo $rows['harga_sewa']?></td>
                        <td><?php echo $rows['kondisi_kamera']?></td>
                        <td><?php echo $rows['spesifikasi_kamera']?></td>
                        <td><?php echo $rows['status_kamera']?></td>
                        <td><?php echo $rows['gambar_kamera']?></td>
                        <td>
                          <form action="edit_kamera.php" method="GET">
                            <button type = "submit" class="btn-sm btn-success" name="submit" value="<?php echo $rows['id_kamera']?>"><strong>Edit</strong></button>
                          </form>
                          <form action="delete-kamera.php" method="GET">
                            <button type = "submit" class="btn-sm btn-danger" name="submit" value="<?php echo $rows['id_kamera']?>"><strong>Delete</strong></button>
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
                  <!--<div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                          <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active">
                          <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                        </li>
                        <li class="paginate_button page-item ">
                          <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                        </li>
                        <li class="paginate_button page-item next" id="dataTable_next">
                          <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                        </li>
                    </ul>
                  </div>-->
                </div>
              </div>
              </div>
              </div>
            </div>
          </div>
          <!--<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
        </div>

        
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Rent.Co 2019</span>
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
          <a class="btn btn-primary" href="login.html">Logout</a>
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

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
