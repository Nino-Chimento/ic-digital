<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "icdigital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$regioni = [];
$provincie= [];
$citta= [];

$sql = "SELECT * FROM regione";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    array_push($regioni,$row);
  }
} else {
  echo "0 results";
}

$sql = "SELECT * FROM provincia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    array_push($provincie,$row);
  }
} else {
  echo "0 results";
}

$sql = "SELECT * FROM citta";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    array_push($citta,$row);
  }
} else {
  echo "0 results";
}
$conn->close();
?>