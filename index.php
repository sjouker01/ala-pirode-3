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
<?php include("php-add-ons\header.php") ?>
<h1>Inloggen</h1>
	<form method="post" action="login.php">
		<input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="login" value="submit">
	</form>
  <?php 

  include("php-add-ons\conect.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  ?>
    <?php
    // conection 
    include("php-add-ons\conect.php");
    // footer
    include 'php-add-ons\footer.php';
    ?>
</body>
</html>