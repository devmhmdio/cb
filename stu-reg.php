<?php
// $to = 'contact@coursebees.com';


    $curl = curl_init();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];


    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\n  \"personalizations\": [\n    {\n      \"to\": [\n        {\n          \"email\": \"contact@coursebees.com\"\n        }\n      ],\n      \"subject\": \"Student Registration\"\n    }\n  ],\n  \"from\": {\n    \"email\": \"contact@coursebees.com\"\n  },\n  \"content\": [\n    {\n      \"type\": \"text/html\",\n      \"value\": \"$name<br>$email<br>$phone<br>$dob<br>$gender<br>$address\"\n    }\n  ]\n}",
        CURLOPT_HTTPHEADER => array(
          "authorization: Bearer [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]",
          "cache-control: no-cache",
          "content-type: application/json"
        ),
      ));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
header('Location: index.php');


if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

// $content = "Name: " . $name . " \n" . "Email: " . $email . " \n" . "Phone: " . $phone . " \n" . "DOB: " . $dob . " \n" . "Address: " . $address;
// mail($to, 'From: Student Registration', $content);
