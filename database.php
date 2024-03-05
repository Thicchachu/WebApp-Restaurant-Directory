<?php
// Database configuration
$host = 'localhost';
$dbname = 'foodhavendatabase';
$username = 'root';
$password = ''; 

// Attempt to connect to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Set character set to utf8mb4
    $pdo->exec("SET NAMES utf8mb4");
    
        // Check if the PDO object is created successfully
        if ($pdo instanceof PDO) {
            echo "Database connection established successfully.";
        } else {
            echo "Failed to establish database connection.";
        }
        
        // Execute a test query
        $stmt = $pdo->query("SELECT CURRENT_TIMESTAMP");
        // If no exception is thrown, the query executed successfully
        echo "Database connection established successfully.";
} catch (PDOException $e) {
    // If connection fails, display error message
    die("Database connection failed: " . $e->getMessage());
}
?>