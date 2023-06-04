<?php
$toEmail = "goldenemeraldglobal@gmail.com";
$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
$mailBody = "Fullname: " . $user_name . "\n";
$mailBody .= "Email Address: " . $user_email . "\n";
$mailBody .= "Phone: " . $user_phone . "\n";
$mailBody .= "Address: " . $user_address . "\n";
$mailBody .= "State: " . $user_state . "\n";
$mailBody .= "Set: " . $user_package . "\n";
// $file = "files/codexworld.pdf";

if (mail($toEmail, "Roller Stamp Order form $user_name ", $mailBody, $mailHeaders)) {
    // $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', thank you for the message. We will get back to you shortly.'));
    // die($output);
    echo "Thank you";
} else {
    // $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact '.$toEmail .', Or call 09038356928'));
    // die($output);
    echo "Error: occured";
}
