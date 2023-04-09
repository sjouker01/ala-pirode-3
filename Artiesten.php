<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artiesten Pagina</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="js\coockies.js"></script>

</head>
<?php include("php-add-ons\header.php");
include("php-add-ons\conect.php");
 ?>
<body>


<?php
$sql = "SELECT * FROM artiesten ORDER BY naam DESC";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='artiesten-info-k'>";
        echo "<h2>Artiesten naam: " . $row['naam'] . "</h2>";
        echo "<a href='Artiesten-info.php?id="  . $row["artiest_id"] . "'>Klik hier om meer over " . $row["naam"] . " te zien</a>";
        echo "</div>";
    }
} else {
    echo "Geen artiesten gevonden.";
}

?>

<?php
    // conection 
    require_once("php-add-ons\hooter.php");
    ?>
</body>
</html>