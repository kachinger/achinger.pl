<?

$from="webmail@achinger.pl";
$email=$_POST['contactEmail'];
$subject=$_POST['contactSubject'];
$message=$_POST['contactMessage'];

mail("achingerpl@gmail.com", $email, $subject, $message);

print "Your message has been sent: </br>$email</br>$subject</br>$message";

?>