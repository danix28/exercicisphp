<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   function desc1($valor){
      return $valor*0.10;
   }
   function desc2($valor){
      return $valor*0.15;
   } 
        $i=$_GET["num1"];
    if ($i>=100 and $i<=499.99) {
        $res=desc1($i);
        $tot=$i-$res;
        echo "el descuento es de ".$res;
        echo " ,el total a pagar es ".$tot;
    
    }

    if ($i>500) {
       $res=desc2($i);
       $tot=$i-$res;
       echo "el descuento es de ".$res;
       echo " ,el total a pagar es ".$tot;
   
    }
    if ($i<100) {
       echo "el total a pagar es ".$i;
        
    }
    
   ?>
</body>
</html>