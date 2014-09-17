<?

$email=$_POST['contactEmail'];
$subject=$_POST['contactSubject'];
$message=$_POST['contactMessage'];

mail("achingerpl@gmail.com",$subject,$message,"From: $email\n");

print "Your message has been sent: </br>$subject</br>$message";

?>