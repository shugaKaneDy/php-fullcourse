<?php

// $dsn = "mysql:host=localhost;dbname=myfirstdatabase";
// $dbusername = "root";
// $dbpassword = "";


// try {
//   $pdo = new PDO($dsn, $dbusername, $dbpassword);
//   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo "Connection Failed" . $e->getMessage();
// }

$host = "localhost";
$dbname = "myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Connection Failed" . $e->getMessage());
}
