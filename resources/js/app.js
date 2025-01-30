import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const notification = document.getElementById('notification');
    const closeBtn = document.getElementById('closeBtn');

    // Function to show the notification
    function showNotification() {
        notification.style.bottom = '25px';
        notification.style.opacity = '1';
        notification.style.transform = 'translateY(0)'; // Reset translation
    }

    // Function to hide the notification
    function hideNotification() {
        notification.style.opacity = '0';
        notification.style.transform = 'translateY(100px)'; // Slide back down
        setTimeout(() => notification.remove(), 500); // Remove after animation
    }

    // Show the notification with animation
    setTimeout(showNotification, 100);

    // Auto-hide the notification after 15 seconds
    const timer = setTimeout(hideNotification, 15000);

    // Close button functionality
    closeBtn.addEventListener('click', () => {
        hideNotification();
        clearTimeout(timer); // Prevent auto-hide if manually closed
    });
});