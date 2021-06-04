// Mobile nav

const hamburgerBtn = document.querySelector('.hamburger-btn');
const navMenu = document.querySelector('.menu-primary-container');
const navCon = document.querySelector('.nav-con');
const navLogo = document.querySelector('.logo-con');

const activeNav = () => {
    hamburgerBtn.addEventListener('click', showNavMenu);

    function showNavMenu() {
        navMenu.classList.toggle('nav-active');
        navCon.classList.toggle('nav-active');
        hamburgerBtn.classList.toggle('nav-active');
        navLogo.classList.toggle('nav-active');
    }
};

activeNav();

// fade in on scroll 

const postSection = document.querySelectorAll('.section');
const faders = document.querySelectorAll('.fade-in');

const appearOptions = {
    rootMargin: "0px 0px -100px 0px"
};

const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('appear');
                appearOnScroll.unobserve(entry.target);
            }
        })
    },
    appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
})