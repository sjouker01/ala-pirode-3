<?php 
try{
    $conn = new mysqli("localhost", "root", "" , "energy");
}catch(Exception $e){
    $error = $e->getMessage();
    echo $error;
}

?>