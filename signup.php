<?php include 'includes/header.php'; ?>

<?php
include './database/db.php';

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to home page
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // TODO
    //  Write code to write the signup details to database
    // (call the function written in helpers/functions.php)
    // Once data is put into the database, redirect using header() to index.php
}
?>

<div class="container py-5" style="background: #f6fcfc; min-height: 90vh;">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="row shadow-lg rounded-4 bg-white overflow-hidden">
                <div class="col-md-7 p-5">
                    <h3 class="fw-bold mb-2">Create Your Account</h3>
                    <p class="mb-4 text-muted">Join MediBook to access quality healthcare services</p>
                    <form method="POST">
                        <div class="row mb-3">
                            <div class="col">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Enter first name" >
                            </div>
                            <div class="col">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email address">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Create password">
                            </div>
                            <div class="col">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="termsCheck" style="border-color: #198754;" onchange="updateCheckboxStyle(this)">
                            <label class="form-check-label" for="termsCheck">
                                I agree to the Terms of Service and Privacy Policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2" style="background-color: #198754; border-color: #198754;">Create Account</button>
                    </form>
                    <div class="mt-3">
                        <span class="text-muted">Already have an account?</span>
                        <a href="login.php">Sign in</a>
                    </div>
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-center bg-light p-4">
                    <h5 class="fw-bold mb-3">Benefits of Joining</h5>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill" style="color: #198754;"></i> Easy appointment booking with top doctors</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill" style="color: #198754;"></i> Access to medical history and records</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill" style="color: #198754;"></i> Reminder notifications for appointments</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill" style="color: #198754;"></i> 24/7 customer support</li>
                    </ul>
                    <div class="border rounded p-3 bg-white">
                        <strong><i class="bi bi-shield-lock-fill" style="color: #198754;"></i>Secure & Private</strong>
                        <p class="mb-0" style="font-size: 0.95rem;">
                            Your personal information is encrypted and securely stored following HIPAA guidelines.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<!-- Bootstrap JS and Icons (if not already in header.php) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<script>
function updateCheckboxStyle(checkbox) {
    if (checkbox.checked) {
        checkbox.style.backgroundColor = '#198754';
        checkbox.style.boxShadow = '0 0 0 0.25rem rgba(25, 135, 84, 0.25)';
    } else {
        checkbox.style.backgroundColor = '#fff'; /* White background when unchecked */
        checkbox.style.boxShadow = 'none'; /* Remove shadow when unchecked */
    }
}

// Initialize style on page load
updateCheckboxStyle(document.getElementById('termsCheck'));
</script>
