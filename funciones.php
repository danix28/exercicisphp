<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   function doble($valor){
       return 2*$valor;
   }

   function negrita($texto){
       echo "<strong>$texto</strong>";
}
    function f1($x){
        $h=9
    }

    function potencia($x, $exponente=2){
        $valor=1;
        for ($i=1;$i<=$exponente;$i++){
            $valor=$valor*$x;
        }
        return $valor;
    }

    echo potencia(3,3);
    $x=7;
    f1($x);
    echo $x;
    echo $h; 
    $x=4;
    $z=doble($x);
    $y=doble(9);
    echo "$z y $y <br>";
    echo negrita("hola como estais?");
    ?>

</body>
</html>