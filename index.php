<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP - Advance Practice
        </title>
    </head>
<body>

<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  static $b = 0;
  echo "<p>Variable x inside function is: $b</p>";

  $b = $b + 5;
}
myTest();
myTest();
myTest();
myTest();


echo "<p>Variable x outside function is: $x</p>";
?>  

</body>
</html>