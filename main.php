<?php
//Inicio cokies y compruebo si no está logado el usuario
session_start();
if (!isset($_SESSION['user'])) {
    //si NO esta logado el user lo envio a la pagina de login
    header("Location:login.php"); 
    //sino esta logado continuo con la web
}else{
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>Welcome Sr <?=$_SESSION['user']?> Encantado de volverle a ver</p>
        <p><a href='logout.php'>Logout</a></p>
    </body>
    </html>
<?php
}
?>
