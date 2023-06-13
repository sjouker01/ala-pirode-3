<?php require_once("php-add-ons\header.php");

$naam = $_POST['naam'];
$bericht = $_POST['bericht'];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if ( ! $terms) {
    die("Terms must be accepted");
}

$host = "localhost";
$dbname = "energy";
$username = "root";
$password = "root";

$conn = mysqli_connect(hostname: $host,
    username: $username,
    password: $password,
    database: $dbname);

if (mysqli_connect_errno()){
    die("Connection error:" . mysqli_connect_error());

}

$sql = "INSERT INTO message(naam, body, priority, type)
VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_connect_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
    $naam,
    $bericht,
    $priority,
    $type);

mysqli_stmt_execute($stmt);

echo "Record saved.";

require_once("php-add-ons\hooter.php");

?>