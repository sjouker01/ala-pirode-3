<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artiesten Informatie Pagina</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="js/coockies.js"></script>

</head>
<?php
include("php-add-ons/header.php");
        include("php-add-ons/conect.php");
        ?>
<body>
<?php 
 

 if (isset($_GET['id'])) {
    $artiest_id = $_GET['id'];

    
    $sql = "SELECT * FROM artiesten WHERE artiest_id = $artiest_id";
    $result = mysqli_query($conn, $sql);

  
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<div class='artiesten-info'>";
        echo "<h2>Artiesten naam: " . $row['naam'] . "</h2>";
        echo "<p>Achternaam: " . $row['achternaam'] . "</p>";
        echo "<p>Voornaam: " . $row['voornaam'] . "</p>";
        echo "<p>Tussenvoegsel: " . $row['tussenvoegsel'] . "</p>";
        echo "<p>Statement: " . $row['statement'] . "</p>";
        echo "<p>Telefoon: " . $row['telefoon'] . "</p>";
        echo "<p>Actief: " . ($row['actief'] ? 'Ja' : 'Nee') . "</p>";
        echo "<img class='selfie-artiest' src='" . $row['afbeelding'] . "'>";
        echo "</div>";
    } else {
        echo "Geen artiest gevonden.";
    }
} else {
    echo "Geen artiest geselecteerd.";
}


mysqli_close($conn);
include("php-add-ons/hooter.php");
    ?>
</body>
</html>
