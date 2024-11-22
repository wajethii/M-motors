<?php
session_start();

if (isset($_POST['login_btn'])) {
    require_once 'admincon.php'; // Include your database connection file

    // Get user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    
    // Bind parameters
    $stmt->bind_param("ss", $username, $password);
    
    // Execute the statement
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User exists, set session variables and redirect to index.php
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        header('Location: index.php');
        exit();
    } else {
        // User does not exist, show error message and redirect back to login.php
        $_SESSION['error_message'] = 'Incorrect username or password';
        header('Location: login.php');
        exit();
    }
    
    // Close the statement
    $stmt->close();
} else {
    // If login button was not pressed, redirect to login.php
    header('Location: login.php');
    exit();
}

// Close the connection
$conn->close();
?>
