<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Add any validation or sanitization here

    // Send email
    $to = "ansarifirdosh123@gmail.com";
    $headers = "From: $email";
    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    mail($to, "Contact Form Submission", $mailBody, $headers);

    // You can also store the form data in a database if needed

    // Redirect to a thank you page or back to the portfolio page
    header("Location: thank_you.html");
    exit();
}
?>