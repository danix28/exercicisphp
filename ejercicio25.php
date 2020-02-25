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
     $nota1=mt_rand(0,10);
     $nota2=mt_rand(0,10);
     $nota3=mt_rand(0,10);
     $notamedia=round(($nota1+$nota2+$nota3)/3,2);
     echo $notamedia;
     if ($notamedia<5){
        echo "insuficiente";
    }else if ($notamedia>=5 && $notamedia<6){
        echo "suficiente";
    }else if ($notamedia>=6 && $notamedia<7){
        echo "bien";
    }else if ($notamedia>=7 && $notamedia<9){
        echo "notable";
    }else if ($notamedia>=9 && $notamedia=10){
        echo "sobresaliente";
    }
   ?> 
</body>
</html>