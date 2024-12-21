function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}
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

// Show the first slide initially
showSlide(currentSlide);



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
// Function to open the modal
function openAuthModal() {
    const authModal = document.getElementById('auth-modal');
    if (authModal) {
        authModal.style.display = 'block';
    } else {
        console.error('Modal element not found');
    }
}

// Attach the openAuthModal function to all "Book Now" buttons
document.querySelectorAll('.book-now').forEach(button => {
    button.addEventListener('click', openAuthModal);
});



