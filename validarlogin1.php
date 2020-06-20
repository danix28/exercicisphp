<?php
session_start();
$email='danix28@gmail.com';
$username='danix28';
$password='12345';

if ($_GET['email']==$email and $_GET['password']==$password){
    $_SESSION["username"]=$username;
    header('location:botiga.php');
}else{
    header('location:login1.php?m=1');
}
?>