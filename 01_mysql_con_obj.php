<?php
$servername = "localhost";
$username = "username";
$password = "password";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password);

// เช็คสถานะการเชื่อมต่อ
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "กำลังเชื่อมต่อ";
?>