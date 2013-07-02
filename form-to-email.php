<?php
if(!isset($_POST['submit']))
{

	echo "Vyplnte prosím obe položky!";
}
else{
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'plastoveokna-klacansky.sk';
$email_subject = "Sprava z www.plastoveokna-klacansky.sk";
$email_body = "Prisla Vam sprava od $visitor_email:\n".
    "\n $message\n\n";
    
$to = "web@advertplus.sk";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: index.html');
 }  
?> 
