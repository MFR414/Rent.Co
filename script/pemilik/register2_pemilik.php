<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent.Co - Login</title>
    <link href="css/login-all.css" rel="stylesheet">
    <link rel="shortcut icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">
    <link rel="icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body aria-busy="true">
  <?php
    include "koneksi.php";
    session_start();
    $name=$_SESSION['nama'];

    if(isset($_POST['simpan'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $konfirmasipass = $_POST['konfirmasipass'];
      echo $name;
      echo $username;
      echo $password;
      if($password != $_POST['konfirmasipass']){
        $message = "Wrong Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }else{
        $sql = "UPDATE pemilik_kamera SET username='$username',password='$password' WHERE nama_pemilik='$name'";
        $result = mysqli_query($mysqli,$sql);
        if($result){
          echo "Data Berhasil Dimasukkan";
          session_unset();
          session_destroy();
          header("location:login_pemilik.php");
        }
      }
    }
  ?>
  <!-- Main navigation -->
  <header>  
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('./gambarPemilik/tampilan/10-edit.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
          <!--Grid row-->
          <div class="row mt-5">
            <!--Grid column-->
            <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
              <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s; color:white;">Masuk sekarang! </h1>
              <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s; background-color:white;">
              <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s; color:white;">Dan temukan kamera pilihan anda dengan merk yang bervariasi.</h6>
              <a class="tulisan" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInLeft; animation-delay: 0.3s; color:white;">Belum punya akun? <a href="#" style="color:white;">Klik disini!</a></a><br><br>
              <a button class="btn btn-outline-light" href="../index.php" style="color:white">Kembali</a>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-6 col-xl-5 mb-4">
              <!--Form-->
              <div class="card wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInRight; animation-delay: 0.3s; background-color:rgba(255,255,255,0.1);">
                <div class="card-body">
                  <!--Header-->
                  <div class="text-center" style="color:white;">
                    <h3 class="white-text">Buat Akun Anda</h3>
                    <hr class="hr-light" style="background-color:white;">
                  </div>
                  <!--Body-->
                  <form method="POST">
                  <div class="md-form">
                    <label for="form3" class="" style="color:white;" >Username</label>
                    <i class="fas fa-user prefix white-text active"></i>
                    <input type="text" name="username" id="form3" class="white-text form-control" style=" color:white; background-color:rgba(255,255,255,0);">
                  </div><br>
                  <div class="md-form">
                    <label for="form4" style="color:white;">Password</label>
                    <input type="password" name="password" id="form4" class="white-text form-control" style=" color:white; background-color:rgba(255,255,255,0);">
                  </div><br>
                  <div class="md-form">
                    <label for="form5" style="color:white;">Konfirmasi password</label>
                    <input type="password" name="konfirmasipass" id="form5" class="white-text form-control" style=" color:white; background-color:rgba(255,255,255,0);">
                  </div><br>
                  <div class="text-center mt-4">
                    <button class="btn btn-dark waves-effect waves-light" name="simpan" type="submit">Register</button>
                  </div>
                  </form>
                </div>
              </div>
              <!--/.Form-->
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Content -->
      </div>
      <!-- Mask & flexbox options-->
    </div>
    <!-- Full Page Intro -->
  </header>
  <!-- Main navigation -->
  <!--Main Layout-->
</body>
</html>