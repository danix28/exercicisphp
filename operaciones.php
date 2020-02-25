<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function suma($num1,$num2){
        return $num1+$num2;
    }   
    function resta($num1,$num2){
        return $num1-$num2;
    }
    function multiplicacio($num1,$num2){
        return $num1*$num2;
    }
    function divisio($num1,$num2){
        return $num1/$num2; 
    }      

      $i=$_GET["num1"];
      $x=$_GET["num2"];
      $op=$_GET["operacion"];
      if ($op=="suma"){
        $res=suma($i,$x);
      }
      if ($op=="resta"){
        $res=resta($i,$x);
      }
      if ($op=="multiplicacion"){
        $res=multiplicacio($i,$x);
      }
      if ($op=="division"){
        $res=divisio($i,$x);
      }

      echo $res;
      
   
    ?>
</body>
</html>