<?php

   $myArray = array("John", "Ed", "Sally", "Tom");

   print_r($myArray);

   echo $myArray[2];

   echo "<br><br>";

   $foodArray = array();

   $foodArray[0] = "Apples";
   $foodArray[0] = "Bananas";
   $foodArray[0] = "Pizza";

   $foodArray[] = "Spaghetti";

   $foodArray["myFavoriteFood"] = "ice cream";

   print_r($foodArray);

   $languages = array(
    "Germany" => "German",
    "France" => "French",
    "USA" => "English"
   );

   echo "<br><br>";

   print_r($languages);

   unset($languages["France"]);

   echo "<br><br>";
   print_r($languages);

   echo "<br><br>";
   echo sizeof($languages);

?>