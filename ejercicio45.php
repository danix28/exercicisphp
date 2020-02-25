<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <form action="caja.php" method="get">
      <p>Escribe los 4 numeros del codigo de la caja fuerte:</p>
      <p><input type="number" name="num" minlenght="4" maxlenght="4"></p>
      <p><input type="hidden" name="contador" value="<?=$contador?>"></p>
      <p><input type="submit" value="enviar"></p> 
    </form>
   
</body>
</html>