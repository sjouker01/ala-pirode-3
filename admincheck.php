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




if (isset($_POST['ver'])) {
  $gebruikersnaam1 = $_POST['gebruikersnaam1'];
  $wachtwoord1 = $_POST['wachtwoord1'];

  $sql = "SELECT * FROM gebruikers WHERE username = '$gebruikersnaam1'";
  $result = $conn->query($sql);

  if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    // Verify the password
    if (password_verify($wachtwoord1, $hashed_password)) {
      $user_id = $row['username'];
      $sql = "DELETE FROM gebruikers WHERE username = '$user_id'";
      $conn->query($sql);
      // User has been deleted
    }
  }
}


?>
<form method="POST" action="">
  <article class="form-group">
    <label for="gebruikersnaam">Gebruikersnaam:</label>
    <input id="gebruikersnaam" type="text" name="gebruikersnaam">
  </article>
  <article class="form-group">
    <label for="wachtwoord">Wachtwoord:</label>
    <input id="wachtwoord" type="password" name="wachtwoord">
  </article>
  <article class="form-group">
    <label for="toestemming">Toestemming:</label>
    <select id="toestemming" name="toestemming">
      <option value="1">Gebruiker</option>
      <option value="2">Beheerder</option>
    </select>
  </article>
  <article class="form-group">
    <button class="btn-toevoegen" type="submit" name="add">Toevoegen</button>
</article>
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