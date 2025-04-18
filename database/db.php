<?php

require_once __DIR__ . '/../load_env.php';  // path to load_env.php file
loadEnv(__DIR__ . '/../.env');    // Calling the fun and giving parth to our .env file

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$username = $_ENV['DB_USER'];
$password = $_ENV['DB_PASS'];
$database = $_ENV['DB_NAME'];

// Create connection
$conn = mysqli_connect($host, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
 