<?php
include 'admincon.php';
session_start();

// CSRF Protection (recommended to include a token in the form)
if ($_SESSION['token'] !== $_POST['csrf_token']) {
    http_response_code(403); // Forbidden
    exit('Forbidden: Invalid CSRF token.');
}

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
    exit('Invalid input: Required fields missing.');
}

// Sanitize and validate input
$name = trim(htmlspecialchars($_POST['name']));
$type = trim(htmlspecialchars($_POST['type']));
$price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);
$status = trim(htmlspecialchars($_POST['status']));
$description = trim(htmlspecialchars($_POST['description']));
$engine_size = filter_var($_POST['engine_size'], FILTER_VALIDATE_INT);
$transmission = trim(htmlspecialchars($_POST['transmission']));
$top_speed = filter_var($_POST['top_speed'], FILTER_VALIDATE_INT);
$power = filter_var($_POST['power'], FILTER_VALIDATE_INT);
$fuel_consumption = trim(htmlspecialchars($_POST['fuel_consumption']));
$fuel_tank_capacity = filter_var($_POST['fuel_tank_capacity'], FILTER_VALIDATE_INT);
$weight = trim(htmlspecialchars($_POST['weight']));
$clutch_type = filter_var($_POST['clutch_type'], FILTER_VALIDATE_INT);
$brake_type = filter_var($_POST['brake_type'], FILTER_VALIDATE_INT);
$front_tire_size = trim(htmlspecialchars($_POST['front_tire_size']));
$rear_tire_size = filter_var($_POST['rear_tire_size'], FILTER_VALIDATE_INT);
$key_system = trim(htmlspecialchars($_POST['key_system']));
$created_at = date('Y-m-d H:i:s'); // Current timestamp

if ($price === false || $engine_size === false || $top_speed === false || $power === false) {
    http_response_code(400);
    exit('Invalid numeric inputs.');
}

// Image handling
$imagePaths = [];
$uploadDir = 'uploads/motorcycles/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

if (isset($_FILES['images']) && !empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $key => $tmpName) {
        $fileName = preg_replace('/[^a-zA-Z0-9\-_\.]/', '', basename($_FILES['images']['name'][$key]));
        $targetFilePath = $uploadDir . uniqid() . '_' . $fileName;

        // Validate file type and size
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

        // Move file
        if (!move_uploaded_file($tmpName, $targetFilePath)) {
            http_response_code(500);
            exit('Failed to upload images.');
        }

        $imagePaths[] = $targetFilePath;
    }
} else {
    http_response_code(400);
    exit('No images uploaded.');
}

// Insert data into the database
try {
    $conn->begin_transaction();

    // Insert into `motorcycle`
    $sqlMotorcycle = "
        INSERT INTO motorcycle (name, type, price, status, description, created_at)
        VALUES (?, ?, ?, ?, ?, ?)
    ";
    $stmt = $conn->prepare($sqlMotorcycle);
    $stmt->bind_param('ssdsss', $name, $type, $price, $status, $description, $created_at);
    if (!$stmt->execute()) {
        throw new Exception($stmt->error);
    }
    $motorcycleId = $conn->insert_id;

    // Insert into `motorcycle_specs`
    $sqlSpecs = "
        INSERT INTO motorcycle_specs (motorcycle_id, engine_size, transmission, top_speed, power, fuel_consumption, fuel_tank_capacity, weight, clutch_type, brake_type, front_tire_size, rear_tire_size, key_system)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ";
    $stmtSpecs = $conn->prepare($sqlSpecs);
    $stmtSpecs->bind_param('iisiisiiissis', $motorcycleId, $engine_size, $transmission, $top_speed, $power, $fuel_consumption, $fuel_tank_capacity, $weight, $clutch_type, $brake_type, $front_tire_size, $rear_tire_size, $key_system);
    if (!$stmtSpecs->execute()) {
        throw new Exception($stmtSpecs->error);
    }

    // Insert into `motorcycle_images`
    $sqlImages = "INSERT INTO motorcycle_images (motorcycle_id, image_path) VALUES (?, ?)";
    $stmtImages = $conn->prepare($sqlImages);
    foreach ($imagePaths as $path) {
        $stmtImages->bind_param('is', $motorcycleId, $path);
        if (!$stmtImages->execute()) {
            throw new Exception($stmtImages->error);
        }
    }

    $conn->commit();

    // Redirect after successful insertion
    header('Location: addbike.php?success=1');
    exit();
} catch (Exception $e) {
    $conn->rollback();
    error_log("Error inserting motorcycle: " . $e->getMessage());
    http_response_code(500);
    exit('An error occurred. Please try again later.');
}
