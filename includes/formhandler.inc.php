<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $username = $_POST['username'];
  $pwd = $_POST['pwd'];
  $email = $_POST['email'];

  try{
    require_once "dbh.inc.php";


    // non-name parameters
    // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute([$username, $pwd, $email]);

    // $pdo = null;
    // $stmt = null;

    // name parameters
    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
    $stmt = $pdo->prepare($query);
    
    $options = [
      'cost' => 12
    ];

    $hashPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $hashPwd);
    $stmt->bindParam(":email", $email);

    $stmt->execute();

    $pdo = null;
    $stmt = null;

    header("Location: ../index.php");

    die();
  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

} else {
  header("Location: ../index.php");
}