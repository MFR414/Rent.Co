<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rent.Co</title>
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">
    <link rel="icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">

    <style type="text/css">
    body{
        background-color: #eaebed;
    }

    footer{
        margin-top : 15px;
        background-color:black;
        color : white;
    }
    .kiri{
        margin-left:20%;
    }
    .kanan{
        margin-left : 70%;
    }
    
\*----------------------------*/
    .input-group{
        width:1000px;
    }
    .header-search {
    padding: 15px 0px;
    }

    .header-search form {
    position: relative;
    }

    .header-search form .input-select {
    margin-right: -4px;
    border-radius: 40px 0px 0px 40px;
    }

    .header-search form .input {
    width: calc(100% - 260px);
    margin-right: -4px;
    }

    .header-search form .search-btn {
    height: 40px;
    width: 100px;
    background: #D10024;
    color: #FFF;
    font-weight: 700;
    border: none;
    border-radius: 0px 40px 40px 0px;
    }
    .input{
        width:80%;
    }
    .card{
        margin-left : 50px;
        margin-right : 50px;
        margin-top : 30px;
        margin-bottom : 10px;
    }
   /* ----------------------end search------------------ */

    </style>

</head>
<body>
    <?php 
    /*session_start();
    if($_SESSION['user']==''){
        header("location:login_penyewa.php");
    }*/
    ?>
<!--awal navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #000000;"> <!--"navbar navbar-dark bg-primary"(warna bitu langit)   "navbar navbar-light" style="background-color: #e3f2fd;"(ganti warna lain)  "navbar navbar-dark bg-dark"(warna hitam)-->
        <a href="main-page.php">
            <img src="../gambar/logo-putih.png" width="130"height="45"><img>
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"></a>
                <span class="navbar-toggler-icon"></span>
            </button>
           <!-- <div class="search-bar">
                <div class="input-group mb-3">
                <form action="#">
                    <input type="text" class="form-control" style="width: 920px !important;" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                </form>     
                    <a class="btn btn-outline-dark" type="button" href="#">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </a>-->
                         
                    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="color:white; font-size:18;">
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

    <div class="carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" style="height:400px;">
                <div class="carousel-item active">
                    <img src="../gambar/awal/8.jpg" class="d-block w-100" width="1024" height="400" alt="#carouselExampleCaptions">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Pilihan Kamera Bervariasi</h5>
                    <p></p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../gambar/awal/2.jpg" class="d-block w-100" width="1024" height="100" alt="#carouselExampleCaptions">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Website Penyewaan Terpercaya</h5>
                    </div>
            </div>

            <div class="carousel-item">
                <img src="../gambar/awal/1.jpg" class="d-block w-100" width="1024" height="100" alt="#carouselExampleCaptions">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Abadikan Momenmu dengan Rent.Co</h5>
                    </div>
            </div>
        </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
  </div>
  <?php
    include "koneksi.php";
        $sql= "SELECT * FROM kamera ";
        $result = mysqli_query($mysqli,$sql);
        while($rows = mysqli_fetch_array($result))
        {
    
  ?>

<!-- carousel-->
    <div class= "container">
        <div class="row">
        <?php //$all_items = array_chunk($my_array,3); ?>
            <div class="card" style="width:200px;">
                <img class="card-img-top" src="../gambar/kamera/<?php echo $rows['gambar_kamera']?>.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $rows['merek_kamera']?> <?php echo $rows['seri_kamera']?></h4>
                        <form action="detail-kamera.php" method="GET">
                        <p><button type = "submit" class = "btn btn-dark" name="submit" value="<?php echo $rows['id_kamera']?>">Info</button></p>
                        </form>
                    </div>
            </div>
        </div>
    </div> 
    <?php
        }
    
    ?>

    <footer>
        <?php 
            include 'footer.php';
        ?>
    </footer> <!-- end footer -->

</body>
</html>