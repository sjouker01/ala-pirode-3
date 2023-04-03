<?php

try {
    $conn = new mysqli('localhost');
}catch (Exception $e){
    echo $e->getMessage();
}

if (isset($_POST['submit'])){
    try {
        $naam = $_POST['naam'];
        $email = $_POST['email'];
        $adres = $_POST['adres'];

        $sql = "INSERT INTO klant (naam, email, adres)
                VALUES 
                ('naam', 'email', 'adres')";

    }catch ()
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
    <form method="post" action="">
        <label for="">naam</label>
        <input type="text" name="naam" id="">
        <label for="">naam</label>
        <input type="text" name="naam" id="">
        <label for="">naam</label>
        <input type="text" name="naam" id="">
    </form>
</body>
</html>
