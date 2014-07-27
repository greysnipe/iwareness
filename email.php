<?php
require_once 'vendor/autoload.php';
 

// Create the SMTP configuration
$transport = Swift_SmtpTransport::newInstance("smtp.gmail.com", 25);
$transport->setUsername("ianolinares13@gmail.com");
$transport->setPassword("232427nai");
 
// Create the message
$message = Swift_Message::newInstance();
$message->setTo(array(
   "ianolinares@ymail.com" => "iwwearness",
   "ianolinares13@gmail.com" => "iwwearness"
));
// $message->setCc(array("a.derosa@audero.it" => "Aurelio De Rosa"));
// $message->setBcc(array("boss@bank.com" => "Bank Boss"));
$message->setSubject("This email is sent using Swift Mailer");
$message->setBody("You're our best client ever.");
$message->setFrom("iwwearness@site.com", "iwearness");
// $message->attach(Swift_Attachment::fromPath("path/to/file/file.zip"));
 
// Send the email
$mailer = Swift_Mailer::newInstance($transport);
$mailer->send($message, $failedRecipients);
 
// Show failed recipients
print_r($failedRecipients);