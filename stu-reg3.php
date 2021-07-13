<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    
    $content = "Name: " . $name . "<br>" . "Email: " . $mail . "<br>" . "Phone: " . $phone . "<br>" . "DOB: " . $dob . "<br>" . "Gender: " . $gender . "<br>" . "Address: " . $address;
}

// require("vendor/autoload.php"); // If you're using Composer (recommended)

require("sendgrid-php/sendgrid-php.php");

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("contact@coursebees.com", "Course Bees - Student Registration");
$email->setSubject("Student Registration");
$email->addTo("contact@coursebees.com", "Course Bees - Student Registration");
$email->addContent(
    "text/html", "$content"
);

$sendgrid = new \SendGrid("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");
// getenv('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');
try {
      $response = $sendgrid->send($email);
      print $response->statusCode() . "\n";
      print_r($response->headers());
      print $response->body() . "\n";
} catch (Exception $e) {
      echo 'Caught exception: '. $e->getMessage() ."\n";
}
header('Location: student-registration.php');