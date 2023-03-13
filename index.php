<?php
   echo "<strong>Hello world!</strong>";

   $name = "Alan";

   define("MESSAGE", "Hello friends!");

   echo "<p>My name is $name</p>";

   echo "<p>I'd like to say " . MESSAGE . "</p>";

   $number = 45;

   $calculation = $number * 31 / 97 + 4;

   echo "The result of the calculation is $calculation";

   $myBool = true;

   echo "<p>This statement is true? " . $myBool . "<p>";

   echo $myBool ? "true" : "false";
   echo "<br>";

   $variableName = "name";

   echo $$variableName;
?>