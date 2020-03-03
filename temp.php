<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
          
        $total=0;
        $temp=$_GET["temp"];
        $mes=array("Enero"=>"temp[Enero]","Febrero"=>"temp[Febrero]","Marzo"=>"temp[Marzo]","Abril"=>"temp[Abril]","Mayo"=>"temp[Mayo",
                   "Junio"=>"temp[Junio]","Julio"=>"temp[Julio]","Agosto"=>"temp[Agosto]","Septiembre"=>"temp[Septiembre]","Octubre"=>"temp[Octubre]",
                   "Noviembre"=>"temp[Noviembre]","Diciembre"=>"temp[Diciembre]");
        foreach ($mes as $d=>$g) {
            echo $d;
        }
        
        for($i=0;$i<count($temp);$i++){
            
              echo "<br>";
                for($x=0;$x<$temp[$i];$x++){
                   
                echo "<img src='img/bloque.jpg' witdh=10px height=10px>";
        
              }
}
    ?>
</body>
</html>