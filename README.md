# PHP Tech Support Project

**Author:** Komal Sharma  
**Date:** February 2, 2026  
**Project Type:** Web Application (PHP, MySQL)

---

## Overview

This is a **Tech Support Management System** built with PHP and MySQL.  
The system allows administrators to efficiently manage products, technicians, and customer incidents.  
It follows clean MVC principles and uses a MySQL database for persistent data storage.

---

## Features

**Admin Panel**
- Manage products: add, delete, view
- Manage technicians: create, update, delete
- Manage customers: search by last name, update info
- Incident management: create, assign, and view incidents

**Technician Panel**
- Update assigned incidents

**Customer Panel**
- Register products
- View assigned incidents

**Authentication & Authorization**
- Secure login/logout
- Role-based access: admin, technician, customer
- Session management for protected routes

---

## Project Structure

PHPAssignment3/
├── account/ # User-specific landing pages
├── auth/ # Login, signup, logout, authentication checks
├── assets/ # CSS, JS, images, demo video
├── db/ # Database connection & SQL files
├── models/ # Database interaction logic
│ ├── customer_db.php
│ └── technician_db.php
├── views/
│ ├── admin/ # Admin dashboard & management pages
│ ├── technicians/ # Technician pages
│ ├── registrations/ # Customer registration pages
│ ├── incidents/ # Incident pages
│ └── header.php / footer.php
├── index.php # Landing page (redirects to role-based dashboard)
└── README.md # Project documentation


---

## Installation & Setup

1. **Clone the repository:**

```bash
git clone https://github.com/komalsharma251/PHPAssignment3.git
cd PHPAssignment3
Set up XAMPP (or any PHP/MySQL stack):

Place the project in your htdocs directory.

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
Set Base URL:

Update db/app.php:

define('BASE_URL', 'http://localhost/WEBSITES/PHPAssignment3');
Access the application:

Open your browser and navigate to:
http://localhost/WEBSITES/PHPAssignment3/auth/login.php

Admin Credentials (Default for Demo)
Create via signup and assign role admin in the database, or manually insert:

INSERT INTO users (email, password_hash, role, first_name, last_name)
VALUES ('admin@example.com', '$2y$10$yourhashedpassword', 'admin', 'Admin', 'User');
Demo Video
A sample project execution recording is included:
assets/phpassignment3_execution_recording.mov

Dependencies
PHP 8.x or higher

MySQL 5.x or higher

Optional: XAMPP / MAMP / LAMP stack

Bootstrap 5 for responsive UI

License
MIT License © Komal Sharma