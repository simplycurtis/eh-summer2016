<?php
$siteKey = '6LeA_Q4TAAAAAJOYsFu1n00_M_ybhkYO79lJ9sVR';
$secret = '6LeA_Q4TAAAAAPzM9JUeNt7G0FJPbneJWF6dJfGZ';

require('recapcha/autoload.php');
$recaptcha = new \ReCaptcha\ReCaptcha($secret, new \ReCaptcha\RequestMethod\CurlPost());
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);


if ($resp->isSuccess()) {
    //variables//
    $myemail = 'info@eaglehillconsulting.com';
    $email_address = $_POST['email'];
    $captcha = $_POST['g-recaptcha-response'];

//send//
    $to = $myemail;
    $email_subject = "Summer 2016 Inquiry";
    $email_body = "You have received a new inquiry.\n".
    "Email: $email_address\n".
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to, $email_subject, $email_body, $headers);
    
    //confirmation somehow//
    header("Location: http://staging.cchangeinc.com/eaglehill/summer/thanks.php");
    //header("Location: http://eaglehillconsulting.com/summer/thanks.html");
} else {
    $errors = $resp->getErrorCodes();
    $response = ($errors)? "true":"false";
    header("Location: http://eaglehillconsulting.com/summer/?name="."&email_address=".urlencode($_POST['email'])."&error=".$response);
}


?>