<?php
require_once("php-add-ons\conect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO contact(Naam, Email,  Bericht) VALUES ('$name','$email','$message')" ;

$result=mysqli_query($conn, $sql);




if($result){
    header('Location: ./contact-pagina.php');
    
}

?>