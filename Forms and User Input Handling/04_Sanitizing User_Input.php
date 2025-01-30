<?php
/*
    Sanitization ensures that user input is safe to use. For example, we can remove unwanted characters from the input to prevent security issues like SQL injection or XSS attacks.
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);

    // Display sanitized data
    echo "<h2>Sanitized Form Data:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
}

/*
    htmlspecialchars(): Converts special characters to HTML entities to prevent XSS attacks.

    FILTER_SANITIZE_EMAIL: Removes illegal characters from the email.
*/