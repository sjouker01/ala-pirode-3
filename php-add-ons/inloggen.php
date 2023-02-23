<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include('../php-add-ons\conect.php');
$query = "SELECT username, password FROM gebruikers";
$result = $conn->query($query);

// Controleren of er resultaten zijn en deze in variabelen opslaan
$usernames = array();
$passwords = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $usernames[] = $row["username"];
        $passwords[] = $row["password"];
    }
} else {
    echo "0 results";
}

// De resultaten weergeven
echo "Gebruikersnamen: " . implode(", ", $usernames) . "<br>";
echo "Wachtwoorden: " . implode(", ", $passwords);



?>
</body>
</html>