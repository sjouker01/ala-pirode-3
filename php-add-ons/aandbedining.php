
<link rel="stylesheet" type="text/css" href="./css/style.css">

<?php 
include("php-add-ons\conect.php");

$sql1 = "SELECT * FROM aanbiedingen";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    while($row = $result1->fetch_object()) {
   
        $titel1 = $row->titel;
        $begindatum1 = $row->begindatum;
        $einddatum = $row->einddatum;
        $omschrijving = $row->omschrijving;
        $afbeelding = $row->afbeelding;
       
        echo '<article class="aanbieding">';
        echo '<article class="titel">' . $titel1 . '</article>';
        echo '<article class="datum">Van ' . $begindatum1 . ' tot ' . $einddatum . '</article>';
        echo '<article class="omschrijving">' . $omschrijving . '</article>';
        echo '<img class="afbeelding" src="' . $afbeelding . '">';
        echo '</article>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>