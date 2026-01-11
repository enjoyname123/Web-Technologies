# PHP + MySQL All‑in‑One Database Operations (Study Notes)

This document explains **complete database operations using PHP and MySQL** in a **single program**, suitable for **exams, lab records, and viva**.

---

## 1. What This Program Covers

The program demonstrates the **entire database lifecycle**:

1. Connect to MySQL Server
2. Create Database
3. Select Database
4. Create Table
5. Insert Data
6. Retrieve Data
7. Delete a Specific Record
8. Delete Table
9. Delete Database
10. Close Connection

---

## 2. Requirements

* XAMPP / WAMP / LAMP
* Apache + MySQL running
* PHP installed
* MySQL user: `root`
* Password: empty (default XAMPP setup)

---

## 3. Complete All‑in‑One PHP Program

```php
<?php
/* =========================================================
   ALL-IN-ONE PHP + MYSQL DATABASE OPERATIONS
   ========================================================= */

/* ---------------- STEP 1: CONNECT TO MYSQL SERVER ---------------- */

$server   = "localhost";
$username = "root";   // default username in XAMPP
$password = "";       // default password in XAMPP

$conn = new mysqli($server, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL Server<br><br>";

/* ---------------- STEP 2: CREATE DATABASE ---------------- */

$dbname = "studentdb";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if ($conn->query($sql) === TRUE) {
    echo "Database created or already exists<br><br>";
}

/* ---------------- STEP 3: SELECT DATABASE ---------------- */

$conn->select_db($dbname);

/* ---------------- STEP 4: CREATE TABLE ---------------- */

$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    age INT
)";

$conn->query($sql);
echo "Table created<br><br>";

/* ---------------- STEP 5: INSERT DATA ---------------- */

$sql = "INSERT INTO students (name, email, age)
        VALUES ('Sathya', 'sathya@gmail.com', 20)";

$conn->query($sql);
echo "Data inserted<br><br>";

/* ---------------- STEP 6: RETRIEVE DATA ---------------- */

$result = $conn->query("SELECT * FROM students");

echo "<b>Student Records:</b><br>";

while ($row = $result->fetch_assoc()) {
    echo "ID: {$row['id']} | Name: {$row['name']} | Email: {$row['email']} | Age: {$row['age']}<br>";
}

echo "<br>";

/* ---------------- STEP 7: DELETE SPECIFIC RECORD ---------------- */

$conn->query("DELETE FROM students WHERE id = 1");
echo "Record deleted<br><br>";

/* ---------------- STEP 8: DELETE TABLE ---------------- */

$conn->query("DROP TABLE IF EXISTS students");
echo "Table deleted<br><br>";

/* ---------------- STEP 9: DELETE DATABASE ---------------- */

$conn->query("DROP DATABASE IF EXISTS studentdb");
echo "Database deleted<br><br>";

/* ---------------- STEP 10: CLOSE CONNECTION ---------------- */

$conn->close();
echo "Connection closed";
?>
```

---

## 4. Explanation of Each Step

### Step 1: MySQL Connection

* `mysqli` is used to connect PHP with MySQL
* If connection fails, `die()` stops execution

### Step 2: Create Database

* `CREATE DATABASE` creates a new database
* `IF NOT EXISTS` prevents duplicate‑creation errors

### Step 3: Select Database

* `select_db()` tells MySQL which database to use

### Step 4: Create Table

* `AUTO_INCREMENT` automatically generates primary key
* `PRIMARY KEY` uniquely identifies each record

### Step 5: Insert Data

* `INSERT INTO` adds new rows to table

### Step 6: Retrieve Data

* `SELECT *` fetches all records
* `fetch_assoc()` retrieves rows as associative arrays

### Step 7: Delete Record

* `DELETE FROM table WHERE condition`

### Step 8: Delete Table

* `DROP TABLE` permanently removes the table

### Step 9: Delete Database

* `DROP DATABASE` permanently removes the database

### Step 10: Close Connection

* Frees server resources

---

## 5. Important Exam Notes

* PHP acts as **server‑side scripting language**
* MySQL is a **relational database**
* PHP connects to MySQL using `mysqli`
* `DROP` operations are **irreversible**
* This program demonstrates **DDL + DML operations**

---

## 6. What NOT to Do in Real Applications

* Do not hard‑code database credentials
* Do not use raw SQL with user input
* Do not expose DROP operations
* Use **prepared statements** for security

---

## 7. Summary

This single PHP file demonstrates:

* Full database lifecycle
* Core SQL commands
* PHP–MySQL interaction
* Suitable for exams, labs, and viva



```php
<?php
/* =========================================================
   ALL-IN-ONE PHP + MYSQL DATABASE OPERATIONS
   Covers:
   1. Connect to MySQL server
   2. Create database
   3. Select database
   4. Create table
   5. Insert data
   6. Retrieve data
   7. Delete specific record
   8. Delete table
   9. Delete database
   10. Close connection
   ========================================================= */

/* ---------------- STEP 1: CONNECT TO MYSQL SERVER ---------------- */

$server   = "localhost";
$username = "root";   // XAMPP default
$password = "";       // XAMPP default

$conn = new mysqli($server, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL Server<br><br>";

/* ---------------- STEP 2: CREATE DATABASE ---------------- */

$dbname = "studentdb";

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if ($conn->query($sql) === TRUE) {
    echo "Database '$dbname' created or already exists<br><br>";
} else {
    die("Database creation failed: " . $conn->error);
}

/* ---------------- STEP 3: SELECT DATABASE ---------------- */

$conn->select_db($dbname);

/* ---------------- STEP 4: CREATE TABLE ---------------- */

$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    age INT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'students' created or already exists<br><br>";
} else {
    die("Table creation failed: " . $conn->error);
}

/* ---------------- STEP 5: INSERT DATA ---------------- */

$sql = "INSERT INTO students (name, email, age)
        VALUES ('Sathya', 'sathya@gmail.com', 20)";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully<br><br>";
} else {
    echo "Insert failed (possible duplicate run)<br><br>";
}

/* ---------------- STEP 6: RETRIEVE DATA ---------------- */

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<b>Student Records:</b><br>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] .
             " | Name: " . $row["name"] .
             " | Email: " . $row["email"] .
             " | Age: " . $row["age"] . "<br>";
    }
} else {
    echo "No records found";
}

echo "<br>";

/* ---------------- STEP 7: DELETE A SPECIFIC RECORD ---------------- */

$sql = "DELETE FROM students WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    echo "Record with ID=1 deleted successfully<br><br>";
} else {
    echo "Record deletion failed<br><br>";
}

/* ---------------- STEP 8: DELETE TABLE ---------------- */

$sql = "DROP TABLE IF EXISTS students";

if ($conn->query($sql) === TRUE) {
    echo "Table 'students' deleted successfully<br><br>";
} else {
    echo "Table deletion failed<br><br>";
}

/* ---------------- STEP 9: DELETE DATABASE ---------------- */

$sql = "DROP DATABASE IF EXISTS studentdb";

if ($conn->query($sql) === TRUE) {
    echo "Database 'studentdb' deleted successfully<br><br>";
} else {
    echo "Database deletion failed<br><br>";
}

/* ---------------- STEP 10: CLOSE CONNECTION ---------------- */

$conn->close();
echo "Connection closed";
?>
```

- All in one
