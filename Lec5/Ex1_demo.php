<?php
declare(strict_types=1); // strict requirement
    echo "Hello world<br/>";
    $test = 4;
    echo var_dump($test);
    echo "<br/>";
    echo is_int($test);
    echo "<br/>";
    echo strlen("Hello world!");
    echo "<br/>"; 

echo str_word_count("Hello world!") . "<br/>"; 

echo strrev("Hello world!") ."<br/>"; 

echo strpos("Hello world!", "world") . "<br/>"; 

echo str_replace("world", "Dolly", "Hello world!") . "<br/>"; 

$x = 5985;
var_dump(is_int($x));
echo "<br/>";

$x = 59.85;
var_dump(is_int($x));
echo "<br/>";

// Check if the type of a variable is float
$x = 10.365;
var_dump(is_float($x));
echo "<br/>";

// Check if a numeric value is finite or infinite
$x = 1.9e311;
var_dump($x);
echo "<br/>";
echo "<br/>";

// Invalid calculation will return a NaN value
$x = acos(1);
var_dump($x);

echo "<br/>";
echo "<br/>";
// Check if the variable is numeric
$x = 5985;
var_dump(is_numeric($x));
echo "<br/>";
$x = "5985";
var_dump(is_numeric($x));
echo "<br/>";
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br/>";
$x = "Hello";
var_dump(is_numeric($x));
echo "<br/>";
echo "<br/>";
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>

<?php echo "<br>"; echo(pi()); // zwraca 3.1415926535898?>
<?php echo "<br>"; echo(min(0, 150, 30, 20, -8, -200)); // zwraca -200 echo(max(0, 150, 30, 20, -8, -200)); // zwraca 150?>
<?php echo "<br>"; echo(abs(-6)); // zwraca 6,7?>
<?php echo "<br>"; echo(sqrt(64)); // zwraca 8?>
<?php 
echo "<br>"; echo(round(0.60)); // zwraca 1echo(okrągłe(0.49)); // zwraca 0
?> 
<?php echo "<br>"; echo(rand());?>
<?php echo "<br>"; echo(rand(10, 100)); ?>

<?php


echo "<br>"; 
echo "<br>"; 
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<br>"; 
echo "<br>"; 

define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];

echo "<br>"; 

$t = date("H")-14;
$t = 19;
echo $t . "<br/>";
  
  if ($t < "20") {
    echo "Have a good day!" . "<br/>";
  }
  
  if ($t < "10") {
      echo "Have a good day!" . "<br/>";
    } else {
      echo "Have a good night!" . "<br/>";
    }
  
    if ($t < "14") {
      echo "Have a good morning!" . "<br/>";
    } elseif ($t < "18") {
      echo "Have a good day!" . "<br/>";
    } else {
      echo "Have a good night!" . "<br/>";
    }
  
    $favcolor = "red";
  
  switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!" . "<br/>";
      break;
    case "blue":
      echo "Your favorite color is blue!" . "<br/>";
      break;
    case "green":
      echo "Your favorite color is green!" . "<br/>";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!" . "<br/>";
  }
  
  
  $x = 1;
  
  while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
  }
  
  echo "<br>"; 
echo "<br>"; 
  $x = 0;
  
  while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
  }
  
  echo "<br>"; 
echo "<br>"; 
  $x = 1;
  
  do {
    echo "The number is: $x <br>";
    $x++;
  } while ($x <= 5);
  
  $x = 6;
  
  echo "<br>"; 
echo "<br>"; 
  do {
    echo "The number is: $x <br>";
    $x++;
  } while ($x <= 5);
  
  echo "<br>"; 
echo "<br>"; 

  for ($x = 0; $x <= 10; $x++) {
      echo "The number is: $x <br>";
    }
  
    echo "<br>"; 
    echo "<br>"; 
    for ($x = 0; $x <= 100; $x+=10) {
      echo "The number is: $x <br>";
    }
    echo "<br>"; 
echo "<br>"; 
    $colors = array("red", "green", "blue", "yellow");
  
  foreach ($colors as $value) {
    echo "$value <br>";
  }

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

  foreach($age as $x => $val) {
    echo "$x = $val<br>";
  }
  
  $x = 0;
  
  while($x < 10) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
    $x++;
  }
  
  
  $x = 0;
  
  while($x < 10) {
    if ($x == 4) {
      $x++;
      continue;
    }
    echo "The number is: $x <br>";
    $x++;
  }
  
  function functionName () {
      //
      }
      
  
  function writeMsg() {
      echo "Hello world!<br/>";
    }
    
    writeMsg(); // call the function
  
    function familyName($fname) {
      echo "$fname Refsnes<br/>";
    }
    
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
  
    echo "<br>"; 
    echo "<br>"; 
    function familyNames($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
      }
      
      familyNames("Hege", "1975");
      familyNames("Stale", "1978");
      familyNames("Kai Jim", "1983");
      
      echo "<br>"; 
      echo "<br>"; 
      
      
      
      function addNumbers(int $a, int $b) {
          return $a + $b;
        }
          // echo addNumbers(5, "5");
        echo addNumbers(5, (int)"5");
          // echo addNumbers(5, 5.0);
        
        echo "<br>"; 
        echo "<br>"; 
        
        function setHeight(int $minheight = 50) {
            echo "The height is : $minheight <br>";
        }
        
        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);
        
        echo "<br>"; 
        echo "<br>"; 
        
        function sum(int $x, int $y):int {
            $z = $x + $y;
            return $z;
        }
        
        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4);
        
        echo "<br>"; 
        echo "<br>"; 
        
        
        function add_five(&$value) {
            $value += 5;
        }
        
        $num = 2;
        add_five($num);
        echo $num;
        
        echo "<br>"; 
        echo "<br>";
        
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        echo "<br>"; 
        
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
        echo "<br>";        
        
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);

        
        for($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }
        echo "<br>"; 
        echo "<br>"; 
        
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old.";
        
        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
          }
        
        
          $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
          );
        
          echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        
        for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
              echo "<li>".$cars[$row][$col]."</li>";
            }
            echo "</ul>";
          }        
        
        ?>

<?php
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z . "<br>";
?>

<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>
