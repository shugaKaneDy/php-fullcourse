<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

  <h3 class="text-center">
    <?php
      output_username();
    ?>
  </h3>

  <?php
    if(!isset($_SESSION["user_id"])) { ?>
      <div class="container">
        <h3 class="text-center">Login</h3>

        <form action="includes/login.inc.php" method="post" class="w-50 m-auto mt-5">
          <input class="form-control mb-2" type="text" name="username" placeholder="Username">
          <input class="form-control mb-2" type="password" name="pwd" placeholder="Password">
          <button class="btn btn-primary">Login</button>
        </form> 

        
      </div>
  <?php  } ?>
  

  <?php
      check_login_errors();
  ?>

  <div class="container mt-5">
    <h3 class="text-center">Sign-up</h3>

    <form action="includes/signup.inc.php" method="post" class="w-50 m-auto mt-5">
      <?php
        signup_inputs();
      ?>
      <button class="btn btn-primary">Signup</button>
    </form> 
  </div>

  <div class="container">
    <?php
      check_signup_errors();
    ?>
  </div>

  <div class="container">
    <h3 class="text-center">Logout</h3>

    <form action="includes/logout.inc.php" method="post" class="w-50 m-auto mt-5">
      <button class="btn btn-danger">Logout</button>
    </form> 
  </div>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>