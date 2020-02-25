<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $irpf=$_GET["base"]*0.15;
      $iva=$_GET["base"]*0.21;
      $total=$_GET["base"]-$irpf+$iva;
      echo "el total es " .$total;
    ?>
</body>
</html>