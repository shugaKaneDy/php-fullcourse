<?php

// $sensitiveData = "Kane";
// $salt = bin2hex(random_bytes(16)); // Generate random salt
// $pepper = "ASecretPepperString";

// echo "<br>" . $salt;

// $dataToHash = $sensitiveData . $salt . $pepper;
// $hash = hash("sha256", $dataToHash);

// echo "<br>" . $hash;

// $sensitiveData = "Kane";

// $storedSalt = $salt;
// $storedHash = $hash;
// $pepper = "ASecretPepperString";

// $dataToHash = $sensitiveData . $storedSalt . $pepper;

// $verificationHash = hash("sha256", $dataToHash);

// if($storedHash === $verificationHash) {
//   echo "The data are the same!";
//   echo "<br>";
//   echo $storedHash;
//   echo "<br>";
//   echo $verificationHash;
// } else {
//   echo "The data are not the same!";
// }


$pwdSignup = "Kane";

$options = [
  'cost' => 12
];


// password_hash($pwd, PASSWORD_DEFAULT);
$hashPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);



$pwdLogin = "Kane2";

if(password_verify($pwdLogin, $hashPwd)) {
  echo "They are the same";
} else {
  echo "They are not the same";
}


