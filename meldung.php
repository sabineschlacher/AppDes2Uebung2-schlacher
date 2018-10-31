

<?php
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$slider = $_POST["slider"];

echo "das ist der".$vorname;

$con = new MySQLi("localhost", "root", "root", "app-uebung");
$sql ="INSERT INTO formular(vorname, nachname, slider) VALUES ('$vorname' , '$nachname' , '$slider')";

echo $sql;

$ergebnis = mysqli_query($con, $sql) or die  ("Fehler");
echo $ergebnis;

mysqli_close($con);

?>