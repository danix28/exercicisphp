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
    switch($var){
    case 1:
        $vardia="lunes geografia";
    break;   
    case 2:
        $vardia="martes ciencia";
    break;
    case 3:
        $vardia="miercoles mates";
    break;
    case 4:
        $vardia="jueves historia";
    break;
    case 5:
        $vardia="viernes religion";
    break;
    case 6:
        $vardia="sabado festivo";
    break;
    case 7:
        $vardia="domingo festivo";
    break;
}
echo $vardia;   
  ?>
</body>
</html>