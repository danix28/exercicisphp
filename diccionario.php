<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $ingles=$_GET["ing"];
      $palabra=array("house"=>"casa","hand"=>"mano","car"=>"coche","pen"=>"lapiz","ball"=>"bola");
      foreach ($ingles as $i=>$v){
          echo $i." es ".$v ."<br>";
      }


   ?>
</body>
</html>