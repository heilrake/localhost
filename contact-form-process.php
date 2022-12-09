<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Thank you for contacting us. We will be in touch with you very soon.
</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$phpmailer = new PHPMailer(true);

if (isset($_POST['Email'])) {

    $email_from = "spemisp40@gmail.com";
    $email_subject = "New form submissions";
    $name = $_POST['Name']; 
    $email = $_POST['Email']; 
    $message = $_POST['Message']; 

    try {
      // Configure SMTP
      $phpmailer->isSMTP();
      $phpmailer->SMTPAuth = true;
      $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    
      // ENV Credentials
      // $phpmailer->Host = getenv("MAILERTOGO_SMTP_HOST", true);
      // $phpmailer->Port = intval(getenv("MAILERTOGO_SMTP_PORT", true));
      // $phpmailer->Username = getenv("MAILERTOGO_SMTP_USER", true);
      // $phpmailer->Password = getenv("MAILERTOGO_SMTP_PASSWORD", true);
      // $mailertogo_domain = getenv("MAILERTOGO_DOMAIN", true);
    
      // Mail Headers
      $phpmailer->setFrom($email_from, "Misha Kvochko");
      // Change to recipient email. Make sure to use a real email address in your tests to avoid hard bounces and protect your reputation as a sender.
      $phpmailer->addAddress($email, $name);
    
      // Message
      $phpmailer->isHTML(true);
      $phpmailer-> = $email_subject;
      $phpmailer-> = $message;
      $phpmailer-> = $name;
    
      // Send the Email
      $phpmailer->send();
      echo "Message has been sent";
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
    }
?>
