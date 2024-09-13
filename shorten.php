<?php
include 'config.php';

function generateShortCode($length = 6) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

if (isset($_POST['url'])) {
    $original_url = $_POST['url'];
    $short_code = generateShortCode();

    // Kiểm tra xem URL đã tồn tại trong database chưa
    $stmt = $conn->prepare("SELECT short_code FROM urls WHERE original_url = ?");
    $stmt->bind_param("s", $original_url);
    $stmt->execute();
    $stmt->bind_result($existing_short_code);
    $stmt->fetch();
    $stmt->close();

    if ($existing_short_code) {
        $shortened_url = "http://localhost/url_short/$existing_short_code";
    } else {
        // Lưu URL mới vào database
        $stmt = $conn->prepare("INSERT INTO urls (original_url, short_code) VALUES (?, ?)");
        $stmt->bind_param("ss", $original_url, $short_code);
        if ($stmt->execute()) {
            $shortened_url = "http://localhost/url_short/$short_code";
        } else {
            echo "Error: Could not shorten the URL.";
            exit();
        }
        $stmt->close();
    }

    // Redirect lại index.php với URL đã rút gọn
    header("Location: index.php?shortened_url=" . $shortened_url);
    exit();
}
?>
