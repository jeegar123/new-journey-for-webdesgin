<?php 
    session_start();
    $username =$_GET['username'];
    $password =$_GET['password'];
    

    $is_remember =isset( $_GET['rememberme']);

    if($username =="test@gmail.com" && $password == "test"){
       if($is_remember) {
        setcookie("username",$username,time()+(86400 * 30),"/");
       }
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header('Location:index.php');

    }else{
        header('Location:error.html');
    }

    





?>