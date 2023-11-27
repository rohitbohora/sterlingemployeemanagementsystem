<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the registration form
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // ... other fields ...

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Perform database insertion (SQL query)
    // Check if email is unique
    // Insert user data into the 'employee' table
    // Handle success and error scenarios

    // Redirect to the login page
    header("Location: elogin.html");
    exit();
}
?>
