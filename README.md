# 🏥 Doctor Appointment Booking System

A full-stack web application that simplifies the process of booking, managing, and rescheduling doctor appointments. Patients can easily schedule appointments, and doctors can manage their schedules efficiently. Built using PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap.

---

## 📌 Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Screenshots](#screenshots)
- [Database Schema](#database-schema)
- [Setup Instructions](#setup-instructions)
- [Folder Structure](#folder-structure)
- [License](#license)

---

## ✅ Features

### 👨‍⚕️ Patients:
- Register and login
- Book new appointments with available doctors
- View upcoming and past appointments
- Reschedule or cancel appointments

### 🩺 Doctors:
- Login to the system
- View appointments assigned to them
- Approve or reject appointment requests

### 🧾 General:
- Dynamic navbar showing profile name and picture after login
- Secure authentication with session handling
- Fully responsive UI using Bootstrap
- Appointment management interface for both patients and doctors

---

## 🛠 Tech Stack

| Category      | Technology            |
|---------------|------------------------|
| Frontend      | HTML, CSS, JavaScript, Bootstrap |
| Backend       | PHP                    |
| Database      | MySQL                  |
| Styling       | Bootstrap 5            |
| Authentication| PHP Sessions           |

---

## 🖼️ Screenshots

| Page | Description |
|------|-------------|
| Home Page | Welcome message with "Book Appointment" CTA |
| Patient Dashboard | Appointment booking form and appointment list |
| Doctor Dashboard | Manage appointments with status controls |
| Login/Register | Authentication with role-based access |

*(You can add screenshots here later)*

---

## 🧩 Database Schema

### `appointments` table:

| Field            | Type         | Description                  |
|------------------|--------------|------------------------------|
| id               | INT (PK)     | Unique appointment ID        |
| patient_name     | VARCHAR      | Name of the patient          |
| doctor_name      | VARCHAR      | Name of the doctor           |
| appointment_date | DATETIME     | Scheduled date & time        |
| status           | VARCHAR      | Status (Pending/Approved/Cancelled) |

You’ll also need:
- `users` table for login/registration with roles (Patient or Doctor)
- `profile_pic` field to store user image paths

---

## 🚀 Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Adnan-Safdari/Doctor_Appointment_Booking
   ```

2. **Import the Database**
   - Create a MySQL database named `appointment_system`
   - Import the provided `database.sql` file (add this to your repo)

3. **Create the .env File**
    - In the root directory of the project, create a `.env` file.
    - Add the following variables, replacing the values with your actual database credentials:
  ```
  DB_HOST=localhost
  DB_PORT=3306
  DB_USER=your_db_username
  DB_PASS=your_db_password
  DB_NAME=appointment_system
  ```

4. **Run the Project**
   - Place the project folder in `htdocs` (if using XAMPP)
   - Start Apache and MySQL
   - Visit `http://localhost/doctor-appointment-system/`

---

## 📁 Folder Structure

```
doctor-appointment-system/
├── .env                         # Environment configuration file
├── assets/
│   ├── css/                     # CSS stylesheets
│   │   └── style.css            # Main stylesheet
│   ├── images/                  # Images
│   │   ├── doctor_avatars/      # Doctor profile images
│   │   └── doctor_patient.png   # General images
│   └── js/                      # JavaScript files
├── database/
│   └── db.php                   # Database connection and queries
├── helpers/
│   └── functions.php            # Helper functions for database
├── includes/
│   ├── footer.php               # Footer include
│   └── header.php               # Header include
├── doctor_dashboard.php        # Doctor dashboard page
├── index.php                   # Home page
├── load_env.php                # Loads environment variables
├── login.php                   # Login page
├── patient_dashboard.php       # Patient dashboard page
├── register.php                # Registration page
└── README.md                   # Project documentation

```

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

> Feel free to contribute, suggest improvements, or fork the project!
