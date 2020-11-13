<?php
$servername = "localhost";
$username = "username";
$password = "password";

// สร้างการเชื่อมต่อ
$conn = mysqli_connect($servername, $username, $password);
// เช็คสถานะการเชื่อมต่อ
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// สร้างฐานข้อมูล
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>