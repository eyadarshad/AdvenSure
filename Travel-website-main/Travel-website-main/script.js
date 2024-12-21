
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const bullets = document.querySelectorAll('.bullet');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        bullets.forEach(bullet => bullet.classList.remove('active'));
        
        slides[index].classList.add('active');
        bullets[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);

    bullets.forEach((bullet, index) => {
        bullet.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    // Auto-advance slides every 5 seconds
    setInterval(nextSlide, 3000);
});
function openModal(modalId) {
    document.getElementById(modalId).style.display = 'flex';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

function switchModal(closeId, openId) {
    closeModal(closeId);
    openModal(openId);
}


// Animate features on scroll
document.addEventListener('DOMContentLoaded', function() {
    const featureItems = document.querySelectorAll('.feature-item');
    
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to handle scroll animation
    function handleScroll() {
        featureItems.forEach(item => {
            if (isInViewport(item)) {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }
        });
    }

    // Initial styles for animation
    featureItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(20px)';
        item.style.transition = 'all 0.5s ease-out';
    });

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Initial check for visible elements
    handleScroll();
});
// Toggle Side Navigation

        let currentSlide = 0;
const slides = document.querySelectorAll('.service-slide');
const totalSlides = slides.length;

function showSlide(index) {
    // Hide all slides
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(-${index * 100}%)`;
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
}
document.addEventListener('DOMContentLoaded', function() {
    // Add loading animation
    const images = document.querySelectorAll('.photo-item img');
    
    images.forEach(img => {
        // Add loading placeholder
        img.style.opacity = '0';
        
        img.addEventListener('load', function() {
            // Fade in image once loaded
            img.style.transition = 'opacity 0.5s ease';
            img.style.opacity = '1';
        });
    });

    // Add click handler for photos
    const photoItems = document.querySelectorAll('.photo-item');
    
    photoItems.forEach(item => {
        item.addEventListener('click', function() {
            // Get tour info
            const title = this.querySelector('h3').textContent;
            const duration = this.querySelector('p').textContent;
            
            // You can add your own logic here, like:
            // - Opening a modal with more details
            // - Navigating to a detail page
            // - Showing a booking form
            console.log(`Selected tour: ${title} - ${duration}`);
        });
    });
});
// Slideshow functionality
let slideIndex = 0;
showSlides();

function showSlides() {
  const slides = document.querySelectorAll(".slide");
  slides.forEach((slide) => (slide.style.display = "none"));
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 5000); // Change slide every 5 seconds
}

// Show the first slide initially
showSlide(currentSlide);


function toggleSideNav() {
    const sideNav = document.querySelector('.side-nav');
    sideNav.classList.toggle('open');
}

function toggleServiceDetails(serviceId) {
    // Toggle the visibility of the service details for the clicked service
    var serviceDetails = document.getElementById('service-' + serviceId);
    if (serviceDetails.style.display === "none" || serviceDetails.style.display === "") {
        serviceDetails.style.display = "block";
    } else {
        serviceDetails.style.display = "none";
    }
}


function bookService(serviceId) {
    // This function can be used to handle the booking logic
    alert("Booking service " + serviceId + "!");
}


// Close side nav when clicking outside
document.addEventListener('click', function(event) {
    const sideNav = document.querySelector('.side-nav');
    const menuToggle = document.querySelector('.menu-toggle');
    
    if (sideNav.classList.contains('open') && 
        !sideNav.contains(event.target) && 
        !menuToggle.contains(event.target)) {
        sideNav.classList.remove('open');
    }
});

// Toggle Side Navigation
function toggleNav() {
    const sideNav = document.getElementById('sideNav');
    // Check if the side nav is open (width = 250px)
    if (sideNav.style.width === '250px') {
        sideNav.style.width = '0';  // Close the side nav
    } else {
        sideNav.style.width = '250px';  // Open the side nav
    }
}

// Login Handler
function handleLogin() {
    alert('Login button clicked');
}

// Sign Up Handler
function handleSignUp() {
    alert('Sign Up button clicked');
}

// Login Handler



let currentSlide1 = 0;

function showSlide(index) {
    const slides = document.querySelectorAll(".slide");
    slides.forEach((slide, i) => {
        slide.classList.remove("active");
        if (i === index) {
            slide.classList.add("active");
        }
    });
}

function moveSlide(direction) {
    const slides = document.querySelectorAll(".slide");
    currentSlide += direction;
    if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    } else if (currentSlide >= slides.length) {
        currentSlide = 0;
    }
    showSlide(currentSlide);
}

// Initialize the first slide
showSlide(currentSlide);

document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const dotsContainer = document.querySelector('.dots');
    let currentSlide = 0;
    let autoSlideInterval;

    // Create dots
    slides.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.dot');

    // Function to move to a specific slide
    function goToSlide(n) {
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        
        currentSlide = (n + slides.length) % slides.length;
        
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    // Function to move slides
    window.moveSlide = function(direction) {
        goToSlide(currentSlide + direction);
        resetAutoSlide();
    };

    // Auto slide functionality
    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            moveSlide(1);
        }, 5000); // Change slide every 5 seconds
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    // Initialize auto slide
    startAutoSlide();

    // Pause auto slide on hover
    const slideshowContainer = document.querySelector('.slideshow-container');
    slideshowContainer.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });
    slideshowContainer.addEventListener('mouseleave', startAutoSlide);

    // Touch support for mobile devices
    let touchStartX = 0;
    let touchEndX = 0;

    slideshowContainer.addEventListener('touchstart', e => {
        touchStartX = e.touches[0].clientX;
    });

    slideshowContainer.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].clientX;
        handleSwipe();
    });

    function handleSwipe() {
        const swipeThreshold = 50;
        const difference = touchStartX - touchEndX;

        if (Math.abs(difference) > swipeThreshold) {
            if (difference > 0) {
                // Swiped left
                moveSlide(1);
            } else {
                // Swiped right
                moveSlide(-1);
            }
        }
    }
});

