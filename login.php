<?php
//Inicio cokies y compruebo si ya está logado el usuario
session_start();
if (isset($_SESSION['user'])) {
    //si ya esta logado el user lo envio a su pagina principal
    header("Location:main.php"); 
    //sino continuo con la web
}else{
//comenzamos la pagina  
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
    if (isset($_SESSION["error"])){
      echo '<span style="color: red">Contraseña incorrecta. Inténtelo de nuevo.</span><br><br>';
      unset($_SESSION["error"]);
    }
    ?>
    <form action="compruebaformulario.php" method="post">
      <input type="hidden" name="ejercicio" value="04">
      Usuario: <input type="text" name="usuario" autofocus><br>
      Contraseña: <input type="password" name="contrasena"><br><br>
      <input type="submit" value="Iniciar sesión">
    </form>
    </body>
    </html>
<?php
}
?>
