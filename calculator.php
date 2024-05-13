<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="number" name="num1" placeholder="Number One">
    <select name="operator">
      <option value="addition">+</option>
      <option value="substraction">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <input type="number" name="num2" placeholder="Number Two">
    <button class="btn btn-primary">Calculate</button>
  </form>
  <br>
  
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      // Grab Data
      $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
      $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
      $operator = htmlspecialchars($_POST["operator"]);

      // Error Handlers
      $errors = false;

      if (empty($num1) || empty($num2) || empty($operator)) {
        echo "<p class = 'text-danger h4'>Fill in all fields!</p>";
        $errors = true;
      }

      if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "<p class = 'text-danger h4'>Only write numbers!</p>";
        $errors = true;
      }

      // Calculate the numbers if no errors

      if(!$errors) {
        $value = 0;
        switch ($operator) {
          case "addition":
            $value = $num1 + $num2;
            break;
          case "substraction":
            $value = $num1 - $num2;
            break;
          case "multiply":
            $value = $num1 * $num2;
            break;
          case "divide":
            $value = $num1 / $num2;
            break;
          default:
            echo "<p class = 'text-danger h4'>Something went Wrong!</p>";
        }

        echo "<p class = 'text-success h4'>Result: $value</p>";
      }
    }
  ?>
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>