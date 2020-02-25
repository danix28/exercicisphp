<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     
    <?php
      $alt=$_GET["altura"];
      for ($i=0;$i<$alt;$i++){
        for ($i2=0;$i2<=$i;$i2++){
          echo "*";
        }
         echo "<br>";
      }
          
    ?>
    
</body>
</html>