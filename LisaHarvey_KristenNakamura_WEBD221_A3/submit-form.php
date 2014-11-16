<?php

  $to = "lisamarieharvey@hotmail.com";
  $subject = "Blueasy Contact Message";

  $from = $_POST["email"];
  $name = $_POST["name"]; 
  $email = $_POST["email"]; 
  $message = $_POST["message"]; 

  //Check if fields are blank
  if($_POST["name"] == "" || $_POST["email"] == "" || $_POST["message"] == ""){

  	echo "Fill in all the fields.";

  } else {

  	// prepare email body text
  	$body = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message;
  	// send email 
  	$success = mail($to, $subject, $body, "From: <$email>");

    if($success){
      echo "You're message has been sent.";
    } else { 
      echo "There was an error";
    }
  }

?>