<?php
$servername = "localhost";
$username = "username";
$password = "password";

// สร้างการเชื่อมต่อ
$conn = mysqli_connect($servername, $username, $password);

// เช็คสถานะการเชื่อมต่อกับฐานข้อมูล
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "กำลังเชื่อมต่อกับฐานข้อมูล";
?>