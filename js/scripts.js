// Scroll to top function
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Event listeners
document.addEventListener('DOMContentLoaded', (event) => {
    // Adding event listener for 'Volver al Inicio' buttons
    const scrollToTopButtons = document.querySelectorAll('.scroll-to-top');
    scrollToTopButtons.forEach(button => {
        button.addEventListener('click', scrollToTop);
    });
});
