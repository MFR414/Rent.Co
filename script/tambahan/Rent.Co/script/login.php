<?php
if(isset($_GET["pesan"])){
  $pesan= $_GET["pesan"];
}
  if(isset($_POST["submit"])){
    $username= htmlentities(strip_tags(trim($_POST["username"])));
    $password= htmlentities(strip_tags(trim($_POST["password"])));
    $pesan_error="";
    if(empty($username)){
        $pesan_error .="Username belum terisi <br>";
    }
    if(empty($password)){
        $pesan_error .="Password belum terisi <br>";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rent.Co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css">
    <link rel="shortcut icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">
    <link rel="icon" href="../gambar/icon-fix/rentco.png" type="image/x-icon">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script>js/jquery.validate.js</script>
</head>
<body>
    
<div class="container">
    <div class="wrapper">
          <ul class="steps">
            <li class="is-active">Login</li>
          </ul>
          <?php
            if(isset($pesan)){
                echo "<div class=\"pesan\">$pesan</div>";
            }
            if($pesan_error !== ""){
                echo "<div class=\"error\">$pesan_error</div>";
            }
            ?>
          <form class="form-wrapper" action= "login.php" method="post">
            <fieldset class="section is-active">
                <h3>Login</h3>
                <div class="row cf">
                    <input type="text" id="username" name="username"
                    value="<?php echo $username ?>"/>
                    <input type="password" id="password" name="password" value="<?php echo $username ?>"/>
                    <input class="button" type="submit" name="submit" href="main-page.php"></div>
                </div>
              </fieldset>
        </form>
    </div>
</div>

</body> 
</html>
<!--<script>
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

    //if(currentSectionIndex === 4){
     // window.location.href="main-page.php"
     // $(document).find("main-page.php");
      
     // $(document).find(".form-wrapper .section").first().addClass("is-active");
      //$(document).find(".steps li").first().addClass("is-active");
   //}
  });
});
</script>