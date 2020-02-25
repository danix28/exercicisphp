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
   $i=mt_rand(1,100);
   $d=0;
   
   while ($d<100){
       $d=$d+1;
   }
      $g=$d+$i;  
      echo "el numero $i mas 100 es $g";
       
   
   ?>   
</body>
</html>