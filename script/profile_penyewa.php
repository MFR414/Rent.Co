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
    session_start();
    if($_SESSION['user']==''){
        header("location:login_penyewa.php");
    }
    include "koneksi.php";
?>
<body>
    <?php
    $id=$_SESSION["id_penyewa"];
    $sql= "SELECT * FROM penyewa WHERE id_penyewa='$id' ";
    $result = mysqli_query($mysqli,$sql);
    while($rows = mysqli_fetch_array($result))
        {
    ?>
    <div class="container portfolio">
        <div class="bio-info">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bio-image">
                                <img src="./gambarPenyewa/selfieKtp/<?php echo $rows['gamselfie_penyewa']?>" alt="image" />
                            </div>			
                        </div>
                    </div>	
                </div>
                <div class="col-md-6">
                    <div class="bio-content">
                        <h1>Hi, Saya <?php echo $rows['nama_penyewa']?></h1>
                        <h6>Email</h6>
                        <h4><?php echo $rows['email_penyewa'] ?></h4>
                        <h6>No. Telepon</h6>
                        <h4><?php echo $rows['notelp_penyewa']?></h4>
                        <p>Foto</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="./gambarPenyewa/ktp/<?php echo $rows['gamktp_penyewa']?>" alt="Card image cap">
                                </div>
                                <h6>foto KTP</h6>
                            </div>
                        </div>
                        <a href="main-page.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back</a>
                    </div>
                </div>
                <?php } ?>
            </div>	
        </div>
    </div>
</body>
</html>