<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $aviation = $_POST['aviation'];
    $beauty = $_POST['beauty'];
    $english = $_POST['english'];
    $exp = $_POST['exp'];
    $personal = $_POST['personal'];
    
    $content = "Name: " . $name . "<br>" . "Email: " . $mail . "<br>" . "Phone: " . $phone . "<br>" . "Age: " . $age . "<br>" . "DOB: " . $dob . "<br>" . "Specialised category: " . "Aviation: " . $aviation . "<br>" . "Beauty: " . $beauty . "English: " . $english . "<br>" . "Relevant Experience: " . $exp . "<br>" . "Personal Experience: " . $personal;
}

// require("vendor/autoload.php"); // If you're using Composer (recommended)

require("sendgrid-php/sendgrid-php.php");

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("contact@coursebees.com", "Course Bees - Teacher Registration");
$email->setSubject("Teacher Registration");
$email->addTo("contact@coursebees.com", "Course Bees - Teacher Registration");
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
header('Location: teacher-registration.php');