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
    <?php require_once("php-add-ons\header.php");
      
     
      require_once('php-add-ons\conect.php');

// Gebruiker toevoegen
// try{
// if (isset($_POST['add'])) {
//   $gebruikersnaam1 = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
//   $wachtwoord1 = $_POST['wachtwoord'];
//   $toestemming1 = $_POST['toestemming'];

//   mysqli_query($conn, " INSERT INTO gebruikers (username, password, permission) VALUES ('$gebruikersnaam1', '$wachtwoord1', '$toestemming1')");
// }
// if ($conn->connect_error) {
//   die("Connectie mislukt: " . $conn->connect_error);
// } 
// } catch(mysqli_sql_exception $e) {
//   if ($e->getCode() == 1062) {
  
// }
// }
try {
  if (isset($_POST['add'])) {
    $gebruikersnaam1 = mysqli_real_escape_string($conn, $_POST['gebruikersnaam']);
    $wachtwoord1 = $_POST['wachtwoord'];
    $toestemming1 = $_POST['toestemming'];
    
    $hashed_password = password_hash($wachtwoord1, PASSWORD_DEFAULT); // Hash the password

    mysqli_query($conn, "INSERT INTO gebruikers (username, password, permission) VALUES ('$gebruikersnaam1', '$hashed_password', '$toestemming1')");
  }
  if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
  } 
} catch(mysqli_sql_exception $e) {
  if ($e->getCode() == 1062) {
    // Handle duplicate entry error
  }
}


// if (isset($_POST['ver'])) {
//   $gebruikersnaam1 = mysqli_real_escape_string($conn, $_POST['gebruikersnaam1']);
//   $wachtwoord1 = mysqli_real_escape_string($conn, $_POST['wachtwoord1']);

//   mysqli_query($conn, "DELETE FROM gebruikers WHERE username = '$gebruikersnaam1' AND password = '$wachtwoord1'");

//   if (mysqli_affected_rows($conn) > 0) {
//     echo "succses  " . mysqli_affected_rows($conn);
//   } else {
//     echo "Fout bij het verwijderen van de gebruiker: " . mysqli_error($conn);
//   }
// }

if (isset($_POST['ver'])) {
  $gebruikersnaam1 = mysqli_real_escape_string($conn, $_POST['gebruikersnaam1']);
  $wachtwoord1 = mysqli_real_escape_string($conn, $_POST['wachtwoord1']);

  // hash the password before comparing it with the database
  $hashed_password = password_hash($wachtwoord1, PASSWORD_BCRYPT, [12]);

  $query = "DELETE FROM gebruikers WHERE username = '$gebruikersnaam1' AND password = '$wachtwoord1'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    echo "Fout bij het verwijderen van de gebruiker: " . mysqli_error($conn);
  } else if (mysqli_affected_rows($conn) > 0) {
    echo "Succesvol verwijderd: " . mysqli_affected_rows($conn);
  } else {
    echo "Geen record gevonden om te verwijderen.";
  }
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
<form method="POST" action="" >
<article class="form-group">
  <label for="gebruikersnaam1">gebruikersnaam:</label>
  <input type="text"  name="gebruikersnaam1">
</article>
<article class="from-group">
  <label for="wachtwoord1">wachtwoord:</label>
  <input type="password" name="wachtwoord1">
</article>
<article class="form-group">
  <button class="btn-toevoegen1" type="submit" name="ver">verwijderd</button>
</article>




</form>


<?php
      
     // start de sessie als die nog niet gestart is
if(!isset($_SESSION)) {
    session_start();
    
} else {
    if( isset($_SESSION["permission"])){
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