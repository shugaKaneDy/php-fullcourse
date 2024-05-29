<?php

session_start();
require_once 'dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if(isset($_POST["save_student_btn"])) {

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

  if(isset($_POST["update_student_btn"])) {

    $student_id = $_POST['student_id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    try {
      $query = "UPDATE students SET fullname = :fullname, email = :email, phone = :phone, course = :course WHERE id = :student_id";
      $stmt = $conn->prepare($query);

      $data = [
        ':fullname' => $fullname,
        ':email' => $email,
        ':phone' => $phone,
        ':course' => $course,
        ':student_id' => $student_id
      ];

      $query_execute = $stmt->execute($data);

      if($query_execute) {
        $_SESSION['message'] = "Updated Successfully";
        header("location: pdo.php");
        exit(0);
      } else {
        $_SESSION['message'] = "Not Updated";
        header("location: pdo.php");
        exit(0);
      }

    } catch (PDOException $e) {
      die("Connection Failed" . $e->getMessage());
    }
  }

  if(isset($_POST["delete_student"])) {
    $student_id = $_POST["delete_student"];

    try {

      $query = "DELETE FROM students WHERE id = :student_id";
      $stmt = $conn->prepare($query);

      $data = [':student_id' => $student_id];
      $query_execute = $stmt->execute($data);

      if($query_execute) {
        $_SESSION['message'] = "Deleted Successfully";
        header("location: pdo.php");
        exit(0);
      } else {
        $_SESSION['message'] = "Not Deleted";
        header("location: pdo.php");
        exit(0);
      }

    } catch (PDOException $e) {
      die("Connection Failed" . $e->getMessage());
    }
  }


}
