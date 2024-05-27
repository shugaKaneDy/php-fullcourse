<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pwd, string $email) {
  if (empty($username) || empty($pwd) || empty($email)) {
    return true;
  } else {
    return false;
  }
}

function is_email_invalid(string $email) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return true;
  } else {
    return false;
  }
}

function is_username_taken(object $pdo, string $username) {
  if (getUsername($pdo, $username)) {
    return true;
  } else {
    return false;
  }
}

function is_email_registered(object $pdo, string $email) {
  if (getEmail($pdo, $email)) {
    return true;
  } else {
    return false;
  }
}

function create_user(object $pdo, string $username, string $pwd, string $email) {
  setUser($pdo, $username, $pwd, $email);
}