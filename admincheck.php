<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <?php include("php-add-ons\header.php");
      
     
    include("php-add-ons\conect.php");

// Gebruiker toevoegen

if (isset($_POST['add'])) {
  $gebruikersnaam1 = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
  $wachtwoord1 = $_POST['wachtwoord'];
  $toestemming1 = $_POST['toestemming'];

  mysqli_query($conn, " INSERT INTO gebruikers (username, password, permission) VALUES ('$gebruikersnaam1', '$wachtwoord1', '$toestemming1')");
}

// Gebruikers weergeven


// Formulier weergeven
?>
<form method="POST" action="">
  <div class="form-group">
    <label for="gebruikersnaam">Gebruikersnaam:</label>
    <input id="gebruikersnaam" type="text" name="gebruikersnaam">
  </div>
  <div class="form-group">
    <label for="wachtwoord">Wachtwoord:</label>
    <input id="wachtwoord" type="password" name="wachtwoord">
  </div>
  <div class="form-group">
    <label for="toestemming">Toestemming:</label>
    <select id="toestemming" name="toestemming">
      <option value="1">Gebruiker</option>
      <option value="2">Beheerder</option>
    </select>
  </div>
  <div class="form-group">
    <button class="btn-toevoegen" type="submit" name="add">Toevoegen</button>
  </div>
</form>


<?php
      
     // start de sessie als die nog niet gestart is
if(!isset($_SESSION)) {
    session_start();
    
} else {
    if( !isset($_SESSION["permission"])){
        if($_SESSION["permission"] !=2 ){
            header("Location:index.php");
      
    }else{
        header("Location:index.php");
    }
}
}
 
    
    ?>
   
</body>
</html>