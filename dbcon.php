<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myfirstdatabase";

try {

  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected Successfully";

} catch (PDOException $e) {
  die("Connection Failed" . $e->getMessage());
}