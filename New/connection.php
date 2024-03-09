<?php
try {
    // Your database connection code here
    // For example: $conn = new mysqli($servername, $username, $password, $dbname);
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $db_name = "database1";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    // Error handling
    if ($conn->connect_error) {
        throw new Exception("Database connection error: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die($e->getMessage());
}
?>
    