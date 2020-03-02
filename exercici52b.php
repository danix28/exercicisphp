<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estils.css">
</head>
<body>
    <?php
    function discount1($a,$b=0.10){
        return $a=($a*$b);
    }

    function discount2($a,$b=0.15){
        return $a=($a*$b);
    
    }
    
    $total=0;
    $productos=$_GET["item"];
    foreach ($productos as $indice=>$valor){
           echo "<p style= 'color: white;'>has comprado $indice, que vale $valor <br>";
           $total=$total+$valor;
        }
        echo "<p style= 'color: white;'>en total te has gastado $total <br>";
        
   
         
    if ($total<=100){
        echo "<p style= 'color: white;'>Su compra es demasiado pequeña , no obtiene ningun descuento<br>
        El precio le queda igual, serán $total";
    }else if ($total>100 and $total<=500){
        echo "<p style= 'color: white;'>Su descuento es del 10% por haber gastado hasta $total euros<br>
        El precio le queda en: "; 
        echo $total-discount1($total); 
    }else{
        echo "<p style= 'color: white;'>Obtiene un 15% de descuento por haber gastado hasta $total euros<br>
        El precio le queda en: ";
        echo $total-discount2($total); 
    }
?>
</body>
</html>