<?php 

$to = 'dennodhia83@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "From: $name <$email>" . "\r\n";
$headers = "Reply-To: $name <$email>" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

$body = "<h2>New contact form submission:</h2>";
$body .= "<p><strong>Name:</strong> $name</p>";
$body .= "<p><strong>Email:</strong> $email</p>";
$body .= "<p><strong>Subject:</strong> $subject</p>";
$body .= "<p><strong>Message:</strong> $message</p>";

$success = mail($to, $subject, $body, $headers);
if ($success) {
  echo "Thank you for contacting us!";
} else {
  echo "Oops! There was a problem submitting your form. Please try again later.";
}

?>