<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home pagina</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="js\coockies.js"></script>

</head>

<body>

<?php include("php-add-ons\header.php");
 ?>

 <main class="home-pagina">
 <div id="cookie-popup" >
    <p>We use cookies to improve your browsing experience. By continuing to use this site, you consent to our use of cookies.</p>
    <button id="accept-cookies">I accept</button>
</div>

 </main>
 <?php 
 require_once("php-add-ons\cookies.php");
 ?>
<?php
require_once("php-add-ons\aandbedining.php");



?>
  <?php
    // conection 
  
    require_once("php-add-ons\hooter.php");
    ?>
</body>
</html>