<?php//
session_start();
if (!isset($_SESSION["username"])){
    header('location:login1.php'); 
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estils.css">
    <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Odibee+Sans|Trade+Winds&display=swap" rel="stylesheet">
</head>
<body>
    <a href="logout1.php"><p style="width:200px">Tancar sessió</p></a>
    <h1>INFORMATICA ULTRAFUTURE</h1>
     <!--formulari d´entrada-->
    <form action="cistella.php" method="get">
    <div class="caixa">   
     <p style="width: 200px">Faci la seva comanda</p>
    <table>
    <tr>
     <td><p style="width:165px">Teclat 50 €</p>
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Teclat]" value="0" min="0" max="10" class="mx-auto d-block"></td>
     <input type="hidden" name="preu[Teclat]" value="50" >
     <td><img src="img/teclado.jpg" width= 80px height= 80px alt=""></td></br>  
     <td><p style="width:165px">Ratoli 70 €</p>
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Ratoli]" value="0" min="0" max="10" class="mx-auto d-block">
     <input type="hidden" name="preu[Ratoli]" value="70"> 
     <td><img src="img/raton.jpg" width= 80px height= 80px alt=""></td>  
     <td><p style="width:165px">Alfombrilla 15 €</p>
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Alfombreta]" value="0" min="0" max="10" class="mx-auto d-block">
     <input type="hidden" name="preu[Alfombreta]" value="15"> 
     <td><img src="img/alfombrilla.jpg" width= 80px height= 80px alt=""></td>  
     <td><p style="width:165px">Pendrive 16 € </p>
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Pendrive]"  value="0" min="0" max="10" class="mx-auto d-block">
     <input type="hidden" name="preu[Pendrive]" value="16"> 
     <td><img src="img/pendrive.jpg" width= 80px height= 80px alt=""></td>  
     <td><p style="width:165px">Disc dur 60 €</p>
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Disc dur]" value="0" min="0" max="10" class="mx-auto d-block">
     <input type="hidden" name="preu[Disc dur]" value="60"> 
     <td><img src="img/discoduro.jpg" width= 80px height= 80px alt=""></td>
     
    </tr>

    <tr>
     <td><p style="width:165px">Cable hdmi 5 €</p>
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Cablehdmi]" value="0" min="0" max="10" class="mx-auto d-block">
     <input type="hidden" name="preu[Cablehdmi]" value="5"> 
     <td><img src="img/cablehdmi.jpg" width= 80px height= 80px alt=""></td>   
     <td><p style="width:165px">Monitor 170 €</p> 
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Monitor]"  value="0" min="0" max="10" class="mx-auto d-block">
     <input type="hidden" name="preu[Monitor]" value="5"> 
     <td><img src="img/monitor.jpg" width= 80px height= 80px alt=""></td>   
     <td><p style="width:165px">Mando 55 €</p>
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Mando]"  value="0" min="0" max="10" class="mx-auto d-block">
     <input type="hidden" name="preu[Mando]" value="55"> 
     <td><img src="img/mando.jpg" width= 80px height= 80px alt=""></td> 
     <td><p style="width:165px">Cable usb 4 €</p>
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Cable usb]"  value="0" min="0" max="10" class="mx-auto d-block">
     <input type="hidden" name="preu[Cable usb]" value="4">
     <td><img src="img/cableusb.jpg" width= 80px height= 80px alt=""></td> 
     <td><p style="width:165px">CPU  70 €</p>
     <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[CPU]" max="10" value="0" min="0" max="10" class="mx-auto d-block">
     <input type="hidden" name="preu[CPU]" value="70">  
     <td><img src="img/cpu.jpg" width= 80px height= 80px alt=""></td>
        
    </tr> 
    
    <tr>
      <td><p style="width:165px">Tarjeta grafica 230 €</p>
      <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Tarjeta grafica]"  value="0" min="0" max="10" class="mx-auto d-block">
      <input type="hidden" name="preu[Tarjeta grafica]" value="230">  
      <td><img src="img/tarjeta.jpg" width= 80px height= 80px alt=""></td>
      <td><p style="width:165px">Placa base 75 €</p>
      <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Placa base]" value="0" min="0" max="10" class="mx-auto d-block">
      <input type="hidden" name="preu[Placa base]" value="75"> 
      <td><img src="img/placa.jpg" width= 80px height= 80px alt=""></td>
      <td><p style="width:165px">Stick memoria 8 GB 16 €</p>
      <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Stick memoria]" value="0" min="0" max="10" class="mx-auto d-block">
      <input type="hidden" name="preu[Stick memoria]" value="16">   
      <td><img src="img/stick.jpg" width= 80px height= 80px alt=""></td>
      <td><p style="width:165px">Dongle bluetooth 10 €</p>
      <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Dongle bluetooth]"  value="0" min="0" max="10" class="mx-auto d-block">
      <input type="hidden" name="preu[Dongle bluetooth]" value="10">
      <td><img src="img/dongle.jpg" width= 80px height= 80px alt=""></td>
      <td><p style="width:165px">Tarjeta Wifi 32 €</p>
      <p class="quantitat">Quantitat:</p><input style="margin-left:65px" type="number" name="item[Tarjeta Wifi]"  value="0" min="0" max="10" class="mx-auto d-block">
      <input type="hidden" name="preu[Tarjeta Wifi]" value="32">
      <td><img src="img/wifi.jpg" width= 80px height= 80px alt=""></td>
      
    </tr>
   
    </table>
    </div>
    <input class="buto" type="submit" name="Comprar" value="Comprar">
    </form>
  
</body>
</html>