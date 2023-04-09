<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Info Pagina</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body class="producten-achtergrond">
<?php
// header

include("php-add-ons\header.php");
?>
<body>
    <main>
        
    </main>
<?php
include("php-add-ons\conect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM smaken WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0  ){
    $row = $result->fetch_object();
    $id = $row->id;
    $naam = $row->naam;
    $beschrijving = $row->beschrijving;
    $afbeeldingen = $row->afbeeldingen;
    $ingredienten =$row->ingredienten;

?>

<div class="box-producten-informatie-image-alles">

<div class="producten_informatie_sql">

<div class="informatie-energy-producten">

<div class="smaak-titel">
<?php
    echo $naam . "</br>"; ?>
</div><br>

<div class="short-bericht-onder-titel">
    <?php
    echo $beschrijving . "</br>";
    ?>
    </div>
</div>
    <div class="producten_informatie_sql">
<div class="product-info-image">
    <?php
    echo "<a href='producten_info.php?id=$id'><img class='product-info-image' src='images/$afbeeldingen' draggable='false'/></a>";
    ?>
</div>
</div>

<div class="box-ingredienten">
<div class="ingredienten-producten">
    <?php
    echo $ingredienten . "</br>";
}

?>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
<?php
// footer
?>
</html>