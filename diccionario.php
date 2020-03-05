<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $español=$_GET["esp"]; 
      $paraula=array("coche"=>"car","casa"=>"house","mano"=>"hand","paraguas"=>"umbrella","perro"=>"dog","gato"=>"cat","patada"=>"kick","puño"=>"fist","hola"=>"hello","adios"=>"bye",
      "dulce"=>"sweet","sal"=>"salt","azucar"=>"sugar","pimienta"=>"peeper","camion"=>"truck","plato"=>"dish","tenedor"=>"fork","cuchillo"=>"knife","raton"=>"mouse","sol"=>"sun");
      
      if (isset($paraula["$español"])!=($español)){
        echo "esta palabra no esta en el diccionario";
      }else {
      echo $español." en ingles es ".$paraula["$español"];
     
    }
      
       
   ?>
</body>
</html>