<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Book Your Doctor Appointment Online</h1>
                    <p>Find and book appointments with the best doctors near you. Quick, easy, and secure.</p>
                    <a href="#" class="btn btn-success">Book Appointment</a>
                    <a href="#" class="btn btn-outline-success">View Doctors</a>
                </div>
                <div class="col-md-6">
                    <img src="assets\images\doctor_patient.png" alt="Doctor and Patient" class="img-fluid" id="main-doc-patient-img">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <select class="form-select">
                        <option selected>Select Specialty</option>
                        <option value="1">Cardiologist</option>
                        <option value="2">Dermatologist</option>
                        <option value="3">Neurologist</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select">
                        <option selected>Enter Location</option>
                        <option value="1">New York, NY</option>
                        <option value="2">Los Angeles, CA</option>
                        <option value="3">Chicago, IL</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="date" class="form-control">
                        <button class="btn btn-success" type="button">Search Doctors</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Doctors -->
    <section class="featured-doctors">
        <div class="container">
            <h2>Featured Doctors</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card doctor-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto d-block mt-3" alt="Doctor 1" style="width: 150px; height: 150px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. John Smith</h5>
                            <p class="card-text">Cardiologist</p>
                            <p class="card-text">4.8 (122 reviews)</p>
                            <p class="card-text">New York, NY</p>
                            <a href="#" class="btn btn-success">Book Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card doctor-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto d-block mt-3" alt="Doctor 2" style="width: 150px; height: 150px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. Sarah Johnson</h5>
                            <p class="card-text">Dermatologist</p>
                            <p class="card-text">4.9 (88 reviews)</p>
                            <p class="card-text">Los Angeles, CA</p>
                            <a href="#" class="btn btn-success">Book Appointment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card doctor-card">
                        <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto d-block mt-3" alt="Doctor 3" style="width: 150px; height: 150px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dr. Michael Chen</h5>
                            <p class="card-text">Neurologist</p>
                            <p class="card-text">4.7 (95 reviews)</p>
                            <p class="card-text">Chicago, IL</p>
                            <a href="#" class="btn btn-success">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <h2>How It Works</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/70" alt="Search Doctor" class="img-fluid mb-3">
                    <h5>Search Doctor</h5>
                    <p>Find the right doctor based on your needs and location.</p>
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/70" alt="Book Appointment" class="img-fluid mb-3">
                    <h5>Book Appointment</h5>
                    <p>Select your preferred time slot and book instantly.</p>
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/70" alt="Get Consultation" class="img-fluid mb-3">
                    <h5>Get Consultation</h5>
                    <p>Visit the doctor and get the care you need.</p>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php'; ?>
