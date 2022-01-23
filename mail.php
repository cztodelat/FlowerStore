<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

$alert = '';

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

try
{
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
$mail ->Subject= ("$subject");
$mail ->Body = "
  I'm $name
  My email: $email
  $message
"; 

$mail -> send();

$alert = '<div class = "alert-success">
            <span> Messege sent!</span>
          </div>';

} catch (Exception $e)
{
    $alert = '<div class = "alert-error">
            <span> '.$e -> getMessage().' </span>
          </div>';
}
}

?>