<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Pagina</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="javascript" type="javascript"  href="js/producten.js" >
</head>
<?php
// header
require_once("php-add-ons\header.php");
?>
<body>
    <!--afbeeldingen van slideshow-->
<div class="producten-title">
<h3>Onze producten</h3>
</div>
<div class="producten-tekst">
<p>Klik op een afbeelding om meer informatie te krijgen over een van onze smaken!</p>
</div>

<div id='producten_body'>
<div id='image-track' data-mouse-down-at='0'>
<a href='producten_info.php?id=1'><img class='image-slider' src='images/image.melk.png'  title="Melk Smaak" draggable='false'/></a>
<a href='producten_info.php?id=2'><img class='image-slider' src='images/advocado.png'  title="Advocado Smaak" draggable='false'/></a>
<a href='producten_info.php?id=3'><img class='image-slider' src='images/sinas.png'  title="Sinas Smaak" draggable='false'/></a>
<a href='producten_info.php?id=4'><img class='image-slider' src='images/wortel.png'  title="Wortel Smaak" draggable='false'/></a>
</div> 
</div>
</div>
<div class="mintycreamy">
    
</div>

</body>
<?php
// footer

require_once('php-add-ons/hooter.php');

?>
</html> 