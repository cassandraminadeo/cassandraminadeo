<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Your email address
    $to = "cassieminadeo@gmail.com";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Message body
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Additional headers
    $headers = "From: $email";

    // Attempt to send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>

