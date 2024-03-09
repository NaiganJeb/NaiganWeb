const navToggle = document.getElementById('nav-toggle');
const navList = document.querySelector('nav ul');

navToggle.addEventListener('change', function () {
    navList.classList.toggle('show', this.checked);
});

document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetSection = document.getElementById(targetId);

        document.querySelectorAll('section').forEach(section => {
            section.classList.remove('active-section');
        });

        targetSection.classList.add('active-section');

        // Smooth scrolling to the target section
        const navHeight = document.querySelector('nav').offsetHeight;
        const offset = window.innerWidth <= 600 ? -200 : -100; // Adjust the negative value

        window.scrollTo({
            top: targetSection.offsetTop - navHeight + offset,
            behavior: 'smooth'
        });

        // Close the navigation menu on small screens
        if (window.innerWidth <= 600) {
            navList.classList.remove('show');
            navToggle.checked = false;
        }
    });
});
