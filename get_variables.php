<?php

  if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
    $theNumber = $_GET["number"];
    $i = 2;
    $isPrime = true;

    while($i <= $theNumber / 2){
      if($theNumber % $i === 0){
        $isPrime = false;
      }

      $i++;
    }

    if($isPrime){
      echo "<p>" . $theNumber . " is a prime number!</p>";
    } else {
      echo "<p>" . $theNumber . " is NOT a prime number!</p>";
    }
  } else if($_GET) {
    echo "<p>Please enter a positive whole number!</p>";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy page</title>
</head>
<body>
    <p>Please enter a whole number.</p>

    <form method="get">
      <input type="text" name="number">
      <input type="submit" value="Go!">
    </form>
</body>
</html>