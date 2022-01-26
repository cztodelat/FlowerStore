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
$address = $_POST['address'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$message = $_POST['message'];
$productName = $_POST['productName'];

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
$mail ->SetFrom($name, 'projekttest7@gmail.com');
$mail ->AddAddress("projekttest7@gmail.com");
$mail ->Subject= ("New order");
$mail ->Body = "
    <strong>Product:</strong> $productName<br>
    <strong>I'm</strong> $name<br>
    <strong>My address:</strong> $address<br>
    <strong>My phone number:</strong> $phone<br>
    <strong>Suply date:</strong> $date<br>
    <strong>Message:</strong> $message<br>
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