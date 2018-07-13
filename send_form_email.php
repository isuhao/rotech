<?php
session_start();
if(isset($_POST['femail'])) {
 
    $email_to = "biuro@ro-tech.pl";
    $email_subject = "Nowa wiadomosc - ROTECH";  
 
    $fname = $_POST['fname'];
    $email_from = $_POST['femail'];
    $message = $_POST['ftextmessage'];
 
    $email_message = "Szczegoly wiadomosci:\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Imie: ".clean_string($fname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Wiadomosc: ".clean_string($message)."\n";
 
// create email headers
$headers = 'Reply-to: '.$email_from."\r\n";
mail($email_to, $email_subject, $email_message, $headers, '-f biuro@ro-tech.pl');  

$_SESSION["message_sent"] = "success";
header("Location: http://ro-tech.pl/"); 

 
}
?>