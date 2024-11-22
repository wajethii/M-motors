<?php
include 'dbcon.php'; // Include your database connection
session_start();

// Function to sanitize and validate input data
function sanitizeInput($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contact_btn'])) {
    // Get and sanitize input data
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $phone = sanitizeInput($_POST['phone']);
    $message = sanitizeInput($_POST['message']);

    // Server-side validation
    if (empty($name) || empty($email)) {
        $_SESSION['status'] = "Name and Email are required";
        header("Location: contact.php"); // Redirect back to the contact page
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "Invalid email format";
        header("Location: contact.php"); // Redirect back to the contact page
        exit();
    }

    if (!empty($phone) && !preg_match('/^\d{10,15}$/', $phone)) {
        $_SESSION['status'] = "Invalid phone number. Must be 10 to 15 digits.";
        header("Location: contact.php"); // Redirect back to the contact page
        exit();
    }

    // Insert the contact form data into the database using a prepared statement
    $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, message) VALUES (?, ?, ?, ?)");
    
    // Check if the statement was prepared successfully
    if ($stmt === false) {
        $_SESSION['status'] = "Error preparing the statement: " . $conn->error;
        header("Location: contact.php");
        exit();
    }

    // Bind the parameters
    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    // Execute the query and check for success
    if ($stmt->execute()) {
        $_SESSION['success'] = "Thank you for reaching out! We will get back to you shortly.";
        header("Location: index.php"); // Redirect to the index page after successful submission
        exit();
    } else {
        $_SESSION['status'] = "Error: " . $stmt->error;
        header("Location: contact.php"); // Redirect back to the contact page in case of an error
        exit();
    }

    // Close the prepared statement and connection
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
