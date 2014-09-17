<?

$email=$_POST['contactEmail'];
$subject=$_POST['contactSubject'];
$message=$_POST['contactMessage'];

mail("kachinger@hotmail.com",$subject,$message,"From: $email\n");

print "Your message has been sent! Thanks!";

?>