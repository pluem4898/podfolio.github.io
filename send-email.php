<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate input (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the fields.";
        exit;
    }

    $to = "pluem4898@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // Handle the case where the form is not submitted via POST
    echo "Invalid request.";
}
?>


