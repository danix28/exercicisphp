<?php
session_start();
$_SESSION["usuari"]=$_GET["usuario"];
$_SESSION["contraseña"]=$_GET["password"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 if (isset($_SESSION["usuari"]){
     header("Location:HTTP://localhost/exercici71.php");
   }else{
      if (isset($_SESSION["usuari"]) && isset($_SESSION["contraseña"])){
        if ($_SESSION["usuari"]=="dani" & $_SESSION["contraseña"]=="dani"){
      echo "bienvenido";
    }
}
}     
 ?>

  
 
</body>
</html>