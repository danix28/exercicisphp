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
      $num=2;
      while($i>$num){
          if ($i%$num==0 && $i%1==0){
             echo "el numero $i es primo ";
          }else{
             echo "el numero $i no es primo ";
          }
        
        $num=$num+1;
      }
      
    ?>
</body>
</html>