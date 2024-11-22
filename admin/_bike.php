<?php
include 'admincon.php';
session_start();

// Asali mpe
if (!empty($_POST['extrainfo'])) {
    http_response_code(403); // Forbidden
    exit('Forbidden: Bot detected.');
}

// Validate required fields
if (
    empty($_POST['name']) || empty($_POST['type']) || empty($_POST['price']) ||
    empty($_POST['status']) || empty($_POST['engine_size']) || empty($_POST['transmission']) ||
    empty($_POST['top_speed']) || empty($_POST['power'])
) {
    http_response_code(400); // Bad Request
    exit('Invalid input: Required fields are missing.');
}

// Sanitize and assign POST data to variables
$name = trim($_POST['name']);
$type = trim($_POST['type']);
$price = (float)$_POST['price'];
$status = trim($_POST['status']);
$description = trim($_POST['description']);
$engine_size = (float)$_POST['engine_size'];
$transmission = trim($_POST['transmission']);
$top_speed = (float)$_POST['top_speed'];
$power = (float)$_POST['power'];
$created_at = date('Y-m-d H:i:s'); // Current timestamp

// Validate and handle image uploads
$imagePaths = [];
$uploadDir = 'uploads/motorcycles/';

// Ensure the directory exists
if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true)) {
    http_response_code(500); // Server error
    exit('Failed to create upload directory.');
}

if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmpName) {
        $fileName = basename($_FILES['images']['name'][$key]);
        $targetFilePath = $uploadDir . uniqid() . '_' . $fileName;

        // Check file type and size
        $fileType = mime_content_type($tmpName);
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (!in_array($fileType, $allowedTypes)) {
            http_response_code(400);
            exit('Invalid image type. Only JPG, PNG, and GIF are allowed.');
        }

        if ($_FILES['images']['size'][$key] > 5 * 1024 * 1024) { // 5MB limit
            http_response_code(400);
            exit('File size exceeds the 5MB limit.');
        }

        // Move the uploaded file
        if (!move_uploaded_file($tmpName, $targetFilePath)) {
            http_response_code(500); // Server error
            exit('Failed to upload images.');
        }

        $imagePaths[] = $targetFilePath;
    }
} else {
    http_response_code(400); // Bad Request
    exit('No images uploaded.');
}

// Insert motorcycle data into the database
$conn->autocommit(false); // Begin transaction

try {
    // Insert into motorcycles table
    $stmt = $conn->prepare("
        INSERT INTO motorcycle 
        (name, type, price, status, description, engine_size, transmission, top_speed, power, created_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->bind_param("ssisssssss", $name, $type, $price, $status, $description, $engine_size, $transmission, $top_speed, $power, $created_at);

    if (!$stmt->execute()) {
        throw new Exception("Failed to insert motorcycle data: " . $stmt->error);
    }

    $motorcycleId = $stmt->insert_id; // Get the last inserted ID
    $stmt->close();

    // Insert image paths into the motorcycle_images table
    $stmt = $conn->prepare("INSERT INTO motorcycle_images (motorcycle_id, image_path) VALUES (?, ?)");
    foreach ($imagePaths as $path) {
        $stmt->bind_param("is", $motorcycleId, $path);
        if (!$stmt->execute()) {
            throw new Exception("Failed to insert image record: " . $stmt->error);
        }
    }
    $stmt->close();

    $conn->commit(); // Commit transaction

    // Redirect to the same page with success flag
    header('Location: _bike.php?success=1');
    exit();

} catch (Exception $e) {
    $conn->rollback(); // Roll back transaction on error
    echo "Error: " . $e->getMessage(); // Display the specific error
    exit();
}