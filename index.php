<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\css\style.css">
</head>
<body>
    <?php
    // header
    include("php-add-ons\header.php");


    // conection 
    include("php-add-ons\conect.php");

    $sql = "SELECT * FROM evenementen";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Evenement ID</th><th>Datum</th><th>Artiest ID</th><th>Locatie ID</th><th>Max. bezoekers</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["evenement_id"] . "</td>";
      echo "<td>" . $row["datum"] . "</td>";
      echo "<td>" . $row["artiest_id"] . "</td>";
      echo "<td>" . $row["locatie_id"] . "</td>";
      echo "<td>" . $row["max_bezoekers"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "Geen evenementen gevonden.";
  }


      









    // footer
    include 'php-add-ons\footer.php';
    ?>
</body>
</html>