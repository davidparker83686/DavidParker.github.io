<?php

$name = $_POST['name'];
$email= $_POST['email'];
$email= $_POST['subject'];
$message= $_POST['message'];
$to = "davidjparker91@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message. "\r\n Subject =" . $subject;
$headers = "From: noreply@davidparker83686.com" . "\r\n" .
"CC: dp6691.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
// redirect
// header("Location:thankyou.html");
?>





<?php -->

  $receiving_email_address = 'davidjparker91@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
 ?>
