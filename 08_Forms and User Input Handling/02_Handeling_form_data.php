<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Display the data
    echo "<h2>Form Submission Successful!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
} else {
    echo "<p>No form data submitted.</p>";
}

/*
$_SERVER["REQUEST_METHOD"]: Checks if the form was submitted using the POST method.

$_POST: An associative array that contains the form data sent via the POST method.

*/
