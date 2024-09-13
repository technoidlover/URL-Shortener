<?php
$servername = "localhost"; // Hoặc địa chỉ server MySQL
$username = "root"; // Username MySQL của bạn
$password = ""; // Mật khẩu MySQL của bạn
$dbname = "url_shortener"; // Tên database của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
