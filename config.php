<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
  'lifetime' => 1800,
  'domain' => 'localhost',
  'path' => '/',
  'secure' => true,
  'httpOnly' => true
]);


session_start();

// session_regenerate_id(true);

if(isset($_SESSION['last_regenaration'])) {
  session_regenerate_id(true);
  // session_create_id(true);
  $_SESSION['last_regenaration'] = time();
} else {
  $interval = 60 * 30;
  
  if (time() - $_SESSION['last_regenaration'] >= $interval) {
    session_regenerate_id(true);
    $_SESSION['last_regenaration'] = time();

  }
}