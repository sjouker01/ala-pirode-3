<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
// header
require_once("php-add-ons\header.php");

?>
<body>
    <!--afbeeldingen van slideshow-->
<div id='producten_body'>
echo "<article id='image-track' data-mouse-down-at='0'>";
echo "<a href='producten_info.php?id=2'><img class='image' src='images/image.melk.png' draggable='false'/></a>";
echo "<a href='producten_info.php?id=4'><img class='image' src='images/advocado.png' draggable='false'/></a>";
echo "<a href='producten_info.php?id=3'><img class='image' src='images/sinas.png' draggable='false'/></a>";
echo "<a href='producten_info.php?id=2'><img class='image' src='images/wortel.png' draggable='false'/></a>";
echo "</article>";
        
</article>
</div>

<!-- <script src="js/producten.js"></script> -->
</body>
<?php
// footer

require_once('php-add-ons\hooter.php');

?>
</html> 