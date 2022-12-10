<?php

$address = htmlspecialchars($_POST['email']);
$massage = htmlspecialchars($_POST['message']);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/PHPMailer.php');
require('PHPMailer/SMTP.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	//Server settings                     //Enable verbose debug output
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'sendmessage983@gmail.com';                     //SMTP username
$mail->Password   = 'qgldrkmvecdeqisr';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        //Enable implicit TLS encryption
$mail->Port       = 587;



	//Recipients
	$mail->setFrom('sendmessage983@gmail.com', 'Misha Kvochko');
	$mail->addAddress($address);     //Add a recipient
	


	//Content
	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'Fish Message';
	$mail->Body    = $massage;

	$mail->send();
	echo 'Message has been sent';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
