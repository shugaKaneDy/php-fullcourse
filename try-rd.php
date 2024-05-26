<?php

// var_dump($_SERVER["REQUEST_METHOD"]);
/* We don't use required because it can used inspect element to delete those */

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $option = htmlspecialchars($_POST["option"]);

  if (empty($option)) {
    echo "No data found";
  } else {
    echo "Data: $option";
  }


} else {
  header("Location: ../index.php");
}