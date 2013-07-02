<?php
if(!isset($_POST['submit']))
{

	echo "Vyplnte prosím povinné položky! ";
}
else{
$visitor_email = $_POST['mail'];
$name = $_POST['meno'];
$mesto = $_POST['mesto'];
$telefon = $_POST['telefon'];            
$Typ_plastoveho_profilu = $_POST['profil'];
$Povrchova_uprava_profilu = $_POST['farba'];
$typ1 = $_POST['typ1'];
$typ1_poc = $_POST['typ1_pocet'];
$typ2 = $_POST['typ2'];
$typ2_poc = $_POST['typ2_pocet'];
$typ3 = $_POST['typ3'];
$typ3_poc = $_POST['typ3_pocet'];
$typ4 = $_POST['typ4'];
$typ4_poc = $_POST['typ4_pocet'];
$typ5 = $_POST['typ5'];
$typ5_poc = $_POST['typ5_pocet'];
$typ6 = $_POST['typ6'];
$typ6_poc = $_POST['typ6_pocet'];
$typ7 = $_POST['typ7'];
$typ7_poc = $_POST['typ7_pocet'];
$typ8 = $_POST['typ8'];
$typ8_poc = $_POST['typ8_pocet'];

$dvere1 = $_POST['dvere1'];
$dvere1_poc = $_POST['dvere1_pocet'];
$dvere2 = $_POST['dvere2'];
$dvere2_poc = $_POST['dvere2_pocet'];
$dvere3 = $_POST['dvere3'];
$dvere3_poc = $_POST['dvere3_pocet'];


$montaz_okien =  $_POST['montaz_okien'];         
$demontaz_okien =  $_POST['demontaz_okien'];
$likvidacia_okien =  $_POST['likvidacia_okien'];
$murarske =  $_POST['murarske'];
$sietky =  $_POST['sietky'];

$zaluzie =  $_POST['zaluzie'];
$parapety =  $_POST['parapety'];

$poznamka =  $_POST['poznamka'];           
          
$email_from = 'plastoveokna-klacansky.sk';
$email_subject = "Kalkulacia z www.plastoveokna-klacansky.sk";
$email_body = "Prisla Vam sprava od $name, \n\n email:$visitor_email\n $mesto\n t.c.:$telefon\n\n\nObjednavka:".
"\n\n   Typ plastoveho profilu: $Typ_plastoveho_profilu  ".
"\n\n   Povrchova uprava profilu: $Povrchova_uprava_profilu  ".
    "\n\n\nOkna:\n\n";
    
if(strlen($typ1) > 0){
  $email_body = $email_body."otvaravo sklopne:\nRozmery: $typ1,    Pocet: $typ1_pocet\n\n";
}
if(strlen($typ2) > 0){
  $email_body = $email_body."otvarave:\nRozmery: $typ2,    Pocet: $typ2_pocet\n\n";
}
if(strlen($typ3) > 0){
  $email_body = $email_body."sklopne:\nRozmery: $typ3,    Pocet: $typ3_pocet\n\n";
}
if(strlen($typ4) > 0){
  $email_body = $email_body."pevne zasklenie:\nRozmery: $typ4,    Pocet: $typ4_pocet\n\n";
}
if(strlen($typ5) > 0){
  $email_body = $email_body."balkonova zostava:\nRozmery: $typ5,    Pocet: $typ5_pocet\n\n";
}
if(strlen($typ6) > 0){
  $email_body = $email_body."otvaravo sklopne + otvarave:\nRozmery: $typ6,    Pocet: $typ6_pocet\n\n";
}
if(strlen($typ7) > 0){
  $email_body = $email_body."otvarave + otvarave + otvaravo-sklopne:\nRozmery: $typ7,    Pocet: $typ7_pocet\n\n";
}
if(strlen($typ8) > 0){
  $email_body = $email_body."otvaravo sklopne + pevné zasklenie:\nRozmery: $typ8,    Pocet: $typ8_pocet\n\n";
}    
   
   
$email_body = $email_body."\n\n\nDvere:\n\n";
    
if(strlen($dvere1) > 0){
  $email_body = $email_body."balkonove:\nRozmery: $dvere1,    Pocet: $dvere1_pocet\n\n";
}
if(strlen($dvere2) > 0){
  $email_body = $email_body."vchodove:\nRozmery: $dvere2,    Pocet: $dvere2_pocet\n\n";
}
if(strlen($dvere3) > 0){
  $email_body = $email_body."interierove:\nRozmery: $dvere3,    Pocet: $dvere3_pocet\n\n";
}

$email_body = $email_body."\n\n\nSluzby:\n\n";

if($montaz_okien == 'value1'){
  $email_body = $email_body."  - Montaz okien\n\n";
}
if($demontaz_okien == 'value1'){
  $email_body = $email_body."  - Demontaz okien\n\n";
}
if($likvidacia_okien == 'value1'){
  $email_body = $email_body."  - Likvidacia okien\n\n";
}
if($murarske == 'value1'){
  $email_body = $email_body."  - Murarske vyspravky\n\n";
}
if($sietky == 'value1'){
  $email_body = $email_body."  - Sietky proti hmyzu\n\n";
}

$email_body = $email_body."\n\n\nDoplnky:\n\n";

if($zaluzie == 'value1'){
  $email_body = $email_body."  - Zaluzie\n\n";
}
if($parapety == 'value1'){
  $email_body = $email_body."  - Parapety\n\n";
}

 
if(strlen($poznamka) > 0){
  $email_body = $email_body."\n\n\n Poznamka:\n $poznamka";
} 
    
$to = "web@advertplus.sk";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: index.html');
 }  
?> 
