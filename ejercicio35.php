<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
<tr>
<?php   
   $i=mt_rand(1,10);
   $g=1;
   $result=$i*$g; 
   while ($g<10){
       echo "<td>";
       echo "$i*$g = $result";
       echo "</td>";
       $g=2;
       $result=$i*$g;
       echo "<td>";
       echo "$i*$g = $result";
       echo "</td>";
       $g=3;
       $result=$i*$g;
       echo "<td>";
       echo "$i*$g = $result";
       echo "</td>";
       $g=4;
       $result=$i*$g;
       echo "<td>";
       echo "$i*$g = $result";
       echo "</td>";
       $g=5;
       $result=$i*$g;
       echo "<td>";
       echo "$i*$g = $result";
       echo "</td>";
       echo "</tr>";
       $g=6;
       $result=$i*$g;
       echo "<td>";
       echo "$i*$g = $result"; 
       echo "</td>";
       $g=7;
       $result=$i*$g;
       echo "<td>";
       echo "$i*$g = $result";
       echo "</td>";
       $g=8;
       $result=$i*$g;
       echo "<td>";
       echo "$i*$g = $result";
       echo "</td>";
       $g=9;
       $result=$i*$g;
       echo "<td>";
       echo "$i*$g = $result";
       echo "</td>";
       $g=10;
       $result=$i*$g;
       echo "<td>";
       echo "$i*$g = $result";
       echo "</td>";
    }
    
     echo "la tabla del $i";
 
 ?> 
 </table>  
</body>
</html>