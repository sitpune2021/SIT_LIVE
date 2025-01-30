<?php

$nm = isset($_POST['nm']) ? $_POST['nm'] : '';
$em = isset($_POST['em']) ? $_POST['em'] : '';
$cm = isset($_POST['cm']) ? $_POST['cm'] : '';
$subject = isset($_POST['subject']) ? $_POST['subject'] : '';
$msg = isset($_POST['msg']) ? $_POST['msg'] : '';

$to = "ashwinisitsolutions@gmail.com";
$subjectMail = "Message from Website";

$txt = "Name: " . $nm . "\r\nEmail: " . $em . "\r\nCompany: " . $cm . "\r\nMessage: " . $msg . "\r\nSubject: " . $subject . "\r\n";

$headers = "From: ashwinisitsolutions@gmail.com";

if (!empty($nm) && !empty($em) && !empty($cm) && !empty($subject) && !empty($msg)) {
    if (mail($to, $subjectMail, $txt, $headers)) {
        $message = "<p style='color: green;'>Mail sent successfully!</p>";
    } else {
        $message = "<p style='color: red;'>Error sending mail. Please try again.</p>";
    }
} else {
    $message = "<p style='color: red;'>All fields are required.</p>";
}

?>