// navbar fixed

window.onscroll = function () {
    const header = document.querySelector('#header');
    const fixednavbar = header.offsetTop;

    if (window.pageYOffset > fixednavbar) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed')
    }
};


// Humburger

const humburger = document.querySelector('#hamburger');
const navmenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navmenu.classList.toggle('hidden');
});