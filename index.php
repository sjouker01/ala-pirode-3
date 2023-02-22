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
	<form method="post" action="#">
		<input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="login" value="submit">
	</form>
  
  <?php 

  include("php-add-ons\conect.php");
  
  
  
  
  // Process form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST["username"];
      $password = $_POST["password"];
      
      // Query the database for the entered username and password
      $sql = "SELECT * FROM users WHERE username='$username'";
      $user = mysqli_query($conn, $sql);



      if($user['$password']==$password){
        

      }
      
      if (mysqli_num_rows($result) == 1) {
          // If the query returns a single row, the login was successful
          $user = mysqli_fetch_assoc($result);
          $_SESSION["username"] = $user["username"];
          $_SESSION["rights"] = $user["rights"];
          
          if ($user["rights"] == 2) {
              // If the user has admin rights, redirect to the admin dashboard
              header("location: admin_dashboard.php");
          } else {
              // If the user has normal rights, redirect to the normal dashboard
              header("location: normal_dashboard.php");
          }
      } else {
          // If the query returns no rows, the login was unsuccessful
          $error = "Invalid username or password";
      }
  }
  
  // Close database connection
  mysqli_close($conn);
  ?>
  


    <?php
    // conection 
    include("php-add-ons\conect.php");
    // footer
    include 'php-add-ons\footer.php';
    ?>
</body>
</html>