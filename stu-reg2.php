<?php 
// use PHPMailer\PHPMailer\PHPMailer;
// $to = 'contact@coursebees.com';

require 'vendor/autoload.php'; // If you're using Composer (recommended)

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mail = $_POST['email'];
  $phone = $_POST['phone'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];

  $content = "Name: " . $name . " \n" . "Email: " . $mail . " \n" . "Phone: " . $phone . " \n" . "DOB: " . $dob . " \n" . "Gender: " . $gender . " \n" . "Address: " . $address;


  $email = new \SendGrid\Mail\Mail(); 
  $email->setFrom("contact@coursebees.com", "Course Bees - Student Registration");
  $email->setSubject("Student Registration");
  $email->addTo("contact@coursebees.com", "Course Bees - Student Registration");
  
  $email->addContent(
      "text/html", "$content"
  );
  $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
  try {
      $response = $sendgrid->send($email);
      print $response->statusCode() . "\n";
      print_r($response->headers());
      print $response->body() . "\n";
  } catch (Exception $e) {
      echo 'Caught exception: '. $e->getMessage() ."\n";
  }


  // require_once "PHPMailer/PHPMailer.php";
  // require_once "PHPMailer/SMTP.php";
  // require_once "PHPMailer/Exception.php";

  // $mail = new PHPMailer();

  // smtp settings
  // $mail->isSmtp();
  // $mail->Host = "smtp.gmail.com";
  // $mail->SMTPAuth = true;
  // $mail->Username = "digisparsh.connect@gmail.com";
  // $mail->Password = 'digisparsh@123';
  // $mail->Port = 465;
  // $mail->SMTPSecure = "ssl";

  // email settings
  // $mail->isHTML(true);
  // $mail->setFrom("digisparsh.connect@gmail.com");
  // $mail->addAddress("digisparsh.connect@gmail.com");
  // $mail->Subject = ("Student Registration Form");
  // $mail->Body = $name . $email . $phone . $dob . $gender . $address;

  // if ($mail->send()) {
  //   $status = "success";
  //   $response = "Email is sent!";
  // } else {
  //   $status = "failed";
  //   $response = "Something went wrong: <br>" . $mail->ErrorInfo;
  // }

  // exit(json_encode(array("status" => $status, "response" => $response)));


// $content = "Name: " . $name . " \n" . "Email: " . $email . " \n" . "Phone: " . $phone . " \n" . "DOB: " . $dob . " \n" . "Gender: " . $gender . " \n" . "Address: " . $address;
// mail($to, 'From: Student Registration Form', $content);
header('Location: student-registration.php');
}