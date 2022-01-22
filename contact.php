<?php
use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

$mail ->isSMTP();
$mail -> Host = "smtp.gmail.com";
$mail -> SMTPAuth = true;
$mail -> Username = "projekttest7@gmail.com";
$mail -> Password = 'QWEqwe123';
$mail -> Port = 465;
$mail -> SMTPSecure = "ssl";

$mail -> isHTML(true);
$mail ->SetFrom($email, $name);
$mail ->AddAddress("projekttest7@gmail.com");
$mail ->Subject= ("$email ($subject)");
$mail ->Body = $message; 

if($mail -> send())
{
    $status = "success";
    $response = "Email sent!";
}
else
{
    $status = "failed";
    $response = "Something went wrong: <br>" . $mail ->ErrorInfo;
}

echo $response;
?>