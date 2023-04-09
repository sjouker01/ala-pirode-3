<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenementen Pagina</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="js\coockies.js"></script>
</head>
<?php include("php-add-ons\header.php");
include("php-add-ons\conect.php");
 ?>
<body>

<div class="uitgelichte-title">
<h4>Aankomende evenementen</h4>
</div>
<?php




$sql = "SELECT e.*, a.naam AS artiest_naam, l.plaatsnaam, l.gebouw, l.adres, l.postcode  
        FROM evenementen e 
        JOIN artiesten a ON e.artiest_id = a.artiest_id 
        JOIN locaties l ON e.locatie_id = l.locatie_id 
        WHERE `datum` >= '2023-04-09' 
        ORDER BY `datum` LIMIT 3";

 $resultt = mysqli_query($conn, $sql);



echo "<div class='container-top3'>";
while($row = mysqli_fetch_assoc($resultt)) {
    echo "<div class='box-top3'>";
    echo "<h2>Evenement nummer " . $row['evenement_id'] . "</h2>";
    echo "<p>Artiest: " . $row['artiest_naam'] . "</p>";
    echo "<p>Gebouw: " . $row['gebouw'] . "</p>";
    echo "<p>Datum: " . $row['datum'] . "</p>";
    echo "<p>Locatie: " . $row['plaatsnaam'] . ", " . $row['gebouw'] . ", " . $row['adres'] . " " . $row['postcode'] . "</p>";

    echo "</div>";
}
echo "</div>";



?>







<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sort = $_POST["sort"];

    
    switch ($sort) {
        case "artiest":
            $order = "a.naam";
            break;
        case "plaatsnaam":
            $order = "l.plaatsnaam";
            break;
        case "datum":
            $order = "e.datum";
            break;
        default:
            $order = "e.evenement_id";
    }

    $sql = "SELECT e.*, a.naam AS artiest_naam, l.plaatsnaam, l.gebouw, l.adres, l.postcode  
            FROM evenementen e 
            JOIN artiesten a ON e.artiest_id = a.artiest_id 
            JOIN locaties l ON e.locatie_id = l.locatie_id 
            ORDER BY $order";
} else {
   
    $sql = "SELECT e.*, a.naam AS artiest_naam, l.plaatsnaam, l.gebouw, l.adres, l.postcode  
            FROM evenementen e 
            JOIN artiesten a ON e.artiest_id = a.artiest_id 
            JOIN locaties l ON e.locatie_id = l.locatie_id";
}

$result = mysqli_query($conn, $sql);
?>

<div class='sort-container'>
    <form class="formulier-sorteren" method='post'>
        <label for='sort'>Sorteer op:</label>
        <select name='sort' id='sort'>
            <option value='artiest'>Artiest</option>
            <option value='plaatsnaam'>Plaatsnaam</option>
            <option value='datum'>Datum</option>
        </select>
        <button class="button-sorteer" type='submit'>Sorteer</button>
    </form>
</div>

<div class='container-gesorteerd'>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class='box-gesorteerd'>
            <h2>Evenement nummer <?php echo $row['evenement_id']; ?></h2>
            <p>Artiest: <?php echo $row['artiest_naam']; ?></p>
            <p>Gebouw: <?php echo $row['gebouw']; ?></p>
            <p>Datum: <?php echo $row['datum']; ?></p>
            <p>Locatie: <?php echo $row['plaatsnaam'] . ", " . $row['gebouw'] . ", " . $row['adres'] . " " . $row['postcode']; ?></p>
            
        </div>
    <?php endwhile; 
    ?>

<?php
require_once('php-add-ons\hooter.php');
?>
</html>