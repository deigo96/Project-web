<?php

    ob_start();
    session_start();
    ob_end_clean();

    $username=$_POST["username"];
    $password=$_POST["password"];

    if($username=="admin" AND $password=="admin"){
        $_SESSION["username"]=$username;
        header("location:home.php");
    }
    elseif($username=="deigo" AND $password=="ubsi"){
        $_SESSION["username"]=$username;
        header("location:home.php");
    }
    elseif($username=="ell" AND $password=="ubsi"){
        $_SESSION["username"]=$username;
        header("location:home.php");
    }
    else{
        header("location:login.php?login_error");
    }
?>
