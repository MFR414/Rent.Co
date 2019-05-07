<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Rent.Co</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="css/reg.css">
  <script  src="js/reg.js"></script>
  <link rel="shortcut icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">
  <link rel="icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">

  
</head>

<body>

    <div class="container">
    <div class="wrapper">
      <div class="pinggir">
          <ul class="steps">
            <li class="is-active">Tipe Akun</li>
            <li>Data Pribadi</li>
            <li>Alamat</li>
            <li>Buat Akun</li>
          </ul>
          <form class="form-wrapper">

              <fieldset class="section is-active">
                <h3>Tipe Akun</h3>
                <div class="row cf">

                  <div class="six col">
                    <input type="radio" name="r1" id="r1" checked>
                    <label for="r1">
                      <h4>Penyewa</h4>
                    </label>
                  </div>

                  <div class="six col">
                    <input type="radio" name="r1" id="r2"><label for="r2">
                      <h4>Peminjam</h4>
                    </label>
                  </div>

                </div>
                <div class="button" >Next</div>
              </fieldset>

            <fieldset class="section">
                <h3>Data Pribadi</h3>
                <input name="namadep" placeholder="Nama Depan" type="text"/>
                <input name="namabel" placeholder="Nama Belakang" type="text"/>
                <input name="lahir" placeholder="Tempat Lahir" type="text" />
                <input name="tanggal" placeholder="Tanggal lahir" type="text" />
                <input name="telp1" placeholder="Nomor Telepon 1" type="text"/>
                <input name="telp2" placeholder="Nomor telepon 2" type="text"/>
                <input name="ktp" placeholder="NO.KTP" type="text" />
                <input name="email" placeholder="Email" type="text" />
                <div class="button" >Next</div>
            </fieldset>

            <fieldset class="section">
              <h3>Alamat</h3>
              <input name="alamat" placeholder="Alamat" type="text"/>
              <input name="kota" placeholder="Kota/Kab" type="text"/>
              <input name="kec" placeholder="Kecamatan" type="text"/>
              <input name="desa" placeholder="Desa" type="text"/>
              <input name="pos" placeholder="Kode Pos" type="text" />
              <div class="button">Next</div>
            </fieldset>

            <fieldset class="section">
              <h3>Buat Akun</h3>
              <input type="text" name="username" placeholder="Username" />
              <input type="password" name="pass" placeholder="Password" />
              <input type="password" name="cpass" placeholder="Confirm Password" />
              <label for="avatar">Masukkan foto profil anda :</label><br>
              <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"><br><br>
              <label for="avatar">Masukkan foto KTP anda :</label><br>
              <input type="file" id="fotoKTP" name="fotoKTP" accept="image/png, image/jpeg">
              <input class="submit button" type="submit" value="Next">
              <?php include 'koneksi.php' ?>
            </fieldset>

            <fieldset class="section">
              <h3>Registrasi Selesai!</h3>
              <p>Akun anda telah dibuat.</p>
              <div class="button">Home</div>
            </fieldset>
          </form>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
</body>
</html>
<script>
$(document).ready(function(){
  $(".form-wrapper .button").click(function(){
    var button = $(this);
    var currentSection = button.parents(".section");
    var currentSectionIndex = currentSection.index();
    var headerSection = $('.steps li').eq(currentSectionIndex);
    currentSection.removeClass("is-active").next().addClass("is-active");
    headerSection.removeClass("is-active").next().addClass("is-active");

    $(".form-wrapper").submit(function(e) {
      e.preventDefault();
    });

    if(currentSectionIndex === 4){
      window.location.href="main-page.php"
     // $(document).find("main-page.php");
      
     // $(document).find(".form-wrapper .section").first().addClass("is-active");
      //$(document).find(".steps li").first().addClass("is-active");
   }
  });
});
</script>

