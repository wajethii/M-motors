<?php
$servername = "localhost";
$username = "root";
$password = ""; // Provide the correct password if needed
$dbname = "m_motors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}