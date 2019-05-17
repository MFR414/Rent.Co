<?php
    session_start();

    $_SESSION["user"]='';
    $_SESSION["id_user"]='';
    unset($_SESSION["user"]);
    unset($_SESSION["id_user"]);
    session_unset();
    session_destroy();
    header("location:login_pemilik.php");
?>