SportsPro Technical Support Application

Author: Komal Sharma
Technology Stack: PHP 8.2, MySQL, Bootstrap 5, Apache (XAMPP)
Status: In Process

Overview

SportsPro Technical Support is a web-based system designed to manage products, customers, and technical incidents. It supports role-based access control for Admins, Technicians, and Customers.

The system allows:

Admins to manage products, technicians, and customers.

Technicians to update incident status.

Customers to register products and view their incidents.

Secure authentication and authorization workflows.

Features
Authentication & Authorization

User registration with email/password.

Role-based login: admin, user, student.

Session management with secure login/logout.

Admin-only dashboard for management.

Admin Features

Product Management: Add, delete, view products.

Technician Management: Create, update, delete technicians.

Customer Management: Search by last name, update customer info.

Incident Management: Create, assign, and view incidents.

Customer Features

Register products.

View assigned incidents.

Technician Features

Update incidents assigned to them.

Developer Tools

Bootstrap 5 for responsive UI.

Project Structure
PHPAssignment3/
├─ account/                   # User-specific landing pages
├─ auth/                      # Login, signup, logout, authentication checks
├─ assets/                    # CSS, JS, images, and demo video
├─ db/                        # Database connection and SQL files
├─ models/                    # Database interaction logic
│   ├─ customer_db.php
│   └─ technician_db.php
├─ views/
│   ├─ admin/                 # Admin dashboard and management pages
│   ├─ technicians/           # Technician pages
│   ├─ registrations/         # Customer registration pages
│   ├─ incidents/             # Incident pages
│   └─ header.php / footer.php
├─ index.php                  # Landing page (redirects to role-based dashboard)
└─ README.md

Installation & Setup

Clone the repository:

git clone https://github.com/komalsharma251/PHPAssignment3.git
cd PHPAssignment3


Setup XAMPP (or similar):

Place the project in the htdocs directory.

Start Apache and MySQL.

Database Setup:

Import db/tech_support-4.sql into MySQL.

Update db/database.php with your database credentials:
$host = 'localhost';
$dbname = 'tech_support';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
Base URL Configuration:

Update db/app.php:

define('BASE_URL', 'http://localhost/WEBSITES/PHPAssignment3');


Access the application:

Open your browser and navigate to:
http://localhost/WEBSITES/PHPAssignment3/auth/login.php

Admin Credentials (default for demo):

Create via signup and assign role admin in the database, or manually insert:
INSERT INTO users (email, password_hash, role, first_name, last_name)
VALUES ('admin@example.com', '$2y$10$yourhashedpassword', 'admin', 'Admin', 'User');
Video Demo

A sample project execution recording is included:
assets/phpassignment3_execution_recording.mov
License

MIT License © Komal Sharma

PHP PDO for secure database interaction.

Centralized database connection via db/database.php.
