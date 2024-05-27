<?php

declare(strict_types=1);

function signup_inputs() {

  if(isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
    echo '<input class="form-control mb-2" type="text" name="username" placeholder="Username" value="'.$_SESSION["signup_data"]["username"].'">';
  } else {
    echo '<input class="form-control mb-2" type="text" name="username" placeholder="Username">';
  }

  echo '<input class="form-control mb-2" type="password" name="pwd" placeholder="Password">';

  if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
    echo '<input class="form-control mb-2" type="text" name="email" placeholder="E-mail" value="'.$_SESSION["signup_data"]["email"].'">';
  } else {
    echo '<input class="form-control mb-2" type="text" name="email" placeholder="E-mail">';
  }
}

function check_signup_errors() {

  if(isset($_SESSION["errors_signup"])) {
    $errors = $_SESSION["errors_signup"];

    echo "<br>";

    foreach ($errors as $error) {
      echo "<div class = 'text-danger text-center'> $error </p>";
    }

    unset($_SESSION["errors_signup"]);
  } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
    echo "<br>";
    echo "<div class = 'text-success text-center'> Signup success! </p>";
    unset($_SESSION["errors_signup"]);
  }
}