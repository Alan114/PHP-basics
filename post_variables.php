<?php
  if($_POST){
    $family = array("John", "Sarah", "Jack", "Kate");

    $isKnown = false;

    foreach($family as $value){
        if($value == $_POST['name']){
            $isKnown = true;
            break;
        }
    }

    if($isKnown){
        echo "Hi there, " . $_POST['name'] . "!";
    } else {
        echo "I don't know you!";
    }
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
    <form method="post">
      <p>What is your name?</p>
      <p><input type="text" name="name"></p>
      <p><input type="submit" value="Submit"></p>
    </form>
</body>
</html>