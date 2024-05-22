<?php
  /* declare(strict_types=1); */
?>
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

    ?>


</body>
</html>