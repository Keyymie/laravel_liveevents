document.addEventListener('DOMContentLoaded', function () {
    function rotateNotifications(selector) {
        const items = document.querySelectorAll(selector);
        let current = 0;

        function showNext() {
            items.forEach((item, index) => {
                item.classList.remove('active');
                if (index === current) {
                    item.classList.add('active');
                }
            });
            current = (current + 1) % items.length;
        }

        if (items.length > 0) {
            showNext();
            setInterval(showNext, 5000);
        }
    }

    rotateNotifications('.notification-item.important');
    rotateNotifications('.notification-item.general');
});
