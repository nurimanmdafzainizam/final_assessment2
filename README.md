# Student Grading System

A simple PHP and MySQL web application for recording student results and calculating grades automatically.

## Features

- Admin login and logout (session based)
- Add, edit and delete student results
- Search records by student name, matric number, subject name or subject code
- Automatic total and grade calculation

## Grading Scheme

| Component | Weight |
|-----------|--------|
| Test 1    | 20%    |
| Test 2    | 30%    |
| Final     | 50%    |

| Total marks | Grade |
|-------------|-------|
| 80 and above | A |
| 65 - 79 | B |
| 50 - 64 | C |
| 40 - 49 | D |
| Below 40 | E |

## Requirements

- XAMPP (Apache and MySQL) or any PHP 7.4+ and MySQL server

## Setup

1. Copy the project folder into `C:\xampp\htdocs\`.
2. Start **Apache** and **MySQL** in the XAMPP Control Panel.
3. Open `http://localhost/phpmyadmin` and create a database named `student_grading`.
4. Run this SQL in the `student_grading` database:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    password_hash VARCHAR(255) NOT NULL
);

CREATE TABLE result (
    number INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100),
    matric_no VARCHAR(50),
    subject_name VARCHAR(100),
    subject_code VARCHAR(20),
    test_1 DECIMAL(5,2),
    test_2 DECIMAL(5,2),
    final DECIMAL(5,2),
    total DECIMAL(5,2),
    grade CHAR(1)
);

INSERT INTO users (username, email, password_hash)
VALUES ('admin', 'admin@example.com', '$2y$10$CZkY2waW53WqpqRGbWmr8.Ot.xbK69XQIKxC27gbQwd8FTpCI3Pxq');
```

5. Open `http://localhost/final_assessment2/login.php`.

## Default Login

- Username: `admin`
- Password: `admin`

## Files

| File | Purpose |
|------|---------|
| `login.php` / `logout.php` | Log in and log out |
| `auth.php` | Blocks pages for users who are not logged in |
| `db.php` | Database connection |
| `index.php` | List and search records |
| `add.php` | Add a new result |
| `edit.php` | Edit an existing result |
| `delete.php` | Delete a result |
| `form.php` | Form shared by add and edit |
| `header.php` / `footer.php` | Shared page layout |
| `hash.php` | Helper to generate a password hash |
