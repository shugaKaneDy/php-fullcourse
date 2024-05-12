<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  /* intro to php
  echo "Hello, World";
  */
  ?>

  <!-- Syntax -->
  <?php if(true) {?>
    <!-- <p>Some HTML text</p> -->
  <?php } ?>

  <?php
  // Scaler types
  // default values
    // $string = "";
    // $int = 0;
    // $float = 0;
    // $bool = false;

    // $array = [];
    // $object = null;

  // Array type
    // $names = ["Kane", "Sherwin", "Ryan"];
  // Object type
    // $object = new Car();

  // Built in Super Global
    // echo $_SERVER["DOCUMENT_ROOT"];
    // echo "<br>";
    // echo $_SERVER["PHP_SELF"];
    // echo "<br>";
    // echo $_SERVER["SERVER_NAME"];
    // echo "<br>";
    // echo $_SERVER["REQUEST_METHOD"];

    // echo $_GET["name"];
    // echo $_GET["eyeColor"];

    // echo $_REQUEST["name"];
    // echo $_FILES["name"];
    // echo $_COOKIE["name"];
    // $_SESSION["username"] = "kane";
    // echo $_SESSION["username"];

    // $_ENV[];


  ?>
  
  <!-- <main>
    <form action="includes/formhandler.php" method="post">
      <label for="firstname">Firstname?</label>
      <input type="text" id="firstname" name="firstname" placeholder="firstname...">

      <label for="lastname">Lastname?</label>
      <input type="text" id="lastname" name="lastname" placeholder="lastname...">
      
      <label for="favouritepet">Favourite pet?</label>
      <select name="favouritepet" id="favouritepet">
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </main> -->

  <?php
    // String Operator
    // $a = "Hello";
    // $b = "World!";
    // $c = $a. " " .$b;
    // echo $c;

    // Arithmetic Operators

    // echo 1 - 2;

    // Assignment Operators

    // $a = 2;
    // $a *= 4;

    // echo $a;

    // Comparison Operators

    // $a = 4;
    // $b = 4;

    // if ($a != $b) {
    //   echo "This statement is true!";
    // }

    // Logical Operator

    // $a = 4;
    // $b = 4;

    // $c = 2;
    // $d = 6;

    // if ($a == $b || $c == $d) {
    //   echo "This statement is true!";
    // }

    // Increment/Decrement Operators

    // $a = 1;
    // $b = 2;

    // echo ++$a;
  ?>

</body>
</html>