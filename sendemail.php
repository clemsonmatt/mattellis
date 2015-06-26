<?php

header('Refresh: 5; url=index.php');
echo 'Thanks for the email! It was successfully sent to me and I should reply shortly if needed.<br><br>
      This will redirect in 5 seconds.';

$to        = 'mellis0292@gmail.com';
$from      = 'mlellis@clemson.edu';
$from_name = 'My Site';

$sender_name  = $_POST['name'];
$sender_email = $_POST['email'];

$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = "From: $from_name <$from>" . "\r\n" .
           "Reply-To: $sender_name <$sender_email>" . "\r\n" .
           "Content-type: text/html; charset=iso-8859-1" . "\r\n";

$message = "<h2>This message from $sender_name &lt;$sender_email>:</h2>
<br /><br />
<p style='margin-left:15px;'>".$message."</p>
<br /><br />
<p style='color:#999;'>This was a message sent from your site!</p>";

mail($to, $subject, $message, $headers);
