<?php 

if ($_POST['action'] == 'Send'){ 
// Collect the data

$name = $_POST['name'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$captcha = strtolower($_POST['captcha']);
    // Check the data

if(empty($name) || empty($email) || empty($subject) || empty($message)) {

  $reply = 'Sorry, one or more fields are empty. All fields are     

            required.';

  include 'contact3.php';

  exit;

} 

// Check the captcha

if(empty($captcha) || $captcha != 'red') {

  $reply = 'The captcha answer is incorrect.';

  include 'contact3.php';

  exit;

} 
 } 
 else {

  include 'contact3.php';

} 
// Assemble the message

  $finalmessage = "Name: $firstname $lastname \n";

  $finalmessage .= "Email: $email \n";

  $finalmessage .= "Subject: $subject \n";

  $finalmessage .= "Message: \n $message"; 

// Send the message

  $to = 'photosplus5115@gmail.com';

  $from = "From: $email";

  $result = mail($to, $subject, $finalmessage, $from); 

// Let the client know what happened

  if ($result == TRUE) {

    $reply = "Thank you $name for contacting me.";

    unset($name);

    unset($email);

    unset($subject);

    unset($message);

    include 'contact3.php';

    exit;

  } else {

    $reply = "Sorry $name but there was an error and the message could not be sent.";

    unset($name);

    unset($email);

    unset($subject);

    unset($message);

    include 'contact3.php';

    exit;

  } 
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

