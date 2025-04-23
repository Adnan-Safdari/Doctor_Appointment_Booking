<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediBook - Book Your Doctor Appointment Online</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">MediBook</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Featured Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="./patient_dashboard.php">Patient Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="./doctor_dashboard">Doctor Dashboard</a></li>
                </ul>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- Display user name and profile picture if logged in -->
                    <div class="d-flex align-items-center">
                        <span class="me-2"><?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : 'User'; ?></span>
                        <img src="<?php echo isset($_SESSION['profile_picture']) ? htmlspecialchars($_SESSION['profile_picture']) : 'https://via.placeholder.com/40'; ?>" 
                             alt="Profile" 
                             class="rounded-circle" 
                             style="width: 40px; height: 40px;">
                    </div>
                <?php else: ?>
                    <!-- Display Login and Register buttons if not logged in -->
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="./signup.php">Signup</a></li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
