// Wait until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    const scrollThreshold = 300; // Scroll threshold in pixels

    // Function to show or hide the button based on scroll position
    function handleScroll() {
        if (window.scrollY > scrollThreshold) {
            scrollToTopBtn.style.display = 'block';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    }

    // Function to smoothly scroll to the top
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);

    // Add click event listener to the button
    scrollToTopBtn.addEventListener('click', scrollToTop);
});
