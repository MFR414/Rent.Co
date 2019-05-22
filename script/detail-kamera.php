<?php
    include "koneksi.php";
    session_start();
    if($_SESSION['user']==''){
        header("location:login_penyewa.php");
    }

    $sql="SELECT * FROM kamera k INNER JOIN pemilik_kamera pk ON k.id_pemilik = pk.id_pemilik WHERE id_kamera = '$_GET[submit]'";
    $result = mysqli_query($mysqli,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">
    <link rel="icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">

</head>
    <style type="text/css">

    .container{
    margin-top : 50px;
    }
    .search-bar{
        width : 1500px;
    }
    .row{
        margin-top : 15px;
    }
    .nav-item{
        margin-right : 5px;
        margin-left : 5px;
    }
    .col-4{
        margin : 35px;
    }
    .btn-success{
        margin-left : 60%;
        margin-top : 15%;
    }
    </style>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #000000;"> <!--"navbar navbar-dark bg-primary"(warna bitu langit)   "navbar navbar-light" style="background-color: #e3f2fd;"(ganti warna lain)  "navbar navbar-dark bg-dark"(warna hitam)-->
        <a href="main-page.php">
            <img src="../gambar/logo-putih.png" width="130"height="45">
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></a>
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--<div class="search-bar">
                <div class="input-group mb-3">
              <form action="#">
                    <input type="text" class="form-control" style="width: 920px !important;" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                  </form>     
                    <a class="btn btn-outline-success" type="button" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        -->                         

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="color:white;">
                        <div class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hello user!
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                            <a class="dropdown-item" href="profile_penyewa.php">Lihat profil</a>
                            <a class="dropdown-item" href="logout.php">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>    
        
    </nav>
    <!-- ini ending navbar -->

    <?php
        while($rows = mysqli_fetch_array($result))
        {
    ?>

    <!--ini info produk-->
    <div class="row">
        <div class="col-4">
            <img src="../gambar/kamera/<?php echo $rows['gambar_kamera']?>" width="400"height="300">
        </div>
                <div class="col-4">
                    <div class="judul">
                        <div class="sub-judul">
                            <p><h3><?php echo $rows['merek_kamera']?> <?php echo $rows['seri_kamera']?></h3></p>
                                <p><h4>Rp <?php echo $rows['harga_sewa']?></h4></p>                 
                    </div>    
                    
                        <div class="detail">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <button type="button" class="btn btn-outline-dark" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Keterangan</button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-outline-dark" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Spesifikasi</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <p><?php echo $rows['kondisi_kamera']?></p>
                                    <p>Status Kamera : <?php echo $rows['status_kamera']?></p>   
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <p><?php echo $rows['spesifikasi_kamera']?></p>
                                </div>
                            </div>
                        </div>
                        
                            <a type="button" class="btn btn-success" data-toggle="pill" href="https://web.whatsapp.com/send?phone=<?php echo $rows['notelp_pemilik']?>&text=halo%20saya%20ingin%20meminjam%20kamera%20anda%2C%20apakah%20kita%20bisa%20bertemu%3F" 
                            role="tab" aria-controls="pills-profile" aria-selected="false">Hubungi Ke Whatsapp</a>
                            
                            <a type="button" class="btn btn-outline-dark" href="main-page.php" 
                             style="margin-left:240px; margin-top: 10px;">Kembali</a>                  
                    </div>
                    <?php
                        $namaPemilik = $rows['nama_pemilik'];
                        }
                    ?>
                </div>
                 <!--Side-Bar-->
                 <aside class="col-sm-2" style="margin-top:100px; background-color:#bbbdbf; margin-bottom:300px;">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                        <h5><i class="fa fa-envelope" aria-hidden="true"></i>Sewa sekarang</h5><br>
                        </div>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            <h6>Tanggal sewa</h6><br>
                                <input type="date" class="form-control" name="fromdate" placeholder="Tanggal sewa" required>
                            </div>
                            <div class="form-group">
                                <h6>Tanggal kembali</h6><br>
                                <input type="date" class="form-control" name="todate" placeholder="Tanggal kembali" required>
                            </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-dark"  name="sewa">Sewa </button>
                            </div>                
                        </form>
                    </div>
                    <?php
                    $namaPenyewa = $_SESSION['nama'];
                    $emailPenyewa = $_SESSION['email_penyewa'];
                    $noTelpPenyewa = $_SESSION['notelp_penyewa'];
                    $noKtpPenyewa = $_SESSION['noktp_penyewa'];
                    $idKam=$_GET['submit'];
                    if(isset($_POST['sewa'])){
                        $tanggalMulai = htmlentities($_POST['fromdate']);
                        $tanggalSelesai = htmlentities($_POST['todate']);
                        $sqlTransaksi="INSERT INTO daftar_sewa(id_kam, nama_penyewa, email_penyewa, notelp_penyewa,noktp_penyewa,nama_pemilik,
                                        tanggal_mulai_sewa,tanggal_selesai_sewa,konfirmasi_pemilik) 
                                        VALUES('$idKam','$namaPenyewa','$emailPenyewa','$noTelpPenyewa','$noKtpPenyewa','$namaPemilik','$tanggalMulai','$tanggalSelesai',
                                        'No')";
                        $resultTransaksi = mysqli_query($mysqli,$sqlTransaksi);
                        if($resultTransaksi){
                          $message = "Data Berhasil Dimasukkan";
                          echo "<script type='text/javascript'>alert('$message');</script>";
                          
                        }else{
                          $message = "Data Gagal Dimasukkan";
                          echo "<script type='text/javascript'>alert('$message');</script>";
                          echo mysqli_errno($mysqli);
                        }   
                    }
                    ?>
                </aside>
    <!--/Side-Bar--> 
        </div>
        <?php include 'footer.php';
        ?>
</body>
</html>