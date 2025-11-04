<?php
$servername = "localhost";
$username = "phobuste_dilse";
$password = "!E2Row_(rNpC";

try {
  $conn = new PDO("mysql:host=$servername;dbname=phobuste_dilsecodie", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>