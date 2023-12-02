// Navigation toggle functionality for mobile devices
const menuBtn = document.querySelector('.menu-btn');
const hamburger = document.querySelector('.menu-btn_burger');
const navMenu = document.querySelector('.nav-menu')
let menuOpen = false;

menuBtn.addEventListener('click', () => {
  if (!menuOpen) {
    menuBtn.classList.add('open');
    hamburger.classList.add('active');
    navMenu.classList.add('active');
  } else {
    menuBtn.classList.remove('open');
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
  }
  menuOpen = !menuOpen;
});

document.querySelectorAll('.nav-link').forEach((navLink) => {
  navLink.addEventListener('click', () => {
    menuBtn.classList.remove('open');
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
    menuOpen = false;
  });xx
});
