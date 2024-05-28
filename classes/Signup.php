<?php

class Signup extends Dbh {
  private $username;
  private $pwd;

  public function __construct($username, $pwd) {
    $this->username = $username;
    $this->pwd = $pwd;
  }


  private function insertUser() {
    $query = "INSERT INTO users ('username', 'pwd') VALUES (:username, :pwd)";
    // $stmt = $this->connect()->prepare($query);
    $stmt = parent::connect()->prepare($query);
    $stmt->bindParam(':username', $this->username);
    $stmt->bindParam(':username', $this->pwd);
    $stmt->execute();
  }

  private function isEmptySubmit() {
    if(isset($this->username) && isset($this->pwd)) {
      return false;
    } else {
      return true;
    }
  }

  public function signupUser() {
    // Error Handlers

    if($this->isEmptySubmit()) {
      header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/oopsignup.php');
      die();
    }

    // if on errors, signup user
    $this->insertUser();
  }

}