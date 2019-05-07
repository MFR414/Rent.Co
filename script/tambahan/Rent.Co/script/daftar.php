<html>
<head>
<script type="text/javascript" src="js/daftar_jquery.js">
<script type="text/javascript" src="js/daftar_multi_form.js">
<link rel="stylesheet" type="text/css" href="css/daftar.css">
</head>
<body>
<div id="wrapper">
  <br>
  <span class='baricon'>1</span>
  <span id="bar1" class='progress_bar'></span>
  <span class='baricon'>2</span>
  <span id="bar2" class='progress_bar'></span>
  <span class='baricon'>3</span>

  <form method="post" action="">
  <div id="account_details">
    <p class='form_head'>Account Details</p>
    <p>Email Address</p>
    <input type="text" placeholder='Email Address'>
    <p>Password</p>
    <input type="text" placeholder='Password'>
    <br>
    <input type="button" value="Next" onclick="show_next('account_details','user_details','bar1');">
  </div>

  <div id="user_details">
    <p class='form_head'>User Details</p>
    <p>First Name</p>
    <input type="text" placeholder='First Name'>
    <p>Last Name</p>
    <input type="text" placeholder='Last Name'>
    <p>Gender</p>
    <input type="text" placeholder='Gender'>
    <br>
    <input type="button" value="Previous" onclick="show_prev('account_details','bar1');">
    <input type="button" value="Next" onclick="show_next('user_details','qualification','bar2');">
  </div>
		
  <div id="qualification">
    <p class='form_head'>Qualification</p>
    <p>Qualification</p>
    <input type="text" placeholder='Qualification'>
    <p>Hobbies</p>
    <input type="text" placeholder='Hobbies'>
    <br>
    <input type="button" value="Previous" onclick="show_prev('user_details','bar2');">
    <input type="Submit" value="Submit">
  </div>
  </form>
  
</div>