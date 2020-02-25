<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
</head>
<body>
<?php
 if (isset($_GET["usuario"]) and isset($_GET["password"])){
   if ($_GET["password"]=="123456"){
  echo "<p>Bienvenido <strong> ".$_GET["usuario"]."</strong></p>";
}else {
  echo '<p>Password incorrecto. <a href="formularios.php">siga buscando</a></p>';  
   }
  } else {
 
 ?> 
  <form action="formularios.php" method="get">
  <p>Usuario: <input type="text" name="usuario" maxlength="6"></p>
  <p>Contraseña: <input type="password" name="password" minlength="6"></p>
  <p>Correo: <input type="email" name="correo" size="40"></p>
  <p>tlf: <input type="tel" name="telefono" size="40"></p>
  <p><input type="range" name="rango"  min="1" max="10" step="3"></p>
  <p><input type="file" name="archivo"></p>
  <p><input type="hidden" name="nombre" value="pepito"></p>
  <fieldset>
  <p><textarea name="texto" rows="4" cols="20" placeholder="escribe algo"></textarea></p>
  <p>elije una opcion
  </fieldset>
  <select name="menu">
  <option value="1">Uno</option>
  <option value="2"selected>Dos</option>
  <option value="3">Tres</option>
  </select> 
  </p>
    <input type="submit" value="Enviar">
    <button type="button">
    <img src="imagenform.jfif" alt="cdlibre.org" width="64" height="64" style="vertical-align: middle"> 
      Este boton no hace nada  
    <input type="reset" value="Borrar">
  </p>
</form>
<?php 
}
?>
</body>
</html>