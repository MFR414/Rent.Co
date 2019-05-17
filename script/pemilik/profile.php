<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent.Co - Profil</title>
    <!--css-->
    <link href="css/profile.css" rel="stylesheet">

</head>
<?php
  session_start();
  if($_SESSION['user']==''){
    header("location:login_pemilik.php");
  }  
?>
<body>
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
                        <h1>Hi there, I'm Kshiti</h1>
                        <h6>I am a fresh web designer and I create custom web designs. I'm skilled at writing well-designed, testable and efficient code using current best practices in Web development. I'm a fast learner, hard worker and team player who is proficient in making creative and innovative web pages.</h6>
                        <p>P.S I have no special talent, I'm just passionately curious ;)</p>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</body>
</html>