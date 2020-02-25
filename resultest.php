<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     $tot=0;
     $preg1=$_GET["preg1"];
     $preg2=$_GET["preg2"];
     $preg3=$_GET["preg3"];
     $preg4=$_GET["preg4"];
     $preg5=$_GET["preg5"];
     $preg6=$_GET["preg6"];
     $preg7=$_GET["preg7"];
     $preg8=$_GET["preg8"];
     $preg9=$_GET["preg9"];
     $preg10=$_GET["preg10"];
     if ($preg1=="verdadero"){
         $tot=$tot+3;
     }
     if ($preg2=="verdadero"){
        $tot=$tot+3;
     }
     if ($preg3=="verdadero"){
        $tot=$tot+3;
     }
     if ($preg4=="verdadero"){
        $tot=$tot+3;
     }
     if ($preg5=="verdadero"){
        $tot=$tot+3;
     }
     if ($preg6=="verdadero"){
        $tot=$tot+3;
     }
     if ($preg7=="verdadero"){
        $tot=$tot+3;
     }
     if ($preg8=="verdadero"){
        $tot=$tot+3;
     }
     if ($preg9=="verdadero"){
        $tot=$tot+3;
     }
     if ($preg10=="verdadero"){
        $tot=$tot+3;
     }
     echo "tu puntuacion es ".$tot;
     if ($tot>0 and $tot<=10){
        echo " ¡Enhorabuena! tu pareja parece ser totalmente fiel.";
        
     }elseif ($tot>=11 and $tot<=22){
        echo " Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
     }else {

      echo " Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.";
     
    }
   ?> 
</body>
</html>