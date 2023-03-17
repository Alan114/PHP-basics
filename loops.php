<?php

   $family = array("Alan", "Adam", "Edin", "Elvis");

   // foreach loop
   foreach($family as $key => $value){
     $family[$key] = $value . "Smith";
     echo "Array item " . $key " is " . $value . "<br>";
     echo "Update: $family[$key]<br>";
   }

   echo "<br><br>";
   
   // for loop
   for($i = 0; $i < sizeof($family); $i++){
     echo $family[$i] . "<br>";
   }
    
   echo "<br><br>";

   for($i = 10; $i >= 0; i--){
     echo $i;
   }

   // while loop
   $family = array("John", "Sarah", "Jack", "Kate");

   $i = 0;

   while($i < sizeof($family)){
     echo $family[$i] . "<br>";
     $i++;
   }  

?>