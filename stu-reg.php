<?php 
require 'mailer/PHPMailerAutoload.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];


$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->Username = 'contact@coursebees.com';
$mail->Password = 'Contact@321';

$mail->setFrom('contact@coursebees.com', 'CourseBees');
$mail->addAddress('contact@coursebees.com');

$mail->isHTML(true);
$mail->Subject = 'Student Registration Form';
// $mail->Body = '$name<br>$email<br>$phone<br>$dob<br>$gender<br>$address';
$mail->Body = 'oye hoye';

if (!$mail->send()) {
  echo "Email not sent";
} else {
  echo "Email sent";
}
}


?>