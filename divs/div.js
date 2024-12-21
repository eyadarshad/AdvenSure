document.querySelectorAll('.book-now').forEach(button => {
    button.addEventListener('click', () => {
      alert('Booking feature coming soon!');
    });
  });
  function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}
// Toggle Side Navigation

        let currentSlide = 0;
const slides = document.querySelectorAll('.service-slide');
const totalSlides = slides.length;