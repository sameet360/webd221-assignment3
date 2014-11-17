<?php
  // A very basic PHP form sample. A mix of the below examples:
  //------------------------------------------------------------
  // http://css-tricks.com/nice-and-simple-contact-form/
  // http://www.formget.com/send-an-email-on-form-submission-using-php/
  // http://stackoverflow.com/questions/16818279/how-to-redirect-to-success-fail-pages-after-php-form-submission

 
  $to = "allan-osborne@hotmail.com";
  $subject = "Email subject line";

  $from = $_POST["email"]; //$_POST has to match name prefix of tag <input type="text" (>name="email"<) id="email">
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
    	//redirects to a new page
      //header("Location: success.php");
      echo "You're message has been sent.";
    } else { 
      echo "There was an error. Try again later.";
    }
  }

?>