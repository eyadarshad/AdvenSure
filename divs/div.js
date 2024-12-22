function toggleDropdown() {
  const dropdown = document.getElementById("profile-dropdown");
  dropdown.classList.toggle("visible");
}

// Close dropdown when clicking outside
window.addEventListener("click", function (event) {
  const dropdown = document.getElementById("profile-dropdown");
  const profilePic = document.querySelector(".profile-pic");
  if (!dropdown.contains(event.target) && event.target !== profilePic) {
    dropdown.classList.remove("visible");
  }
});


// Logout functionality
function logout() {
  window.location.href = "index.php";
}
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