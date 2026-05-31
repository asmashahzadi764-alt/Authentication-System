# Skill Exchange Platform (Stored Procedure + Trigger + Cursor)

This project is a simple **Skill Exchange Platform Authentication System** developed using **PHP, MySQL (MariaDB), HTML, and CSS**.

The project demonstrates the implementation of important database concepts including:

* User Registration
* User Login using Stored Procedure
* Password Encryption using SHA2
* Trigger Implementation
* Cursor Implementation
* User Activity Logging
* Frontend Integration with Database Objects

---

## 📌 Technologies Used

* PHP
* MySQL / MariaDB
* XAMPP (Apache + MySQL)
* HTML
* CSS
* Stored Procedures
* Triggers
* Cursors

---

## 📂 Project Files

| File Name            | Description                           |
| -------------------- | ------------------------------------- |
| `index.php`          | Login page using Stored Procedure     |
| `register.php`       | User Registration page                |
| `dashboard.php`      | User Dashboard                        |
| `show_users.php`     | Displays users using Stored Procedure |
| `show_logs.php`      | Displays Trigger Logs                 |
| `connection.php`     | Database Connection                   |
| `style.css`          | Frontend Styling                      |
| `skill_exchange.sql` | Database Export File                  |

---

## 📊 Database Objects Implemented

### 1. Stored Procedure: `login_user`

Used for authenticating users during login.

Example:

```sql
CALL login_user('user@gmail.com', '12345');
```

---

### 2. Stored Procedure: `ShowUsers`

Displays all registered users.

Example:

```sql
CALL ShowUsers();
```

---

### 3. Cursor Procedure: `UserNames`

Fetches user names one by one using a database cursor.

Example:

```sql
CALL UserNames();
```

---

### 4. Trigger: `trg_user_insert`

Automatically records user registration activity.

Whenever a new user is inserted into the `users` table, a log entry is created inside the `user_log` table.

---

## 📂 Database Tables

### users

Stores user information.

| Field    |
| -------- |
| id       |
| fullname |
| email    |
| password |

---

### user_log

Stores trigger-generated activity logs.

| Field   |
| ------- |
| log_id  |
| message |

---

## ⚙️ How to Setup (Run on XAMPP)

### Step 1: Copy Project Folder

Place the project folder inside:

```text
C:\xampp\htdocs\
```

Example:

```text
C:\xampp\htdocs\skill_exchange\
```

---

### Step 2: Start XAMPP

Open XAMPP Control Panel and start:

✅ Apache

✅ MySQL

---

### Step 3: Import Database

1. Open phpMyAdmin

```text
http://localhost/phpmyadmin
```

2. Click **Import**
3. Select `skill_exchange.sql`
4. Click **Go**

The database, tables, procedures, trigger, and cursor procedures will be created automatically.

---

## ▶️ Run the Project

### Registration Page

```text
http://localhost/skill_exchange/register.php
```

### Login Page

```text
http://localhost/skill_exchange/index.php
```

### Dashboard

```text
http://localhost/skill_exchange/dashboard.php
```

### Users List

```text
http://localhost/skill_exchange/show_users.php
```

### Trigger Logs

```text
http://localhost/skill_exchange/show_logs.php
```

---

## 🔐 Password Security

Passwords are encrypted using:

```sql
SHA2(password, 256)
```

This ensures that passwords are not stored in plain text.

---

## 🎯 Project Features

* User Registration
* User Login
* Password Encryption
* Stored Procedure Authentication
* Display Users using Procedure
* Trigger-Based Activity Logging
* Cursor Implementation
* Responsive Frontend Interface
* MySQL Database Integration

---

## 👨‍💻 Author

Asma Shahzadi

Student - Women University Multan

Developed using PHP, MySQL (MariaDB), Stored Procedures, Triggers, and Cursors.
