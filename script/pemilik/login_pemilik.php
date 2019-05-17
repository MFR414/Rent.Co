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
  <!-- Main navigation -->
  <header>  
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('./gambar/tampilan/10-edit.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
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
              <a button class="btn btn-outline-light" href="../../index.php" style="color:white">Kembali</a>
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-6 col-xl-5 mb-4">
              <!--Form-->
              <div class="card wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-name: fadeInRight; animation-delay: 0.3s; background-color:rgba(255,255,255,0.1);">
                <div class="card-body" action= "/backend/validasi-login.php" method="post"> 
                  <!--Header-->
                  <div class="text-center" style="color:white;">
                    <h3 class="white-text">Login</h3>
                    <hr class="hr-light" style="background-color:white;">
                  </div>
                  <?php
                    include "koneksi.php";
                    session_start();
                    if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){
                      $user=$_POST['username'];
                      $pass=$_POST['password'];
                      $sql = "SELECT * FROM pemilik_kamera WHERE username='$user' AND password='$pass' ";
                      $result = mysqli_query($mysqli,$sql);
                      $check=mysqli_num_rows($result);
                      if($check>0){
                        $row=mysqli_fetch_array($result);
                        $_SESSION["user"] = $row['username'];
                        $_SESSION["id_user"] = $row['id_pemilik'];
                        header("location:index.php");
                      }else{
                        header("location:login_pemilik.php");
                      }
                    }
                  ?>
                  <!--Body-->
                  <form method="POST">
                  <div class="md-form">
                    <label for="form3" class="" style="color:white;" >Username</label>
                    <i class="fas fa-user prefix white-text active"></i>
                    <input type="text" id="form3" class="white-text form-control" name="username" style=" color:white; background-color:rgba(255,255,255,0);">
                  </div><br>
                  <div class="md-form">
                    <label for="form4" style="color:white;">Password</label>
                    <input type="text" id="form4" class="white-text form-control" name="password" style=" color:white; background-color:rgba(255,255,255,0);">
                  </div><br>
                  <!--<p style="color:white;">Masuk sebagai :</p>
                  <div class="sel sel--black-panther">
                        <select name="select-profession" id="select-profession" style=" background-color:rgba(255,255,255,0.1); color:white;" >
                            <option value="" disabled style="color:black;">--Pilih--</option>
                            <option value="pemilik" style="color:black;">Pemilik kamera</option>
                            <option value="penyewa" style="color:black;">Penyewa kamera</option>
                            <option value="admin" style="color:black;">Admin</option>
                        </select>
                    </div>-->
                  <div class="text-center mt-4">
                    <button class="btn btn-dark waves-effect waves-light" style="color:white;" name="submit">Login</button>
                  </div>
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