<?php

$required_field = $_POST['required-field'];



$name = '';

if ($_POST['name']) {

    $name = strip_tags(trim($_POST['name']));

}



$text = '';

if ($_POST['email']) {

    $text = strip_tags(trim($_POST['email']));

}



$phone = '';

if ($_POST['phone']) {

    $phone = strip_tags(trim($_POST['phone']));

}



$headers = "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=UTF-8\r\n";



$msg = "<html><body style='font-family:Arial,sans-serif;'>";

$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>New request</h2>\r\n";

if (!empty($name)) {

    $msg .= "<p><strong>Name:</strong> " . $name . "</p>\r\n";

}



if (!empty($phone)) {

    $msg .= "<p><strong>Phone:</strong> " . $phone . "</p>\r\n";

}



if (!empty($text)) {

    $msg .= "<p><strong>Email:</strong> " . $text . "</p>\r\n";

}

$msg .= "</body></html>";





if (!empty($_POST[$required_field])) {

//     отправка сообщения

    if (mail("managersinitraining@gmail.com", "New request", $msg, $headers)) {

        $result = 1;

        echo json_encode($result);

    } else {

        $result = 0;

        echo json_encode($result);

    }



} else {

    $result = 0;

    echo json_encode($result);

}