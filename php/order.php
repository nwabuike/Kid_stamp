<?php
require_once("db_connect.php");
date_default_timezone_set("Africa/Lagos");

if ((isset($_POST['senderName']) && $_POST['senderEmail'] != '')) {

    // $i = implode(" ", $_POST['bundle_jamb']);
    $user_name = $conn->real_escape_string($_POST['senderName']);

    $user_email = $conn->real_escape_string($_POST['senderEmail']);
    $user_phone = $conn->real_escape_string($_POST['senderPhone']);
    $user_address = $conn->real_escape_string($_POST['senderAddress']);
    $user_state = $conn->real_escape_string($_POST['senderState']);
    $user_package = $conn->real_escape_string($_POST['senderPackage']);
    $user_date = date("M d, Y h:i a");
    $sql = "INSERT INTO kid_stamp (name, email, phone, address, state, package, created_at) 
VALUES('" . $user_name . "', '" . $user_email . "', '" . $user_phone . "', '" . $user_address . "', '" . $user_state . "','" . $user_package . "','" . $user_date . "')";
    // echo $sql;
    if (!$result = $conn->query($sql)) {
        $output = json_encode(array('type' => 'error', 'text' => 'There was an error running the query [' . $conn->error . ']'));
        die($output);
        // die('There was an error running the query [' . $conn->error . ']');
    } else {
        require_once("mailer.php");
        // require_once("./Emailing.php");
        // header("Location: ../../thankYou.php");
        $output = json_encode(array('type' => 'message', 'text' => 'Hi ' . $user_name . ', thank you for the message. We will get back to you shortly.'));
        die($output);
    }
    return !$result;
} else {
    $output = json_encode(array('type' => 'error_emptyfield', 'text' => 'Oops!! There was a problem with your submission. Please complete the form and try again. [' . $conn->error . ']'));
    die($output);
    // echo 'Oops!! There was a problem with your submission. Please complete the form and try again.';
    // die('<h4 class="alert alert-danger">Oops! There was a problem with your submission. Please complete the form and try again.</h4>');
}
