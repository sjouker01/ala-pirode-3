



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <?php include("header.php");?>
    
<article>
    <section>
        <h2>Login</h2>
        <form action="" method="POST">
            <section>
                <label for="username">Username:</label>
                <input type="text" name="username-inlog" id="username" required>
            </section>

            <section>
                <label for="password">Password:</label>
                <input type="password" name="password-inlogen" id="password" required>
            </section>

            <section>
                <button type="submit" name="login">Login</button>
            </section>
        </form>
    </section>
</article>

</body>
</html>



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


// check if the login form was submitted
if(isset($_POST['login'])) {
    // get the username and password from the form
    $username = $_POST['username-inlog'];
    $password = $_POST['password-inlogen'];

    // query the database for a user with matching username and password
    $sql = "SELECT * FROM gebruikers WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // check if a matching user was found
    if($result->num_rows == 1) {
        // start the session and set the session variables
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["permission"] = $result->fetch_object()->permission;

        // redirect to the index page
        header("Location: ../index.php");
        exit;
    } else {
        // display an error message if no matching user was found
        echo "Ongeldige gebruikersnaam en/of wachtwoord.";
    }
}
    

?>
<?php

?>

