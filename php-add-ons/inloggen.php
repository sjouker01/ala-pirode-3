 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"  href="css/style.css">
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

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="phples";
try{
$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);
}catch(Exception $e){
    echo $e->getMessage();}




  
    // if(isset($_POST['create'])){
    //     if(!empty($_POST['username']) && !empty($_POST['password'])){
    //         $username = $_POST['username'];
    //         $password = $_POST['password'];
            // $sql ="INSERT INTO gebruikers (username, password) VALUES ('$username', '$password')";

        // }
          

      
        if(isset($_POST['create'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_check = $_POST['password-checkt'];
        
            if($password === $password_check){
                $sql ="INSERT INTO gebruikers (username, password) VALUES ('$username', '$password')";
                $result = $conn->query(query: $sql);
        
                if($result){
                    echo "Gebruiker '$username' is succesvol aangemaakt.";
                    $sql ="SELECT * FROM gebruikers";
                try{
                $result = $conn->query(query: $sql);
                while($row = $result->fetch_row()){
                 ?>
                <article>    
                  <p style="color: green;"><?php echo $row[0] . "_" .$row[1]. "_". $row[2]; ?></p>
                </article>
                <?php
    }
}catch(Exception $e){
    echo $e->getMessage();
}

                } else {
                    echo "Er is een fout opgetreden bij het aanmaken van de gebruiker.";
                }
            } else {
                echo "De ingevoerde wachtwoorden komen niet overeen.";
            }
        }
        
    
    
    
    
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
        
    
    </html>
        <form action=""  method="POST">
        <label for="username">username:</label> <br>

        <input type="text" name="username" id=""> <br>
        <label for="password">password:</label> <br>
        <input type="password" name="password" id=""> <br>
        <input type="password" name="password-checkt" id=""><br>
        <input type="submit" name="create" value="create user"> <br>

    </form>
    <a href="inloggen.php">inloggen

    </a>
    </body>