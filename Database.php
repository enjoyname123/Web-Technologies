<?php
/* =========================================================
   ALL-IN-ONE PHP + MYSQL DATABASE OPERATIONS
   Covers:
   - DB connection
   - Create DB
   - Create table
   - Insert data
   - Retrieve data
   - Delete record
   - Delete table
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
echo "Connected to MySQL server successfully<br><br>";

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
    echo "Insert failed: " . $conn->error . "<br><br>";
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
    echo "Record deletion failed: " . $conn->error . "<br><br>";
}

/* ---------------- STEP 8: DELETE TABLE ---------------- */
/*
$sql = "DROP TABLE students";

if ($conn->query($sql) === TRUE) {
    echo "Table deleted successfully<br><br>";
} else {
    echo "Table deletion failed: " . $conn->error . "<br><br>";
}
*/

/* ---------------- STEP 9: DELETE DATABASE ---------------- */
/*
$sql = "DROP DATABASE studentdb";

if ($conn->query($sql) === TRUE) {
    echo "Database deleted successfully<br><br>";
} else {
    echo "Database deletion failed: " . $conn->error . "<br><br>";
}
*/

/* ---------------- STEP 10: CLOSE CONNECTION ---------------- */

$conn->close();
echo "Connection closed";
?>
