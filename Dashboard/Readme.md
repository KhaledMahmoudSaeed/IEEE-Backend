# Dashboard Project

## Overview

This README provides guidance on setting up and using the Dashboard application. The Dashboard allows users to sign in, sign up, and perform CRUD operations on data stored in a MySQL database. It is built with PHP (without OOP), HTML, and CSS, and the design was created using Figma.

[Overview video](https://drive.google.com/file/d/1VbnEFO_dpKJWA8KCUB5o10lg7j9i7SpI/view?usp=sharing)
[ERD](ERD.png)

## Features

1. **User Authentication**:

   - Sign in: Existing users can sign in securely.
   - Sign up: New users can create accounts securely.

2. **Dashboard Functionality**:

   - CRUD operations: Users can Create, Read, Update, and Delete data stored in the database.

3. **Security**:
   - Input validation: Prevents common security vulnerabilities like SQL injection and cross-site scripting (XSS).
   - Password hashing: Passwords are securely hashed before storage to protect user accounts.

## Setup

### Requirements

- PHP
- MySQL database
- Web server XAMPP
- HTML
- CSS

## Database Setup

- Create a MySQL database and import the provided SQL file (`database.sql`).

## Configuration

- Open `config.php` and update the database connection details (`DB_HOST`, `DB_USERNAME`, `DB_PASSWORD`, `DB_NAME`).

## Web Server Configuration

- Ensure your web server is configured to serve PHP files.

## Usage

### Sign Up:

- Access the application through your web browser.
- Click on the "Sign Up" link to create a new account.
- Fill in the required information and submit the form.

### Sign In:

- After signing up, you can sign in with your credentials.
- Click on the "Sign In" link and enter your username and password.

### Dashboard:

- Once signed in, you will be redirected to the dashboard.
- Here, you can perform CRUD operations on the available data.

### CRUD Operations:

- Use the provided forms and buttons to Create, Read, Update, and Delete data as required.

## Security Considerations

### Input Validation:

- All user inputs are sanitized to prevent SQL injection and XSS attacks.

### Password Security:

- Passwords are hashed using a strong hashing algorithm before storage in the database.

### Session Management:

- Sessions are securely managed to prevent session fixation and session hijacking attacks.
