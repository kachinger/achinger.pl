<?

$from="webmail@achinger.pl";
$email=$_POST['contactEmail'];
$subject=$_POST['contactSubject'];
$message=$_POST['contactMessage'];

mail($email, $subject, $message, "From: ",$from);

print "Your message has been sent: </br>$email</br>$subject</br>$message";

?>