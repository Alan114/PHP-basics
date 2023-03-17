<?php
  // use your own emails to check if it works
  $emailTo = "codestarsjpbaugh@gmail.com";
  $subject = "I hope this works!";
  $body = "I am learning PHP!";
  $headers = "From: rob@robpercival.co.uk";

  if(mail($emailTo, $subject, $body, $headers)){
    echo "The email was sent successfully.";
  } else {
    echo "The email could not be sent!"
  }

?>