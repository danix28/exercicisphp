<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estils.css">
    <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans|Trade+Winds&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
</head>
<body style="margin-top:50px">
 
 <div>
 <!-- menu superior -->
 <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="background-color:blue">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="botiga.php"><p>Inici </p><span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="logout1.php"><p>Tancar sessió</p></a>

        </div>
    </div>
    </nav>-->
 <a href="botiga.php"><p style="width:80px">Productes</p></a>
 <a href="logout1.php"><p style="width:200px">Tancar sessió</p></a>


<!--taula cistella-->
<h1>La seva compra</h1>
<div class="container" style="margin-top:20px;margin-left:500px">
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped">
          <thead>
            <tr>
            <th> </th>
            <th><p style="padding:7px;font-size:50px">Producte</p></th>
            <th><p style="margin-left:20px;padding:7px;font-size:50px">Preu</p></th>
            <th><p style="margin-left:20px;padding:7px;font-size:50px">Quantitat</p></th>
            <th><p style="margin-left:20px;padding:7px;font-size:50px">Total</p></th>
            
            </tr>
          </thead>
     <tbody>
   <?php
    
    /*calcul factura*/
    $total = 0;
    $productos = $_GET["item"];
    $preus = $_GET["preu"];
    foreach ($productos as $indice=>$valor){
        if($valor!=0){
            $total_producte = $preus[$indice]*$valor;
            $total += $total_producte;
      ?>
       
        
         
         
         <tr>
                <th> </th>
                <td class="cist"><?=$indice?></td>
                <td class="cist" style="text-align:center"><?=$preus[$indice]?></td>
                <td class="cist" style="text-align:center"><?=$valor?></td>
                <td class="cist" style="text-align:center"><?=$total_producte?></td>
            </tr>
   <?php 
    }
  } 
    ?> 
    <tr>
                <th> </th>
                <td></td>
                <td >  </td>
                <td> </td>
                <td class="taula"><?= $total ?>€ </td>
            </tr>
    <?php             
           
  

?>
</body>
</html>