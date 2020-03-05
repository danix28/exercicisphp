<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
          
        
        $temp=$_GET["temp"];
        foreach ($temp as $d=>$g){
              echo "$d";
                for($x=0;$x<$temp[$d];$x++){
                echo "<img src='img/bloque.jpg' witdh=10px height=10px>";
              }
              echo $g;
              echo "<br>";
}
    ?>
</body>
</html>