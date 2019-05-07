
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
   /* ----------------------end search------------------ */

    </style>

</head>
<body>

    <nav class="navbar navbar-light" style="background-color: black;">
    <div class="collapse navbar-collapse" id="navbarAtas">
        <a class="navbar-brand" href="index.php">
            <img src="../gambar/logo-3-negatif.png" width="170" height="50" class="d-inline-block align-top" alt="">
        </a>
        <div class="navbar-nav">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Canon</a>
                        <a class="dropdown-item" href="#">Sony</a>
                        <a class="dropdown-item" href="#">Fujifilm</a>
                        <a class="dropdown-item" href="#">Samsung</a>
                        <a class="dropdown-item" href="#">Nikon</a>
                    </div>
            </div>
            <!-- SEARCH BAR -->
			<div class="col-md-6">                
                <div class="header-search">
					<form>
						<select class="input-select">
							<option value="0">All Categories</option>
							<option value="1">Category 01</option>
							<option value="1">Category 02</option>
                        </select>
                        <div class="col-sm-3 col-md-3 pull-right">
     
                <div class="input-group">
                    <input type="text" class="input" placeholder="Search here" width="200" height="50">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
\       
								
								
					</form>
				</div>
			</div>
			<!-- /SEARCH BAR -->
        </div>
    </div>

            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hello User!
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profil</a>
                    <a class="dropdown-item" href="#">Logout</a>
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

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../gambar/awal/8.jpg" class="d-block w-100" width="1024" height="450" alt="#carouselExampleCaptions">
                    <div class="carousel-caption d-none d-md-block">
                    <h5>Pilihan Kamera Bervariasi</h5>
                    <p></p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../gambar/awal/2.jpg" class="d-block w-100" width="1024" height="450" alt="#carouselExampleCaptions">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Website Penyewaan Terpercaya</h5>
                    </div>
            </div>

            <div class="carousel-item">
                <img src="../gambar/awal/1.jpg" class="d-block w-100" width="1024" height="450" alt="#carouselExampleCaptions">
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
            <div class="card" style="width:200px">
                <img class="card-img-top" src="../gambar/kamera/<?php echo $rows['Gam_kam']?>.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $rows['merk_kam']?> <?php echo $rows['nama_kam']?></h4>
                        <p class="card-text"><?php echo $rows['thn_kam']?></p>
                        <input type="hidden" name="idKam" value="<?php echo $rows['id_kam']?>">
                        <form action="detail-kamera.php" method="GET">
                        <p><button type = "submit" class = "btn btn-dark" name="submit" value="<?php echo $rows['id_kam']?>">Info</button></p>
                        </form>
                    </div>
            </div>
        </div>
    </div> 
<?php
    }
?>
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" width="150" height="70" href="#0"><img src="../gambar/logo-3-negatif.png" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-twitter" aria-hidden="true"></i>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Rent.Co 2019</span> 
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->

</body>
</html>