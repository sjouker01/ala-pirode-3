<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
// header
include("php-add-ons\conect.php");
$id = $_GET['id'];
$sql = "SELECT *FROM smaken WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0  ){
    $row = $result->fetch_object();
    $id = $row->id;
    $naam = $row->naam;
    $beschrijving = $row->beschrijving;
    $afbeeldingen = $row->afbeeldingen;
    $ingredienten =$row->ingredienten;


    echo $naam . "</br>";
    echo $beschrijving . "</br>";
    echo "<a href='producten_info.php?id=$id'><img class='image' src='images/$afbeeldingen' draggable='false'/></a>";
    echo $ingredienten . "</br>";
}



?>
<body>
    
</body>
<?php
// footer
?>
</html>