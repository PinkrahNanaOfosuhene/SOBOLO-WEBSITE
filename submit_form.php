<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email Settings
$to = "pinkrahnanaofosuhene9690@gmail.com"; // Your Gmail address
$subject = "New Order/Message from $name";
$body = "You have a new order/message from $name ($email):\n\n$message";
$headers = "From: noreply@sobolostore.com"; // Sender's email

// SMTP settings for Gmail
$mail_host = "smtp.gmail.com";
$mail_username = "your-email@gmail.com"; // Your Gmail email address
$mail_password = "your-email-password"; // Your Gmail password or app password

// Set SMTP options
ini_set("SMTP", $mail_host);
ini_set("smtp_port", 587);
ini_set("sendmail_from", $mail_username);

// Send the email
if(mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Message could not be sent.";
}
?>
