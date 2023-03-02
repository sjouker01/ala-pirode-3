<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form id="login-form" action="" method="POST">
  <label for="username">Username:</label> <br>
  <input type="text" name="username-inlog" id="username-inlog"> <br>

  <label for="password">Password:</label> <br>
  <input type="password" name="password-inlogen" id="password-inlogen"> <br>

  <input type="submit" name="login" value="Login" id="login-button"> <br>
</form>

</body>
</html>
<?php 
include('../php-add-ons\conect.php');




if(isset($_POST['login'])) {
    $username = $_POST['username-inlog'];
    $password = $_POST['password-inlogen'];

    $sql ="SELECT * FROM gebruikers WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    $row = $result->fetch_row();

    if($result->num_rows == 1){
        echo "Welkom, " . $row[1] . "!";
        // Voer hier verdere acties uit zoals het doorsturen naar een beveiligde pagina.
    } else {
        echo "Ongeldige gebruikersnaam en/of wachtwoord.";
    }
}

?>