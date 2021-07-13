<?php 
use PHPMailer\PHPMailer\PHPMailer;
// $to = 'contact@coursebees.com';

if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();

  // smtp settings
  $mail->isSmtp();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "digisparsh.connect@gmail.com";
  $mail->Password = 'digisparsh@123';
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  // email settings
  $mail->isHTML(true);
  $mail->setFrom("digisparsh.connect@gmail.com");
  $mail->addAddress("digisparsh.connect@gmail.com");
  $mail->Subject = ("Student Registration Form");
  $mail->Body = $name . $email . $phone . $dob . $gender . $address;

  if ($mail->send()) {
    $status = "success";
    $response = "Email is sent!";
  } else {
    $status = "failed";
    $response = "Something went wrong: <br>" . $mail->ErrorInfo;
  }

  exit(json_encode(array("status" => $status, "response" => $response)));


// $content = "Name: " . $name . " \n" . "Email: " . $email . " \n" . "Phone: " . $phone . " \n" . "DOB: " . $dob . " \n" . "Gender: " . $gender . " \n" . "Address: " . $address;
// mail($to, 'From: Student Registration Form', $content);
// header('Location: index.php');
}