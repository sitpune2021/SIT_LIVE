<?php
$nm = isset($_POST['nm']) ? htmlspecialchars($_POST['nm']) : '';
$cm = isset($_POST['cm']) ? htmlspecialchars($_POST['cm']) : '';
$em = isset($_POST['em']) ? htmlspecialchars($_POST['em']) : '';
$subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
$msg = isset($_POST['msg']) ? htmlspecialchars($_POST['msg']) : '';

$to = "jyotisarok8@gmail.com";
$email_subject = "Message from " . $nm . " - " . $subject;

$txt = "Name = ". $nm .  "\r\n Email =" . $em . "\r\n Company= " . $cm . "\r\n Message =" . $msg . "\r\n Subject =" . $subject . "\r\n";

$headers = "From: " . $em; 

if(mail($to, $email_subject, $txt, $headers)) {
    header("Location: thanku.html");
    exit();
} else {
    echo "Error sending mail";
}
?>
