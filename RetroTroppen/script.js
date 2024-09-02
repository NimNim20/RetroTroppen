// Ensure the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    const scrollThreshold = 300; // Amount of pixels to scroll down before the button appears

    // Show or hide the button based on scroll position
    function handleScroll() {
        if (window.scrollY > scrollThreshold) {
            anime({
                targets: '#scrollToTopBtn',
                opacity: [0, 1],
                duration: 300,
                easing: 'easeInOutQuad',
                begin: () => scrollToTopBtn.style.display = 'block'
            });
        } else {
            anime({
                targets: '#scrollToTopBtn',
                opacity: [1, 0],
                duration: 300,
                easing: 'easeInOutQuad',
                complete: () => scrollToTopBtn.style.display = 'none'
            });
        }
    }

    // Smooth scroll to top
    function scrollToTop() {
        anime({
            targets: 'html, body',
            scrollTop: 0,
            duration: 800,
            easing: 'easeInOutQuad'
        });
    }

    // Listen for scroll events
    window.addEventListener('scroll', handleScroll);

    // Add click event listener to the button
    scrollToTopBtn.addEventListener('click', scrollToTop);
});
