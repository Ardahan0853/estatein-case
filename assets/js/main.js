document.addEventListener('DOMContentLoaded', function () {

    // Mobile menu toggle
    var hamburger = document.getElementById('hamburger');
    var mobileMenu = document.getElementById('mobileMenu');
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', function () {
            mobileMenu.classList.toggle('open');
        });
    }

    // Dead links: prevent navigation/jump for placeholder (#) links
    document.querySelectorAll('a[href="#"]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();
        });
    });

    // Newsletter form: client-side validation + feedback
    var newsletter = document.getElementById('newsletter-form');
    if (newsletter) {
        var msg = document.querySelector('.footer-email-msg');
        newsletter.addEventListener('submit', function (e) {
            e.preventDefault();
            var input = newsletter.querySelector('input[type="email"]');
            var value = input.value.trim();
            var valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
            if (!valid) {
                msg.textContent = 'Please enter a valid email address.';
                msg.style.color = '#ff6b6b';
                input.focus();
                return;
            }
            msg.textContent = 'Thanks for subscribing!';
            msg.style.color = '#703bf7';
            newsletter.reset();
        });
    }

    // Top bar close
    var topBarClose = document.querySelector('.top-bar-close');
    var topBar = document.querySelector('.top-bar');
    if (topBarClose && topBar) {
        topBarClose.addEventListener('click', function () {
            topBar.style.display = 'none';
        });
    }

});
