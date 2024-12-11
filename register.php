<?php
// Start a session
session_start();

// Initialize an error message variable
$error_message = "";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $username = "root";
    $password = ""; // Default password for XAMPP MySQL
    $dbname = "EyadArshad"; // Use the name of your database

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } else {
        // Check if the email already exists
        $checkQuery = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($checkQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Email already exists
            $error_message = "Error: This email is already registered. Please use another email.";
        } else {
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Prepare SQL query to insert user
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
    <link rel="stylesheet" href="registration.css">
</head>
<body>
    <?php if (!empty($error_message)) : ?>
        <div class="popup-overlay" id="popup">
            <div class="popup-box">
                <h2>Notification</h2>
                <p><?= htmlspecialchars($error_message) ?></p>
                <button onclick="closePopup()">OK</button>
            </div>
        </div>
        <script>
            // Show the pop-up
            document.getElementById('popup').style.display = 'flex';

            // Close the pop-up
            function closePopup() {
                document.getElementById('popup').style.display = 'none';
            }
        </script>
    <?php endif; ?>
    <div class="container">
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
</body>
</html>