<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    for($i=0;$i<count($productos);$i++){
        if (isset($productos[$i])){
            $total=$total+$productos[$i];
            
        }

    }
   
         
    if ($total<=100){
        echo "No sea usted tacaño, ¡gaste unas pocas monedas de oro más para obtener un descuento!<br>
        El precio le queda igual, serán $total";
    }else if ($total>100 and $total<=500){
        echo "Voy a hacerle un descuento del 10% por haber gastado hasta $total monedas!<br>
        El precio le queda en: "; 
        echo discount1($total); 
    }else{
        echo "Le llamaremos el Derrochador! Le aplicaré un 15% por haber gastado hasta $total monedas!<br>
        El precio le queda en: ";
        echo discount2($total); 
    }
?>
</body>
</html>