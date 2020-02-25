<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $i=0;
    $condicion=false;
    do{
        $i=mt_rand(0,100);
        echo $i."<br>";
         if ($i==99){
             $condicion=true;
         }            
        }while ($condicion==false)
     
     ?>
</body>
</html> 