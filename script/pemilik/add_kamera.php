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
    include "koneksi.php";
    session_start();
    if($_SESSION['user']==''){
      header("location:login_pemilik.php");
    }
    $id=$_SESSION["id_user"];

    if(isset($_POST['simpan'])){
      $merk = $_POST['merk'];
      $seri = $_POST['seri'];
      $spek = $_POST['spek'];
      $kondisi = $_POST['kondisi'];
      $harga = $_POST['harga'];
      $status = $_POST['status'];
      $filetmp = $_FILES['foto']['tmp_name'];
      $filename = $_FILES['foto']['name'];
      $filepath = "Rent.Co/gambar/kamera/".$filename;
      move_uploaded_file($filetmp,$filepath);

      $sql = "INSERT INTO kamera SET id_pemilik ='$id',merek_kamera='$merk',
              seri_kamera='$seri',spesifikasi_kamera='$spek',kondisi_kamera='$kondisi'
              ,harga_sewa='$harga',status_kamera='$status',gambar_kamera='$filename'";
      $result = mysqli_query($mysqli,$sql);
      if($result){
        echo "Data Berhasil Dimasukkan";
      }
    }
    ?>

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
        <form method="POST">
        <div class="card mb-3">
              <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                      <div class="form-inline" action="#">
                  <div class="md-form">
                      <label for="form3" class="" >Merk kamera</label>
                      <input type="text" id="form3" class="form-control" name="merk" >
                  </div><br>
                  <div class="md-form">
                      <label for="form4" >Seri Kamera</label>
                      <input type="text" id="form4" class="form-control" name="seri" >
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
                      <input type="file" id="form9" accept="image/png, image/jpeg" name="foto">
                  </div><br>
        <div class="text-center mt-4">
        <button class="btn btn-dark waves-effect waves-light" name="simpan" type="submit">Simpan</button>
        </div>
        </div>
        </div>
        </div>
        </div>
      </div>
      </form>
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->




    
</body>
</html>