// hamburger navbar button
let nav = document.querySelector('#navbar');
let navBtn = document.querySelector('#navbar .menu-toggle-btn');
let navMenu = document.querySelector('.navigation-menu');
navBtn.addEventListener('click', function(){
    nav.classList.toggle('active');
    navBtn.classList.toggle('active');
    navMenu.classList.toggle('active');
});
// sticky navbar
window.addEventListener('scroll', function(){
    // sticky
    nav.classList.toggle('sticky', window.scrollY > 0);
    const wrapper = document.querySelector('.wrapper');
    wrapper.classList.toggle('sticky', window.scrollY > 0);
    // sticky-shrink
    nav.classList.toggle('sticky-shrink', window.scrollY > 250);
})