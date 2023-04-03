<?php

try {
    $conn = new mysqli('localhost', 'root', 'root', 'kapsalon');
}catch (Exception $e){
    echo $e->getMessage()
}




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
<?php while ($row = $result->fetch_object()){ ?>
    <h1><?php echo $row->id; ?></h1>
    <p><?php echo $row->naam; ?></p>
    <p><?php echo $row->email; ?></p>

</body>
</html>
