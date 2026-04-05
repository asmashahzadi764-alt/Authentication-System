# Skill Exchange Platform (Login + Register with Stored Procedure)

This project is a simple **Skill Exchange Platform authentication system** built using **PHP + MySQL (MariaDB)** with a **Stored Procedure** for login.

It includes:
- User Registration
- User Login (using MySQL Stored Procedure)
- Password encryption using SHA2
- Simple and attractive frontend design using CSS

---

## 📌 Technologies Used
- PHP
- MySQL / MariaDB
- XAMPP (Apache + MySQL)
- HTML + CSS
- Stored Procedures

---

## 📂 Project Files

| File Name | Description |
|----------|-------------|
| `index.php` | Login page (calls stored procedure) |
| `register.php` | Registration page |
| `connection.php` | Database connection file |
| `style.css` | Frontend styling |
| `skill_exchange.sql` | Database export file |

---

## ⚙️ How to Setup (Run on XAMPP)

### Step 1: Copy Project Folder
Place the project folder inside:


C:\xampp\htdocs\


Example:


C:\xampp\htdocs\skill_exchange\


---

### Step 2: Start XAMPP
Open XAMPP Control Panel and start:

✅ Apache  
✅ MySQL  

---

### Step 3: Import Database
1. Open phpMyAdmin:


http://localhost/phpmyadmin


2. Click **Import**
3. Select file: `skill_exchange.sql`
4. Click **Go**

This will create the database and tables automatically.

---

## ▶️ Run the Project

### Register Page:

http://localhost/skill_exchange/register.php


### Login Page:

http://localhost/skill_exchange/index.php


---

## 🔐 Login Stored Procedure

The login system uses a stored procedure named:


login_user


It verifies email and password using SHA2 encryption.

Example call:

```sql
CALL login_user('user@gmail.com', '12345');
🔑 Password Security

Passwords are stored in encrypted form using:

SHA2(password, 256)
```
---


##👨‍💻 Author

Authentication System
Made by using PHP + MySQL Stored Procedure
