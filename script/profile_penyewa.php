<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent.Co - Profil</title>
    <!--css-->
    <link href="css/profile.css" rel="stylesheet">
    <!--icon-->
    <link rel="shortcut icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">
    <link rel="icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">

</head>
<?php
    include "koneksi.php";
    
?>
<body>
<!--awal navbar-->
<!--<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #000000;"> <!--"navbar navbar-dark bg-primary"(warna bitu langit)   "navbar navbar-light" style="background-color: #e3f2fd;"(ganti warna lain)  "navbar navbar-dark bg-dark"(warna hitam)-->
        <!--<a href="main-page.php">
            <img src="../gambar/logo-putih.png" width="130"height="45">
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></a>
                <span class="navbar-toggler-icon"></span>
            </button>
            <--<div class="search-bar">
                <div class="input-group mb-3">
              <form action="#">
                    <input type="text" class="form-control" style="width: 920px !important;" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                  </form>     
                    <a class="btn btn-outline-success" type="button" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                         -->

                    <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="color:white;">
                        <div class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hello user!
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Lihat profil</button>
                            <button class="dropdown-item" type="button">Keluar</button>
                        </div>
                    </div>
                </div>
            </div>    
        
    </nav>-->
    <!-- ini ending navbar -->
    <div class="container portfolio">
        <div class="bio-info">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bio-image">
                                <img src="https://image.ibb.co/f5Kehq/bio-image.jpg" alt="image" />
                            </div>			
                        </div>
                    </div>	
                </div>
                <div class="col-md-6">
                    <div class="bio-content">
                        <h1>Hi, Saya (username)</h1>
                        <h6>Email</h6>
                        <h4>(ini email)</h4>
                        <h6>No. Telepon</h6>
                        <h4>(ini nomor telepon)</h4>
                        <h6>No. KTP</h6>
                        <h4>(ini nomor KTP)</h4>
                        
                        
                    </div>
                </div>
            </div>	
        </div>
    </div>
</body>
</html>