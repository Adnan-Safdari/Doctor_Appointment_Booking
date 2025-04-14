<?php

include './database/db.php';  // Connecting to the database

function registerUser($conn, $name, $email, $password, $role = 'patient') {

    // Prepare the SQL query
    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        return mysqli_insert_id($conn);  // Returns the ID of the new record
    } else {
        return false;  // Returns false
    }
}

?>


