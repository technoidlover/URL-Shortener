<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo img {
    height: 40px;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline;
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

main {
    margin: 40px 0;
}

main h1 {
    margin-bottom: 20px;
}

main form {
    display: flex;
    flex-direction: column;
}

main form label {
    margin-bottom: 10px;
}

main form input {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

main form button {
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

main form button:hover {
    background-color: #555;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="https://hng.mobi/_next/static/media/logo.3330b269.svg" alt="Logo" height="40px">
            </div>
            <nav>
                <ul>
                    <li><a href="https://hng.mobi/" target="_blank">Home</a></li>
                    <li><a href="https://hng.mobi/policy" target="_blank">Policy</a></li>
                    <li><a href="https://hng.mobi/contact" target="_blank">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Body -->
    <main>
        <div class="container">
            <h1>URL Shortener</h1>
            <form action="shorten.php" method="POST">
                <label for="url">Enter URL to shorten:</label>
                <input type="text" name="url" id="url" required>
                <button type="submit">Shorten URL</button>
            </form>

            <!-- Kết quả sẽ hiển thị tại đây -->
            <?php
            if (isset($_GET['shortened_url'])) {
                echo "<p>Your shortened URL: <a href='" . $_GET['shortened_url'] . "' target='_blank'>" . $_GET['shortened_url'] . "</a></p>";
            }
            ?>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 URL Shortener. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>
