<?php
$to      = 'mail.sourav51@gmail.com';
$subject = 'Enquiry on Product';
$message = "\nName : " . $_REQUEST['txt_fname'] . "\nEmail : " . $_REQUEST['txt_email'] ;
$headers = 'From: $_REQUEST[txt_email]' . "\r\n" .
    'Reply-To: $_REQUEST[txt_email]' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers))
{
echo 'ok';
}
else { print_r(error_get_last());}
?>