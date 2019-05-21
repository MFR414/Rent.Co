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

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand" href="index.php">
            <img src="./gambar/tampilan/logo-3-negatif.png" width="170" height="50" class="d-inline-block align-top" alt="">
        </a>

        <!-- Navbar Search -->
        <!--<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" width="800px">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
            </div>
        </form>-->
    </nav>
    
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
          <li class="nav-item">
              <div class="profil" style="margin-left:27%;">
                  <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="./gambar/tampilan/ig-warna.png" width="100px;">
              </div>
              <p style="color:white; text-align: center;">nama user</p>
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
            Tabel Rekap data penyewaan</div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                     <tr><th rowspan="1" colspan="1">No</th>
                      <th rowspan="1" colspan="1">Nama Penyewa</th>
                      <th rowspan="1" colspan="1">Email</th>
                      <th rowspan="1" colspan="1">No Telp</th>
                      <th rowspan="1" colspan="1">Kamera yang disewa</th>
                      <th rowspan="1" colspan="1">Tanggal sewa</th>
                      <th rowspan="1" colspan="1">Tanggal kembali</th>
                      <th rowspan="1" colspan="1"></th>
                    </thead>
                    </tfoot>
                    <tbody>
                    <tr role="row" class="odd">
                        <td class="sorting_1"><?php //echo $rows['']?></td>
                        <td><?php //echo $rows['']?></td>
                        <td><?php //echo $rows['']?></td>
                        <td><?php // $rows['']?></td>
                        <td><?php //echo $rows['']?></td>
                        <td><?php //echo $rows['']?></td>
                        <td><?php // $rows['']?></td>
                        <td><button class="btn btn-success">Konfirmasi</button></td>
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
        <?php //} ?>

  </div>
  <!-- /#wrapper -->
</body>
</html>