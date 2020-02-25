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
     $hora=mt_rand(0,23);
     echo $hora;
     if ($hora>=6 && $hora<=12){
         echo "buenos dias";
     }else if ($hora>=13 && $hora<=20){
         echo "buenas tardes";
     }else{
         echo "buenas noches";
     }
   ?> 
</body>
</html>