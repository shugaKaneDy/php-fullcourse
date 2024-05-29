<?php

session_start();
require_once 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];

  $query = "INSERT INTO students (fullname, email, phone, course) VALUES (:fullname, :email, :phone, :course)";
  $stmt = $conn->prepare($query);

  $data = [
    ':fullname' => $fullname,
    ':email' => $email,
    ':phone' => $phone,
    ':course' => $course
  ];

  $query_execute = $stmt->execute($data);

  if($query_execute) {
    $_SESSION['message'] = "Inserted Successfully";
    header("location: pdo.php");
    exit(0);
  } else {
    $_SESSION['message'] = "Not Inserted";
    header("location: pdo.php");
    exit(0);
  }

}