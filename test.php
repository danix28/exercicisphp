<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table,th,td {
        border: 1px solid black;
    }
    </style>
</head>
<body>
<table>
<?php
   $i=1;
   while($i<100){
     if ($i%2!=0){
        echo "<tr>";
     }
     echo "<td>";
     echo $i;
     echo "</td>";
     if ($i%2==0){
        echo "<tr>";
     }
      $i=$i+1;
     }
?>   
</table>
</body>
</html>
