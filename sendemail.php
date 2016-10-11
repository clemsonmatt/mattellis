<?php

// header('Refresh: 5; url=index.php');
header('Location: http://mattellis.herokuapp.com/index.php?email=success');
echo '<html><body style="background-color: #f4f5f6;">
        <div style="background-color: #fff; border-radius: 3px; border: 1px solid #ddd; margin: 25px; padding: 15px; color: #777;">
            Thanks for the message! It was successfully sent to me and I should reply shortly if needed.<br><br>This will redirect in 5 seconds.
        </div>
    </body></html>';

$to        = 'mellis0292@gmail.com';
$from      = 'mlellis@clemson.edu';
$from_name = 'Matt Ellis (mattellis.herokuapp.com)';

$sender_name  = $_POST['name'];
$sender_email = $_POST['email'];

$subject = "A message from your site";
$message = $_POST['message'];

$headers = "From: $from_name <$from>" . "\r\n" .
           "Reply-To: $sender_name <$sender_email>" . "\r\n" .
           "Content-type: text/html; charset=iso-8859-1" . "\r\n";

$message = "<h4>This message from $sender_name &lt;$sender_email>:</h4>
<br>
<p style='margin-left:15px;'>".$message."</p>
<br><br>
<p style='color:#999;'>This was a message sent from your site</p>";

mail($to, $subject, $message, $headers);
