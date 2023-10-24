 // JavaScript code for toggling sidebar interactions
 function initializeToggle(routeId) {
    const btnToggle = document.getElementById(`buttonMenuToggle${routeId}`);
    const menuToggle = document.getElementById(`menuToggle${routeId}`);
    const toggleIcon = document.getElementById(`toggleIcon${routeId}`);

    btnToggle.addEventListener('click', () => {
        menuToggle.classList.toggle("hidden");
        toggleIcon.classList.toggle("rotate-180");
    });
}

// Initialize sidebar interactions for different routes
initializeToggle(1); // Call this for the first route
initializeToggle(2); // Call this for the second route
initializeToggle(3); // Call this for the third route
initializeToggle(4); // Call this for the third route
initializeToggle(5); // Call this for the third route

