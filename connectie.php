<?php

$serverNaam = "localhost";
$gebruikersNaam = "root";
$pasWoord = "root";

$databaseNaam = "loginSysteem";

$conn = mysqli_connect($serverNaam, $gebruikersNaam, $pasWoord, $databaseNaam);

if (!$conn) {
  die("Connectie fout: " . mysqli_connect_error());
}
echo "Connectie succes";



?>
