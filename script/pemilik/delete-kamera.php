<?php
    include "koneksi.php";
    session_start();
    if($_SESSION['user']==''){
        header("location:login_penyewa.php");
    }

    $sql="DELETE FROM kamera WHERE id_kamera = '$_GET[submit]'";
    $result = mysqli_query($mysqli,$sql);
    if(!$result){
        $message = "Delete Unsuccesfull";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }else{
        $message = "Delete Succesfull";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    header("Location:index.php");
?>