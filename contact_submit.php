<?php
/**
 * This program is owened and written by:
 * Author: Vaugen Wakeling
 * Company: Astro Web
 * Address: www.astroweb.co.za
 * Version: 1.0
 * Don't remove this comment!!!
 */

//Require contact class from class folder
require 'contact.class.php';

//Start ContactSubmit class
$email = new ContactSubmit();

//Collect Pramaters
$email->from    = $_POST['email'];
$email->sendTo  = "milosavleskidejan@gmail.com";//Put the email address you want to recive emails on here.
$email->name    = $_POST['name'];
$email->lastname    = $_POST['lastname'];
$email->subject = $_POST['name'];
$email->message = "
From: ".$_POST['email']."
Name: ".$_POST['name']."
Lastname: ".$_POST['lastname']."
City: ".$_POST['subject']."
Message: ".$_POST['message']."

";

//SendMail
$email->sendMail();

//Redirect

$email->redirect("success.php");
?>

