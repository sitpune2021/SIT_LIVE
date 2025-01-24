

<?php

 
   $nm=isset($_POST['nm']) ? $_POST['nm']: ' ';
  
     $em=isset($_POST['em']) ? $_POST['em']: ' ';
     $cm=isset($_POST['cm']) ? $_POST['cm']: ' ';
     $subject=isset($_POST['subject']) ? $_POST['subject']: ' ';
     $msg=isset($_POST['msg']) ? $_POST['msg']: ' ';

$to = "ashwinisitsolutions@gmail.com";
$subject = "Message from Website";
 
 

$txt = "Name = ". $nm .  "\r\n Email =" . $em . "\r\n Company= " . $cm . "\r\n Message =" . $msg . "\r\n Subject =" . $subject . "\r\n";

$headers ="From :ashwinisitsolutions@gmail.com"; 



if(mail($to, $subject, $txt, $headers))
{
    echo "Mail sent successfully";
}

else 
{   
    echo "Error sending mail";
}

  function function_alert($txt) {

   echo "<script>alert('$txt');</script>";
}
   header("Location: thanku.html");
   


?>
