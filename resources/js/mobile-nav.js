const openMobileNavButtons = document.querySelectorAll('[data-nav-open]');
const pageWrapper = document.querySelector('.page-wrapper');

openMobileNavButtons.forEach((openButton) => {
    openButton.addEventListener('click', event => {
        pageWrapper.classList.toggle('nav-open');
    });
});