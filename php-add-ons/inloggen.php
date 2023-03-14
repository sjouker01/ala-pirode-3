<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="energy";
try{
$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);
}catch(Exception $e){
    echo $e->getMessage();
}

// echo "Ongeldige gebruikersnaam en/of wachtwoord.";

if(isset($_POST['login'])) {
    $username = $_POST['username-inlog'];
    $password = $_POST['password-inlogen'];

    

    $sql ="SELECT * FROM gebruikers WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    if($result->num_rows == 1){
        echo "Welkom, " . $row[1] . "!";
       
        $_SESSION['loggedin'] = true;
        session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header('');
    exit;
}
    } else {
        echo "Ongeldige gebruikersnaam en/of wachtwoord.";
    }
}

?>
<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="POST">
    <label for="username">Username:</label> <br>
    <input type="text" name="username-inlog" id=""> <br>

    <label for="password">Password:</label> <br>
    <input type="password" name="password-inlogen" id=""> <br>

    <input type="submit" name="login" value="Login"> <br>
    
</form>
</body>
</html>
