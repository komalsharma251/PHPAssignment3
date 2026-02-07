PHP Tech Support Project

Author: Komal Sharma
Date: February 2, 2026
Project Type: Web Application (PHP, MySQL, Bootstrap 5)

Overview

This is a Tech Support Management System built with PHP and MySQL.
The project allows administrators to manage products, technicians, and client requests efficiently.
It follows clean MVC principles and uses a MySQL database for data storage.
The system implements role-based access control for Admins, Technicians, and Customers, with secure authentication and session management.

Features
Authentication & Authorization

User registration with email/password

Role-based login: admin, user

Secure login/logout with session management

Admin-only dashboard for management

Admin Panel

Product Management: Add, delete, and view products

Technician Management: Create, update, delete technicians

Customer Management: Search customers by last name, update information

Incident Management: Create, assign, and view incidents

Customer Panel

Register products

View assigned incidents

Technician Panel

Update incidents assigned to them

Technology Stack

Backend: PHP 8.2 with PDO for secure database operations

Database: MySQL

Frontend: Bootstrap 5

Server: Apache (XAMPP)

Project Structure
PHPAssignment3/
├─ account/                # User-specific landing pages
├─ auth/                   # Login, signup, logout, authentication checks
├─ assets/                 # CSS, JS, images, and demo video
├─ db/                     # Database connection and SQL files
├─ models/                 # Database interaction logic
│   ├─ customer_db.php
│   └─ technician_db.php
├─ views/
│   ├─ admin/              # Admin dashboard and management pages
│   ├─ technicians/        # Technician pages
│   ├─ registrations/      # Customer registration pages
│   ├─ incidents/          # Incident pages
│   └─ header.php / footer.php
├─ index.php               # Landing page (redirects to role-based dashboard)
└─ README.md

Installation & Setup
Clone the repository
git clone https://github.com/komalsharma251/PHPAssignment3.git
cd PHPAssignment3

Setup XAMPP

Place the project in the htdocs directory

Start Apache and MySQL

Database Setup

Import db/tech_support-4.sql into MySQL

Update db/database.php with your credentials:

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

Base URL Configuration

Update db/app.php:

define('BASE_URL', 'http://localhost/WEBSITES/PHPAssignment3');

Access the application

Open in your browser:
http://localhost/WEBSITES/PHPAssignment3/auth/login.php

Admin Credentials (Demo)

Create via signup and assign role admin in the database, or manually insert:

INSERT INTO users (email, password_hash, role, first_name, last_name)
VALUES ('admin@example.com', '$2y$10$yourhashedpassword', 'admin', 'Admin', 'User');

Video Demo

A sample project execution recording is included:
assets/phpassignment3_execution_recording.mov

License

MIT License © Komal Sharma
