<?php
//Inicio cokies y compruebo si ya está logado el usuario
session_start();
if (isset($_SESSION['user'])) {
    //si ya esta logado el user lo envio a su pagina principal
    header("Location:main.php"); 
    //sino continuo comprobando el formulario
}else{
    if (isset($_POST['usuario']) && isset($_POST['contrasena'])){
        if (($_POST['usuario'] == "paumiau") && ($_POST['contrasena'] == "paumiau")) {
            $_SESSION['user'] = "Pau Gonzalez";
            header("Location:main.php");
        } else {
            $_SESSION["error"]="hola";
            header("Location:login.php");
        }
    }

}?>