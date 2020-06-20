<?php
session_start();
if (isset($_SESSION["username"])){
    header('location:main.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estils.css">
    <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans|Trade+Winds&display=swap" rel="stylesheet">
    <title>Ultrafuture</title>
  </head>
  <body style="background-image: url(img/fondo.jpg)">
    <!-- menu superior -->
   <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="background-color:blue">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Iniciar sesion</a>

        </div>
    </div>
    </nav>-->
    <!-- /menu superior -->

    <div class="container">
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-image: url(img/imatgesup.jpg)">
    <div class="container">
        <h1 style="margin-left:250px">INFORMATICA ULTRAFUTURE</h1>
       <!-- <p class="lead"></p>-->
    </div>
    </div>
    <!-- /jumbotron --> 

    <!-- alertas -->
    <?php
    if (isset($_GET['m'])){
        if ($_GET['m']=='1'){
            ?>
            <div class="alert alert-danger" role="alert">
                <p style="color:red">Nom d´usuari o contrasenya incorrecta</p>
            </div> <?php
        } else if ($_GET['m']=='2'){
            ?>
            <div class="alert alert-success" role="alert">
               <p style="color:white">S´ha tancat la sessió</p>
            </div> 
            <?php
        }
    }?>
    <!--/alertas -->

    <!-- formulario login -->
    <form action="validarLogin1.php" method="get">
        <div class="form-group">
            <label for="exampleInputEmail1"><p>Adreça electrónica</p></label>
            <input style="width:240px" type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"><p>Contrasenya</p></label>
            <input style="width:240px" type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="buto" style="margin-left:0px">Enviar</button>
    </form>
    <!-- /formulario login -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>