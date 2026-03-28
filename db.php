<?php
// Show errors (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'inventory');
define('DB_PORT', 3307); // IMPORTANT: your MySQL runs on 3307

// Enable strict mysqli error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

    // Set charset
    $conn->set_charset('utf8mb4');

} catch (Exception $e) {
    // Stop execution if connection fails
    die('Database connection failed: ' . $e->getMessage());
}
?>