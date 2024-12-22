<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdvenSure</title>
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="index_profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <script src="index_script.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="index_profile.php"><img src="logo.png" alt="Logo"></a>
        </div>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#service">Services</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#footer">Contact</a>
        </div>

        <div class="profile">
            <span class="profile-name"><?php echo htmlspecialchars($_SESSION['name']); ?></span>
           <img class="profile-pic" src="<?php echo $random_pic; ?>" alt="Profile Picture" onclick="toggleDropdown()">
            <div id="profile-dropdown" class="dropdown hidden">
                <button class="dropdown-btn">Profile</button>
                <button class="dropdown-btn">Settings</button>
                <button class="dropdown-btn">Help</button>
                <button class="dropdown-btn logout" onclick="logout()">Logout</button>
            </div>
        </div>
        <div class="mobile-menu" onclick="toggleMenu()">☰</div>
    </nav>
    
    <!-- Banner Section with Logo and Buttons -->
    <div class="background-slideshow">
        
        <div class="banner-text">
            <h1>AdvenSure</h1>
            <p>AdvenSure: Travel that Transforms</p>
            <div class="banner-btn">
                <a href="#"><span></span>Find Out</a>
                <a href="#"><span></span>Read More</a>
            </div>
        </div>
            </div>

<section id="features">
    <div class="title-text">
        <p>FEATURES</p>
        <h1>Why Choose Us</h1>
    </div>

    <div class="features-layer">
        <!-- Feature 1 -->
        <div class="feature-item">
            <div class="feature-img">
                <img src="index/winter-night-in-gulmarg.jpg" alt="Beautiful Locations">
            </div>
            <div class="feature-text">
                <h2>Beautiful Locations</h2>
                <p>Explore breathtaking landscapes, from serene valleys to majestic mountain peaks, where nature reveals its most captivating beauty. Discover hidden gems and iconic destinations that offer awe-inspiring views and unforgettable moments. Immerse yourself in crystal-clear lakes, lush green meadows, and vibrant cultural hotspots, perfect for every travel enthusiast. Our carefully curated tours take you to picturesque locations that promise peace, adventure, and lasting memories. Witness the magic of nature’s palette with stunning sunrises, colorful flora, and tranquil waterscapes at every destination.</p>
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="feature-item">
            <div class="feature-img">
                <img src="index/images.jpg" alt="Comfortable Places">
            </div>
            <div class="feature-text">
                <h2>Comfortable Places to Stay</h2>
                <p>Relax in the most comfortable accommodations that blend luxury with local charm.Experience the ultimate comfort at our handpicked accommodations, designed to make your stay relaxing and memorable. From cozy cottages in serene landscapes to luxurious resorts with world-class amenities, we offer a wide range of options to suit every traveler. Enjoy warm hospitality, modern facilities, and breathtaking views that make your lodging a part of the adventure. Each place is thoughtfully selected to provide convenience, tranquility, and a homely atmosphere. Whether you're seeking a romantic getaway or a family retreat, our accommodations promise to be your perfect haven.</p>
            </div>
        </div>

        <!-- Feature 3 -->
        <div class="feature-item">
            <div class="feature-img">
                <img src="index/tour-10-550x590.jpg" alt="Friendly Environment">
            </div>
            <div class="feature-text">
                <h2>Friendly Environment</h2>
                <p>Travel with a professional and hospitable team dedicated to making your trip memorable.Immerse yourself in a welcoming atmosphere where warmth and hospitality define every moment of your journey. Our team ensures a friendly environment that makes you feel at home, no matter where you travel. From the smiles of the locals to the camaraderie of fellow travelers, every interaction is filled with positivity and kindness. Enjoy personalized attention and care, creating connections that go beyond just a trip. With us, you’ll experience not only beautiful destinations but also the joy of exploring them in a supportive and inclusive setting.</p>
            </div>
        </div>
    </div>
</section>

<section id="service" class="tour-section">
            <div class="title-text">
                <p>DESTINATIONS</p>
                <h1>Our Tour Destinations</h1>
            </div>
            
            <div class="tour-container">
                <div class="tour-grid">
                    <!-- Hunza Valley -->
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="index/L_Naran Kaghan,saif ul malok,babu sar.jpg" alt="Hunza Valley">
                            <div class="price-badge">PKR 45,000</div>
                        </div>
                        <div class="tour-info">
                            <h2>Hunza Valley</h2>
                            <p>Experience the majestic beauty of Pakistan's northern paradise with stunning mountain views and ancient forts.</p>
                            <div class="tour-features">
                                <span>🗓️ 5 Days</span>
                                <span>👥 Max 12</span>
                                <span>⭐ 4.9/5</span>
                            </div>
                            <a href="divs/div1.php"><button class="book-now">Book Now</button></a>
                        </div>
                    </div>
        
                    <!-- Skardu -->
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="index/Springtime-view-of-mountain-peaks-in-the-Hunza-Valley-Pakistan.webp" alt="Skardu">
                            <div class="price-badge">PKR 55,000</div>
                        </div>
                        <div class="tour-info">
                            <h2>Skardu Valley</h2>
                            <p>Visit the heart of Baltistan featuring Deosai Plains, Shangrila Lake, and mighty Karakoram peaks.</p>
                            <div class="tour-features">
                                <span>🗓️ 6 Days</span>
                                <span>👥 Max 10</span>
                                <span>⭐ 4.8/5</span>
                            </div>
                            <a href="divs/div2.php"><button class="book-now">Book Now</button></a>
                        </div>
                    </div>
        
                    <!-- Naran Kaghan -->
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="index/minimarg.jpg" alt="Naran Kaghan">
                            <div class="price-badge">PKR 35,000</div>
                        </div>
                        <div class="tour-info">
                            <h2>Naran Kaghan</h2>
                            <p>Discover the enchanting valleys of Naran, Lake Saiful Muluk, and the scenic Babusar Pass.</p>
                            <div class="tour-features">
                                <span>🗓️ 4 Days</span>
                                <span>👥 Max 15</span>
                                <span>⭐ 4.7/5</span>
                            </div>
                            <a href="divs/div3.php"><button class="book-now">Book Now</button></a>
                        </div>
                    </div>
        
                    <!-- Swat Valley -->
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="index/b2.png" alt="Swat Valley">
                            <div class="price-badge">PKR 30,000</div>
                        </div>
                        <div class="tour-info">
                            <h2>Swat Valley</h2>
                            <p>Explore the 'Switzerland of Pakistan' with its lush valleys, crystal clear rivers, and historic sites.</p>
                            <div class="tour-features">
                                <span>🗓️ 4 Days</span>
                                <span>👥 Max 15</span>
                                <span>⭐ 4.6/5</span>
                            </div>
                            <a href="divs/div4.php"><button class="book-now">Book Now</button></a>
                        </div>
                    </div>
        
                    <!-- Chitral & Kalash -->
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="index/Ganga Choti.webp" alt="Chitral">
                            <div class="price-badge">PKR 50,000</div>
                        </div>
                        <div class="tour-info">
                            <h2>Chitral & Kalash</h2>
                            <p>Experience unique Kalash culture, visit Tirich Mir viewpoint, and explore historic Chitral Fort.</p>
                            <div class="tour-features">
                                <span>🗓️ 7 Days</span>
                                <span>👥 Max 10</span>
                                <span>⭐ 4.8/5</span>
                            </div>
                            <a href="divs/div4.php"><button class="book-now">Book Now</button></a>
                        </div>
                    </div>
        
                    <!-- Fairy Meadows -->
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="index/Tourist-Activities-by-Season-in-Naran-Kaghan.webp" alt="Fairy Meadows">
                            <div class="price-badge">PKR 40,000</div>
                        </div>
                        <div class="tour-info">
                            <h2>Fairy Meadows</h2>
                            <p>Camp under the stars with stunning views of Nanga Parbat, the Killer Mountain.</p>
                            <div class="tour-features">
                                <span>🗓️ 4 Days</span>
                                <span>👥 Max 8</span>
                                <span>⭐ 4.9/5</span>
                            </div>
                            <a href="divs/div4.php"><button class="book-now">Book Now</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <section id="testimonials" class="testimonials">
        <div class="title-text">
            <p>TESTIMONIALS</p>
            <h1>What Clients Say</h1>
        </div>
        
        <section id="testimonial-slideshow">
            <div class="slideshow-container">
                <!-- Slide 1 -->
                <div class="slide active">
                    <div class="slide-content">
                        <div class="client-img">
                            <img src="index/child.jpg" alt="John Doe">
                            <div class="quote-icon">❝</div>
                        </div>
                        <div class="comment-text">
                            <h3>John Doe</h3>
                            <p>Like a welcome gift at the hotel and a local guide who shared fascinating stories about each destination. I'm already planning my next trip with them!</p>
                            <div class="rating">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide">
                    <div class="slide-content">
                        <div class="client-img">
                            <img src="index/child.jpg" alt="Sarah Smith">
                            <div class="quote-icon">❝</div>
                        </div>
                        <div class="comment-text">
                            <h3>Sarah Smith</h3>
                            <p>I had the most incredible experience with this tour agency! I highly recommend them to anyone looking for a stress-free and memorable adventure!</p>
                            <div class="rating">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide">
                    <div class="slide-content">
                        <div class="client-img">
                            <img src="index/OIP.jpg" alt="Elon Musk">
                            <div class="quote-icon">❝</div>
                        </div>
                        <div class="comment-text">
                            <h3>Jeff Bezos</h3>
                            <p>I cannot say enough good things about this tour agency. From start to finish, the experience was flawless. The team's professionalism stood out, as did their passion for travel. Every moment was packed with adventure, yet I never felt rushed!</p>
                            <div class="rating">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="slider-navigation">
                <button class="prev" onclick="moveSlide(-1)">❮</button>
                <div class="dots"></div>
                <button class="next" onclick="moveSlide(1)">❯</button>
            </div>
        </section>
    </section>

    <!-- <script src="testimonials.js"></script> -->


    
    
<section class="footer" id="footer">
    <div class="footer-container">
        <!-- About Us Section -->
        <div class="footer-about">
            <h3>About Us</h3>
            <p>Explore the world's most breathtaking destinations with us. We provide custom tour packages for travelers looking for adventure, culture, and unforgettable experiences.</p>
        </div>

        <!-- Quick Links Section -->
       

        <!-- Contact Section -->
        <div class="footer-contact">
            <h3>Contact Us</h3>
            <p>Address: Islamabad, Sector I-9, Street 14</p>
            <p>Email: <a href="mailto:info@touragency.com">info@touragency.com</a></p>
            <p>Phone: <a href="tel:+923190875344">03190875344</a></p>
        </div>

        <!-- Newsletter Subscription Section -->
        <div class="footer-newsletter">
            <h3>Subscribe to Our Newsletter</h3>
            <form action="#" method="POST">
                <input type="email" placeholder="Your email address" required>
                
            </form>
        </div>
    </div>

    <!-- Social Media Section -->
    <div class="footer-social">
        <h3>Follow Us</h3>
        <ul>
            <i class="fa-brands fa-facebook"></i> Facebook</a></li>
            <i class="fa-brands fa-instagram"></i> Instagram</a></li>
            <i class="fa-brands fa-x-twitter"></i> Twitter</a></li>
            <i class="fa-brands fa-youtube"></i> YouTube</a></li>
        </ul>
    </div>

    <!-- Footer Bottom Section -->
    <div class="footer-bottom">
        <p>&copy; 2024 Tour Agency. All Rights Reserved.</p>
    </div>
</section>
     
</body>
</html>
