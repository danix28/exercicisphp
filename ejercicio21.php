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
    $var=mt_rand(1,2);
    if($var==1){
      echo '<img src="img/imagen1.jfif">';
    }else{
      echo '<img src="img/imagen2.jfif">';
    } 
    
 ?>   
</body>
</html>