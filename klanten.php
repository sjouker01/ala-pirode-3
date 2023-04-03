<?php

try {
    $conn= new mysqli('localhost', 'root', 'root', 'kapsalon');

}catch ()

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php while($row = $result->fetch_array(MYSQLI_ASSOC)){
        echo $row['id'] . ' - '
            . $row['naam'] . ' - '
            . $row['email'] . ' - '
            . $row['adres']; ?>

        <a href= "afspraken.php?id">
    }

    ?>
</body>
</html>

