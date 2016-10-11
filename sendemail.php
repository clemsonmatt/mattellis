<?php

header('Location: /index.php?email=success');

require 'vendor/autoload.php';

$senderName  = $_POST['name'];
$senderEmail = $_POST['email'];
$message     = $_POST['message'];

$from    = new SendGrid\Email(null, "noreply@mattellis.herokuapp.com");
$subject = "A message from your site";
$to      = new SendGrid\Email(null, "mellis0292@gmail.com");

$message = "<h4>$senderName ($senderEmail) sent you a message</h4>
    <div style='border-left: 3px solid #ddd; margin-left: 5px;'>
        <p style='margin-left: 15px;'>".nl2br($message)."</p>
    </div>
    <div style='width: 100%; height: 1px; background-color: #ddd;'></div>
    <p style='color:#999;'>This was a message sent from your site</p>";

$content = new SendGrid\Content("text/html", $message);
$mail    = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');

if (! $apiKey) {
    /* this is needed for dev, prod will already have in env vars */
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();

    $apiKey = getenv('SENDGRID_API_KEY');
}

$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
