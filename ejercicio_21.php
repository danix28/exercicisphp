<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="operaciones.php" method="get">
     <p><input type="number" name="num1"></p>
     <p><input type="number" name="num2"></p>
     <select name="operacion">
        <option name="operacion" value="suma">suma</option>
        <option name="operacion" value="resta">resta</option>
        <option name="operacion" value="multiplicacion">multiplicacion</option>
        <option name="operacion" value="division">division</option>
     </select>
      <p><input type="submit" value="enviar"></p>
     </form>
</body>
</html>