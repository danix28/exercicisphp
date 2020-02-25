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
    $var=mt_rand(1,7);
    if($var==1){
        echo 'Lunes hay clase de geografia';
    }else if($var==2){
        echo 'Martes hay clase de historia';
    }else if($var==3){
        echo 'Miercoles hay clase de ciencia';
    }else if($var==4){
        echo 'jueves hay clase de mates';
    }else if($var==5){
        echo 'viernes hay clase de religion';
    }else if($var==6){
        echo 'sabado no hay clase';
    }else if($var==7){
        echo 'Domingo no hay clase';
    }
?>
</body>
</html>