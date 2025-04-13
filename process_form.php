<?php
// 1. Database connection
$conn = new mysqli("localhost", "root", "", "users_db");

// 2. Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// 3. Get form data
$first = $_POST['first'];
$last = $_POST['last'];
$password = password_hash($_POST['passw'], PASSWORD_DEFAULT); // Encrypt password
$gender = $_POST['gender'];

// 4. Insert data into table
$sql = "INSERT INTO users (first_name, last_name, password, gender) 
        VALUES ('$first', '$last', '$password', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "Record inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
