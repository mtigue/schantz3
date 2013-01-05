<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php 

$back = $_SERVER['HTTP_REFERER'];

$name = $_GET['name']; 
$business = $_GET['business']; 
$email = $_GET['email']; 

echo "Thanks ". $name. " from ". $business. ". We'll send the certificate to ". $email. ".";

?>







<?php 

$subject = "schantz app test";
$message = $name. $business. $email;


 $headers = "From: " .$email.  "\r\n".
    "Reply-To: " .$email. "\r\n".
    "Content-type: text/html". "\r\n".
    'X-Mailer: PHP/' . phpversion();
    
    mail("michaeltigue@gmail.com", "$subject", "$message", "$headers" );

?>




</body>

</html>
