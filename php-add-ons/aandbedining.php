<?php 
include("php-add-ons\conect.php");

$sql1 = "SELECT * FROM aanbiedingen";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    while($row = $result1->fetch_object()) {
        // access the values of each row as object properties
        $titel1 = $row->titel;
        $begindatum1 = $row->begindatum;
        $einddatum = $row->einddatum;
        $omschrijving = $row->omschrijving;
        $afbeelding = $row->afbeelding;
        
        // ...
        // do something with the retrieved data
    }
} else {
    echo "0 results";
}

$conn->close();

?>