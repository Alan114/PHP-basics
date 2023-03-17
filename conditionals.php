<?php

   $user = "Alan";

   if($user === "Alan"){
    echo "Hello John!";
   } else {
    echo "I don't know you!";
   }

   echo <br><br>;

   $age = 18;

   if($age >= 13){
    echo "You are allowed to enter the amusement park!";
   } else {
    echo "You can't enter the amusement park!";
   }

   if($age >= 21 && $user === "Alan"){
    echo "${user} welcome to the the astrophysics club!";
   } else {
    echo "Sorry, you are not Alan, or you are not 21 yet!";
   }

   if($age >= 18 || $user === "Alan"){
    echo "${user} is allowed to drive a car!";
   } else {
    echo "Sorry, you are not Alan, or you are not 21 yet!";
   }

?>