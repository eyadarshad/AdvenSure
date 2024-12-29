<?php
session_start();


$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "EyadArshad";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } else {
        $checkQuery = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($checkQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
         
            $error_message = "Error: This email is already registered. Please use another email.";
        } else {
           
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $name, $email, $hashed_password);

            if ($stmt->execute()) {
                header("Location: login.php");
            } else {
                $error_message = "Error: " . $stmt->error;
            }
           
        }
        $stmt->close();
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="registration.css">
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
</script>
    </nav>
    <?php if (!empty($error_message)) : ?>
    <div class="popup-overlay" id="popup">
        <div class="popup-box">
            <h2>Notification</h2>
            <p><?= htmlspecialchars($error_message) ?></p>
            <button onclick="closePopup()">OK</button>
        </div>
    </div>
<?php endif; ?>
 <script>
document.addEventListener('DOMContentLoaded', function () {
    const popupOverlay = document.getElementById('popup');
    const popupMessage = document.querySelector('#popup .popup-box p');
    
    if (popupOverlay && popupMessage && popupMessage.textContent.trim() !== '') {
        popupOverlay.style.display = 'flex'; // Display the popup
    }
});

function closePopup() {
    const popupOverlay = document.getElementById('popup');
    if (popupOverlay) {
        popupOverlay.style.display = 'none';
    }
}

</script>
    <center><div class="container">
        <div class="left">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <a href="login.php"><button class="btn">SIGN IN</button></a>
        </div>
        <div class="right">
            <h1>Create Account</h1>
            <div class="social-icons">
                <div class="icon">f</div>
                <div class="icon">G+</div>
                <div class="icon">in</div>
            </div>
            <p>or use your email for registration:</p>
            <form method="POST" action="register.php">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="btn signup-btn" type="submit">SIGN UP</button>
            </form>
        </div>
    </div>
    </center>
</body>
</html>
