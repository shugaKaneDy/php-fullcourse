<?php
  /* declare(strict_types=1); */
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

    /* Control Structure
    
    $bool = true;
    $a = "3";
    $b = 4;

    $result = match ($a) {
      1, 3, 5 => "Variable a is equal to one!",
      2 => "Variable a is equal to two!",
      default => "None were a match"
    };

    echo $result;

    switch ($a) {
      case 1:
        echo "The first case is correct!";
        break;
      case 2:
        echo "The first case is correct!";
        break;
      default:
        echo "None of the condition were true!";
    }

    if ($a <= $b && !$bool) {
      echo "First condition is true!";
    } else if ($a <= $b && $bool) {
      echo "Second condition is true!";
    } else {
      echo "None of the condition were true!";
    }
    
    */

    /* arrays
    
    // $fruits = [
    //   "apple", 
    //   "banana", 
    //   "cherry",
    // ];

    // echo $fruits[0];
    // $fruits[1] = "orange";

    // unset($fruits[1]); makes it null
    // array_splice($fruits, 0, 1); removes array


    // echo $fruits[1];

    // $tasks = [
    //   "laundry" => "Daniel",
    //   "trash" => "Frida",
    //   "vacuum" => "Basse",
    //   "dishes" => "Bella"
    // ]; // key => value associative array

    // print_r($tasks);
    // echo count($tasks);
    // sort($tasks); // returns index arrays when print
    // print_r($tasks);

    // array_push($fruits, "Mango"); // Only works on index arrays
    // print_r($fruits);

    // $fruits[] = "Mango";

    // $tasks["dusting"] = "Tara";
    
    // print_r($tasks);

    // $test = ["Mango", "Strawberry"];

    // array_splice($fruits, 2, 0, $test); // For adding in between
    // print_r($fruits);

    // $food = [
    //   array("apple", "mango"), 
    //   "banana", 
    //   "cherry",
    // ];

    // echo $food[1];

    // $food = [
    //   "fruits" => array("apple", "banana", "cherry"), 
    //   "meat" => array("chicken", "fish", "sheep"), 
    //   "vegetables" => array("cucumber", "carrot"), 
    // ];

    // echo $food["vegetables"][0];
    */
    
    /* Built in function
    
    // $string = "Hel lo, wor ld";

    // echo strlen($string);
    // echo strpos($string, "Wo");
    // echo str_replace("world", "Kane", $string);
    // echo strtolower($string);
    // echo strtoupper($string);
    // echo substr($string, 2, strlen($string));
    // echo explode(" ", $string); // returns error
    // print_r(explode(" ", $string));

    // $number = -5.5;

    // echo abs($number);
    // echo round($number);
    // echo pow(2,3);
    // echo sqrt(16);
    // echo rand(1, 100);

    // $array1 = ["apple", "banana", "orange"];
    // $array2 = ["kiwi"];

    // echo count($array);
    // echo is_array($array);
    // array_push($array, "kiwi");
    // print_r($array);

    // array_pop($array);
    // print_r($array);

    // print_r(array_reverse($array));
    // print_r(array_merge($array1, $array2));
    // array_splice($array1, 2, 0, $array2);
    // print_r($array1);

    // echo date("Y-m-d H:i:s");

    // $date = "2023-04-11 12:00:00";
    // echo strtotime($date);
    // $result = time() - strtotime($date);

    // echo $result;
    // echo time(); // use to get the difference between then and now

    // date_default_timezone_set('Asia/Manila');
    // $currentDateTime = date("Y-m-d H:i:s");

    // echo $currentDateTime;
    
    // echo date('Y');
    */

    /* 
    User function
    
      // function sayHello() {
      //   // echo "Hello, World!";
      //   return "Hello, World!";
      // }

      // $test = sayHello();
      // echo $test;

      // function sayHello($name) {
      //   return "Hello, $name";
      // }
      
      // $test = sayHello("Kane");
      // echo $test;
      
      // function sayHello($name = "Gerickson") { 
      //   return "Hello, $name";
      // } // default value
  
      // $test = sayHello("Kane");
      // echo $test;

      // function sayHello(string $name) { 
      //   return "Hello, $name!";
      // }
  
      // $test = sayHello(123);
      // echo $test;

       function calculator(int $num1, int $num2) {
        $result = $num1 + $num2;
        return $result;
      }

      $test = calculator(2,5);
      echo $test; 
      // $test = "Kane";

      // function calculator(int $num1, int $num2) {
      //   // global $test;
      //   $result = $num1 + $num2;
      //   return $result;
      // }

      // $test = calculator(2,5);
      // echo $test;
    */
    
    /* 
    Scopes
    
    $test = "test";

    // function myFunction() {
      // global $test;
      // $localVar = "Hello, World!";

      // return $localVar;
      // return $GLOBALS["test"];

      // Declare a static variable
      // static $staticVar = 0;

      // Increment
      // $staticVar++;

      // return $staticVar;
    // }

    // echo myFunction();
    // echo myFunction();

    class MyClass {
      public $classVar = "Hello, World!";

      public function myMethod() {
        echo $this->classVar;
      }
    }
    */

    /* 
    Constants
      -- Will automatically global
    
      define("PI", 3.14);
      define("NAME", "KANE");
      define("IS_ADMIN", true);
  
      echo PI;
      echo NAME;
      echo IS_ADMIN;
  
      function test() {
        echo PI;
      }
  
      test();
    */
    

    /* 
    Loops
    
    // $test = 5;

    // for ($i = 1; $i <= $test; $i++) {
    //   echo "This is iteration number: $i <br>";
    // }

    // $boolean = true;

    // $test = 5;
    // while ($test < 10) {
    //   echo $test;  
    //   $test++;
    // }
    // $test = 10;
    // do {
    //   echo $test;  
    //   $test++;
    // } while($test < 10);

    // $fruits = ["Apple", "Banana", "Orange"];

    // foreach($fruits as $fruit) {
    //   echo "This is a $fruit <br>";
    // }
    // $fruits = ["Apple", "Banana", "Orange"];

    // foreach($fruits as $index => $fruit) {
    //   echo "This is a $fruit with an index of $index <br>";
    // }
    // $fruits = ["Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange"];

    // foreach($fruits as $fruit => $color) {
    //   echo "This is a $fruit that has a color of $color <br>";
    // }
    
    */

    /* 
    Inserting data in database
    
    
    */

    ?>

    <!-- <h3 class="text-center">Signup</h3>

    <form action="includes/formhandler.inc.php" method="post" class="w-50 m-auto mt-5">
      <input class="form-control mb-2" type="text" name="username" placeholder="Username">
      <input class="form-control mb-2" type="password" name="pwd" placeholder="Password">
      <input class="form-control mb-2" type="text" name="email" placeholder="E-mail">
      <button class="btn btn-primary">Signup</button>
    </form> -->

    <!-- Update and Delete
    <div class="container mb-5">
      <h3 class="text-center">Update Account</h3>

      <form action="includes/userupdate.inc.php" method="post" class="w-50 m-auto mt-5">
        <input class="form-control mb-2" type="text" name="username" placeholder="Username">
        <input class="form-control mb-2" type="password" name="pwd" placeholder="Password">
        <input class="form-control mb-2" type="text" name="email" placeholder="E-mail">
        <button class="btn btn-primary">Signup</button>
      </form>
    </div>

    <div class="container mb-5">
      <h3 class="text-center">Delete Account</h3>

      <form action="includes/userdelete.inc.php" method="post" class="w-50 m-auto mt-5">
        <input class="form-control mb-2" type="text" name="username" placeholder="Username">
        <input class="form-control mb-2" type="password" name="pwd" placeholder="Password">
        <button class="btn btn-primary">Signup</button>
      </form>
    </div> -->

    <!-- Select
    <form class="w-50 mt-5 m-auto" action="search.php" method="post">
      <label for="search" class="form-label"></label>
      <div class="input-group">
        <input id="search" name="usersearch" type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="basic-addon2">
        <button class="input-group-text" id="basic-addon2">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </form>
     -->



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>