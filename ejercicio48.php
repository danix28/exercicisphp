<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
 <style>
  
  div{
       position:fixed;
       width:50px;
       height:50px;
   }
   
 </style>
<body>
   <?php
     
     for ($i;$i<=2000;$i++){

      $colorR=mt_rand(0,255);
      $colorG=mt_rand(0,255);
      $colorB=mt_rand(0,255);
      $x=mt_rand(0,100);
      $y=mt_rand(0,100);
      ?>
      
    
    <?php
     echo "<div style='left:$x%;top:$y%;background-color:rgb($colorR,$colorG,$colorB)'></div>"
     ?>    
   <?php  
   }
    
   ?>
</body>
</html>