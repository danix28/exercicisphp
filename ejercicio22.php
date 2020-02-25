<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     
    
</head>
<body>
  
 <?php
   $rojo=mt_rand(0,255);
   $verde=mt_rand(0,255);
   $azul=mt_rand(0,255);
   
    
?>
<style>body{background-color: rgb(<?=$rojo?>,<?=$verde?>,<?=$azul?>);}</style>   
    </body>
</html>