<?php
session_start();


$email = "admin@gmail.com";
$password = 123456;


if(isset($_POST['email'])  &&  isset($_POST['password'])){
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    if($userEmail == $email && $userPassword == $password){
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
    }else{
        $_SESSION['error'] = "Email and Password not mached";
        header("Location: index.php");
    }


}else{
    header("Location: index.php");
}