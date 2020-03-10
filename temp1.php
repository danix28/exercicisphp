<?php
session_start();
$_SESSION["usuari"]="dani";
if (isset($_SESSION["visitas"])){
    $_SESSION["visitas"]++;
}else{
    $_SESSION["visitas"]=1;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="temp2.php">ves a la siguiente pagina</a>;
</body>
</html>