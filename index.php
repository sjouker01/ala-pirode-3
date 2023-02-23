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
<a href="php-add-ons\inloggen.php">a</a>
  <?php
  
  
  ?>
<?php include("php-add-ons\header.php")
 ?>
<h1>Inloggen</h1>
	<form method="POST" action="">
  <label>username:</label>
  <input type="text" name="gebruikersnaam">
  <br>
  <label >password:</label>
  <input type="text" name="wachtwoord" >
  <br>
  <input type="subit">

	</form>
  
   

  <?php
    // conection 
    include("php-add-ons\conect.php");
    // footer
    include 'php-add-ons\footer.php';
    ?>
</body>
</html>