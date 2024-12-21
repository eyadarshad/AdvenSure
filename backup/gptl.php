<?php
// Database connection
$conn = new mysqli("localhost", "username", "password", "database_name");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session to check if the user is logged in
session_start();
if (isset($_SESSION['user_email'])) {
    $userEmail = $_SESSION['user_email'];

    // Fetch user details from the database
    $stmt = $conn->prepare("SELECT name, profile_pic FROM users WHERE email = ?");
    $stmt->bind_param("s", $userEmail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $userName = $user['name'];
        $profilePic = $user['profile_pic'];
    } else {
        $userName = "Guest";
        $profilePic = "default.jpg"; // Path to a default profile picture
    }
    $stmt->close();
} else {
    $userName = null;
    $profilePic = null;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated Navbar</title>
    <style>
        /* General Styling */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navbar Container */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Logo Styling */
        .navbar-logo img {
            height: 40px;
        }

        /* Nav Links */
        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #000;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: #f0f0f0;
        }

        /* Profile Section */
        .profile {
            display: flex;
            align-items: center;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-name {
            font-size: 16px;
            font-weight: bold;
        }

        /* Mobile Styling */
        .mobile-menu {
            display: none;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                background-color: #fff;
                position: absolute;
                top: 60px;
                right: 10px;
                width: 200px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }

            .nav-links.active {
                display: flex;
            }

            .mobile-menu {
                display: block;
                cursor: pointer;
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="nav-links">
            <a href="#trading">Trading</a>
            <a href="#markets">Markets</a>
            <a href="#platforms">Platforms</a>
            <a href="#tools">Tools</a>
            <a href="#company">Company</a>
            <a href="#partners">Partners</a>
        </div>
        <div class="profile">
            <?php if ($userName): ?>
                <img src="path/to/profile_pics/<?php echo htmlspecialchars($profilePic); ?>" alt="Profile Picture" class="profile-pic">
                <span class="profile-name"><?php echo htmlspecialchars($userName); ?></span>
            <?php else: ?>
                <button class="register">Register</button>
                <button class="signin">Sign in</button>
            <?php endif; ?>
        </div>
        <div class="mobile-menu" onclick="toggleMenu()">☰</div>
    </nav>

    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>
</body>
</html>
