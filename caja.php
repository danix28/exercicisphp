<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $codigo="1234";
      $verform=true;
    if (isset($_GET["contador"])){  
        $contador=$_GET["contador"];    
        $num=$_GET["num"];
        if ($num==$codigo){
        echo "<p>ha acertado el codigo</p>";
        $contador=0;
        $verform=false;
    } else if ($contador<4){
        $intentos=4-$contador;
        "<p>ha fallado el codigo,le quedan $intentos intentos</p>";
        $contador=$contador+1;
    }else {
        echo "<p>ha agotado los 4 intentos para abrir la caja</p>";
        $verform=false;  
    }

    }else{
        $contador=0;
    }

    if ($verform=true){
    
   ?> 
   <form action="caja.php" method="get">
      <p>Escribe los 4 numeros del codigo de la caja fuerte:</p>
      <p><input type="number" name="num" minlenght="4" maxlenght="4"></p>
      <p><input type="hidden" name="contador" value="<?=$contador?>"></p>
      <p><input type="submit" value="enviar"></p> 
   </form>
   <?php }
    ?>
    
</body>
</html>