<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Charts</title>

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
    if($_SESSION['nama']==''){
      header("location:login_admin.php");
    }
    $user = $_SESSION['nama'];
  ?>
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php"></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>-->

    <!-- Navbar -->
    <ul class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Hi, <?php echo $user?></a>
          <a class="dropdown-item" href="logout.php">Log out</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="penyewa.php" >
          <i class="fas fa-running"></i>
          <span>Penyewa kamera</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pemilik.php">
          <i class="fas fa-male"></i>
          <span>Pemilik kamera</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kamera.php">
          <i class="fas fa-camera-retro"></i>
          <span>Kamera</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rekap_data.php">
          <i class="far fa-handshake"></i>
          <span>Rekap data</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Penyewa</li>
        </ol>

        <?php
          include 'koneksi.php';
          $sql= "SELECT * FROM penyewa ";
          $result = mysqli_query($mysqli,$sql);
          while($rows = mysqli_fetch_array($result))
          {
        ?>
        <!-- Table Penyewa-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabel Data Penyewa Kamera</div>
            <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                    <tr><th rowspan="1" colspan="1">Nama</th>
                      <th rowspan="1" colspan="1">ID Penyewa</th>
                      <th rowspan="1" colspan="1">Email</th>
                      <th rowspan="1" colspan="1">No Telp</th>
                      <th rowspan="1" colspan="1">No KTP</th>
                    </thead>
                    </tfoot>
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php echo $rows['nama_penyewa']?></td>
                        <td><?php echo $rows['id_penyewa']?></td>
                        <td><?php echo $rows['email_penyewa']?></td>
                        <td><?php echo $rows['notelp_penyewa']?></td>
                        <td><?php echo $rows['noktp_penyewa']?></td>
                    </tr> 
                    </tbody>
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
        <?php } ?>
        
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
