<?php
$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["message"];

$msg .= "</br></br>" . $name . "</br> " .  $email;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

echo $msg;
// send email
//mail("jamesbaker.web@gmail.com","My subject",$msg);
?>