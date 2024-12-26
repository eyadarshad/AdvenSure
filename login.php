<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "EyadArshad";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
       
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            header("location: index_profile.php");
            exit();
        } else {
            echo "<script>alert('Invalid credentials. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Invalid credentials. Please try again.');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<nav class="navbar">
        <div class="navbar-logo">
        <a href="index.php"><img class="logo" src="logo.png" alt="Logo"></a>
        </div>
        <div class="nav-links">
            <a href="index.php#home">Home</a>
            <a href="index.php#features">Features</a>
            <a href="index.php#service">Services</a>
            <a href="index.php#testimonials">Testimonials</a>
            <a href="index.php#footer">About Us</a>
        </div>
        <div class="mobile-menu" onclick="toggleMenu()">☰</div>
        <script>
            function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}
// Toggle Side Navigation

        let currentSlide = 0;
const slides = document.querySelectorAll('.service-slide');
const totalSlides = slides.length;
        </script>
    </nav>
   <center> <div class="container">
        <div class="left">
            <h1>Welcome Back!</h1>
            <p>Don't have an account? Register now to start your journey with us.</p>
            <a href="register.php"><button class="btn">SIGN UP</button></a>
        </div>
        <div class="right">
            <h1>Sign In</h1>
            <form method="POST" action="">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="btn signup-btn" type="submit">LOGIN</button>
            </form>
        </div>
    </div>
</center>
</body>
</html>
