<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "icdigital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST["name"];
$date = $_POST["date"];
$sesso = $_POST["sesso"];
$email = $_POST["email"];
$regione = $_POST["regione"];
$provincia =$_POST["provincia"];
$citta = $_POST["citta"];
$sci= $_POST["sci"];
$basket= $_POST["basket"];
$calcio = $_POST["calcio"];


$sql = "INSERT INTO users (name, date, sesso, email, regione, provincia,citta,sport)
VALUES ($name, $date, $sesso,$email,$regione,$provincia,$citta,$sci)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();