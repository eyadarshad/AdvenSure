<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: \\reg/login.php");
    exit;
}

// Placeholder images
$profile_pics = [
    "https://wallpapers.com/images/hd/pixel-squid-game-pfp-0bfjhkf7oijsdekb.jpg",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDzGUS5_WXlHIvy4uDhrrYPcMpzAMgUihJm21TO9dNgVBpSE4GwrLssbpxKlf-ZgkkRDw&usqp=CAU",
    "https://art.pixilart.com/thumb/e97143c0f1e86bc.png",
    "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ce9484b3-9994-4b30-ab7c-f461ddcef0a0/deudrab-81a5732a-cea3-4130-901c-5d967ce9bb37.png/v1/fill/w_380,h_558,q_80,strp/squid_game_pixel_art_by_nimowerytheking_deudrab-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTU4IiwicGF0aCI6IlwvZlwvY2U5NDg0YjMtOTk5NC00YjMwLWFiN2MtZjQ2MWRkY2VmMGEwXC9kZXVkcmFiLTgxYTU3MzJhLWNlYTMtNDEzMC05MDFjLTVkOTY3Y2U5YmIzNy5wbmciLCJ3aWR0aCI6Ijw9MzgwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.q3QKV-MMABuMNWoSmU3z3kQs5lFMZqBvMqPMqKTNeR8",
];
$random_pic = $profile_pics[array_rand($profile_pics)];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Listing</title>
  <link rel="icon" href="logo.png" type="image/png">
  <link rel="stylesheet" href="div1.css">
</head>
<body>
  <nav class="navbar">
    <div class="navbar-logo">
        <a href="\reg/index_profile.php"><img src="logo.png" class="logo" alt="Logo"></a>
    </div>
    <div class="nav-links">
        <a href="\reg/index_profile.php#home">Home</a>
        <a href="\reg/index_profile.php#features">Features</a>
        <a href="\reg/index_profile.php#service">Services</a>
        <a href="\reg/index_profile.php#testimonials">Testimonials</a>
        <a href="\reg/index_profile.php#footer">Contact</a>
    </div>
    <div class="profile">
            <span class="profile-name"><?php echo htmlspecialchars($_SESSION['name']); ?></span>
           <a><img class="profile-pic" src="<?php echo $random_pic; ?>" alt="Profile Picture" onclick="toggleDropdown()"></a>
            <div id="profile-dropdown" class="dropdown hidden">
                <button class="dropdown-btn">Profile</button>
                <button class="dropdown-btn">Settings</button>
                <button class="dropdown-btn">Help</button>
                <button class="dropdown-btn logout" onclick="logout()">Logout</button>
            </div>
        </div>
    <div class="mobile-menu" onclick="toggleMenu()">☰</div>
</nav>

<center><main class="hotel-list">
    <div class="hotel-card">
      <img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/594788322.jpg?k=52026e60d70ed2aefbbd2b1e8708d4d1b2a3a37b2647d9c5294a404a0ac76286&o=&hp=1" alt="Hotel 1">
      <h2>Luxury Inn</h2>
      <p class="location">Murree, Pakistan</p>
      <p class="price">$200/night</p>
      <button class="book-now">Book Now</button>
    </div>
    <div class="hotel-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlaliFN5VCesMHp06yIp_K7tNQvggP43HKfg&s" alt="Hotel 2">
      <h2>Beachside Resort</h2>
      <p class="location">Skardu, Pakistan</p>
      <p class="price">$350/night</p>
      <button class="book-now">Book Now</button>
    </div>
    <div class="hotel-card">
      <img src="https://content.r9cdn.net/rimg/kimg/c6/e2/c227ca6b0c75b6a9.jpg?width=500&height=350&xhint=270&yhint=166&crop=true" alt="Hotel 3">
      <h2>Mountain Retreat</h2>
      <p class="location">Kashmir, Pakistan</p>
      <p class="price">$180/night</p>
      <button class="book-now">Book Now</button>
    </div>
    <div class="hotel-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOK6P0q0h3dlwbv-X5InWA2FEUeW67oaUguWWhSMlFb3ekEJNc7W4LEL68NqbMsVMHLgM&usqp=CAU" alt="Hotel 3">
        <h2>Mountain Retreat</h2>
        <p class="location">Hunza, Pakistan</p>
        <p class="price">$180/night</p>
        <button class="book-now">Book Now</button>
      </div>
    <div class="hotel-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFiC79gSS2_oqgwdcanT3nUfxq6jKkidV2PA&s" alt="Hotel 3">
        <h2>Mountain Retreat</h2>
        <p class="location">Naran, Pakistan</p>
        <p class="price">$180/night</p>
        <button class="book-now">Book Now</button>
    </div>
    <div class="hotel-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOK6P0q0h3dlwbv-X5InWA2FEUeW67oaUguWWhSMlFb3ekEJNc7W4LEL68NqbMsVMHLgM&usqp=CAU" alt="Hotel 3">
        <h2>Mountain Retreat</h2>
        <p class="location">Aspen, USA</p>
        <p class="price">$180/night</p>
        <button class="book-now">Book Now</button>
      </div>
      <div class="hotel-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOK6P0q0h3dlwbv-X5InWA2FEUeW67oaUguWWhSMlFb3ekEJNc7W4LEL68NqbMsVMHLgM&usqp=CAU" alt="Hotel 3">
        <h2>Mountain Retreat</h2>
        <p class="location">Kaghan, Pakistan</p>
        <p class="price">$180/night</p>
        <button class="book-now">Book Now</button>
      </div>
      <div class="hotel-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOK6P0q0h3dlwbv-X5InWA2FEUeW67oaUguWWhSMlFb3ekEJNc7W4LEL68NqbMsVMHLgM&usqp=CAU" alt="Hotel 3">
        <h2>Mountain Retreat</h2>
        <p class="location">Swat, Pakistan</p>
        <p class="price">$180/night</p>
        <button class="book-now">Book Now</button>
      </div>
      <div class="hotel-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOK6P0q0h3dlwbv-X5InWA2FEUeW67oaUguWWhSMlFb3ekEJNc7W4LEL68NqbMsVMHLgM&usqp=CAU" alt="Hotel 3">
        <h2>Mountain Retreat</h2>
        <p class="location">Chitral, Pakistan</p>
        <p class="price">$180/night</p>
        <button class="book-now">Book Now</button>
      </div>
      <div class="hotel-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOK6P0q0h3dlwbv-X5InWA2FEUeW67oaUguWWhSMlFb3ekEJNc7W4LEL68NqbMsVMHLgM&usqp=CAU" alt="Hotel 3">
        <h2>Mountain Retreat</h2>
        <p class="location">Kalash, Pakistan</p>
        <p class="price">$180/night</p>
        <button class="book-now">Book Now</button>
      </div>
      <div class="hotel-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOK6P0q0h3dlwbv-X5InWA2FEUeW67oaUguWWhSMlFb3ekEJNc7W4LEL68NqbMsVMHLgM&usqp=CAU" alt="Hotel 3">
        <h2>Mountain Retreat</h2>
        <p class="location">Fairy Meadows, Pakistan</p>
        <p class="price">$180/night</p>
        <button class="book-now">Book Now</button>
      </div>
  </main><center>
  <section id="footer">
    <div class="footer-container">
        <div class="footer-about">
            <h3>About Us</h3>
            <p>Explore the world's most breathtaking destinations with us. We provide custom tour packages for travelers looking for adventure, culture, and unforgettable experiences.</p>
        </div>
        <div class="footer-contact">
            <h3>Contact Us</h3>
            <p>Address: Islamabad, Sector I-9, Street 14</p>
            <p>Email: <a href="mailto:info@touragency.com">info@touragency.com</a></p>
            <p>Phone: <a href="tel:+923190875344">03190875344</a></p>
        </div>
        <div class="footer-newsletter">
            <h3>Subscribe to Our Newsletter</h3>
            <form action="#" method="POST">
                <input type="email" placeholder="Your email address" required>
                
            </form>
        </div>
    </div>
    <div class="footer-social">
        <h3>Follow Us</h3>
        <ul>
            <i class="fa-brands fa-facebook"></i> Facebook</a></li>
            <i class="fa-brands fa-instagram"></i> Instagram</a></li>
            <i class="fa-brands fa-x-twitter"></i> Twitter</a></li>
            <i class="fa-brands fa-youtube"></i> YouTube</a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Tour Agency. All Rights Reserved.</p>
    </div>
</section>
  <script src="div.js"></script>

</body>
</html>
