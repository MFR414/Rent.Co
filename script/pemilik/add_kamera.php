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
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" width="800px">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
            </div>
        </form>
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
          <a class="nav-link" href="#" >
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
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Log out</span></a>
        </li>
      </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Area Chart Example-->
        <div class="card mb-3">
              <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                      <div class="form-inline" action="#">
                  <div class="md-form">
                      <label for="form3" class="" >Merk kamera</label>
                      <input type="text" id="form3" class="form-control" >
                  </div><br>
                  <div class="md-form">
                      <label for="form4" >Tipe</label>
                      <input type="email" id="form4" class="form-control" >
                  </div><br>
                  <div class="md-form">
                      <label for="form5">Tahun</label>
                      <input type="number" id="form5" class="form-control" >
                  </div><br>
                  <div class="md-form">
                      <label for="form6">Deskripsi</label>
                      <textarea class="form-control" id="deskripsiTextArea" rows="3"></textarea>
                  </div><br>
                  <div class="md-form">
                      <label for="form7">Spesifikasi</label>
                      <textarea class="form-control" id="SpekTextArea" rows="3"></textarea>
                  </div><br>
                  <div class="md-form">
                      <label for="form8">Harga</label>
                      <input type="email" id="form8" class="form-control" >
                  </div><br>
                  <div class="md-form">
                      <label for="form9">Foto profil</label>
                      <input type="file" id="form9" accept="image/png, image/jpeg">
                  </div><br>

        <div class="text-center mt-4">
            <a button class="btn btn-primary" href="#">Tambah Kamera</a>
        </div>
        </div>
        </div>
        </div>
        </div>
      </div>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->




    
</body>
</html>