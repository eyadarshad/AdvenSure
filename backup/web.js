// Navigation Toggle Function
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}

let currentSlide = 0;

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
