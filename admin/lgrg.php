<?php
include 'admincon.php';
session_start();

// Function to sanitize input data
function sanitizeInput($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if the form is submitted for registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_btn'])) {
    // Get and sanitize input data
    $email = sanitizeInput($_POST['email']);
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);

    // Check if all fields are provided
    if (empty($username) || empty($email) || empty($password)) {
        $_SESSION['status'] = "All fields are required";
        header("Location: register.php"); // Redirect to registration page
        exit();
    }

    // Check if the username or email already exists
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['status'] = "Username or email already exists";
        header("Location: register.php"); // Redirect to registration page
        exit();
    }

    // Insert the new user into the database
    $stmt = $conn->prepare("INSERT INTO user (email, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $username, $password);

    if ($stmt->execute()) {
        $_SESSION['status'] = "Registration successful";
        header("Location: login.php"); // Redirect to login page
        exit();
    } else {
        $_SESSION['status'] = "Error: " . $stmt->error;
        header("Location: register.php"); // Redirect to registration page
        exit();
    }

    // Close the statement
    $stmt->close();
}

// Close database connection
$conn->close();

// Redirect back to login.php
header("Location: login.php");
exit();
