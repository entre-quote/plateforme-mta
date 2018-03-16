var btnOpen = document.querySelector('#open-nav');
var btnClose = document.querySelector('#close-nav');
var navLink = document.querySelector('.main-nav nav a');
var nav = document.querySelector('.main-nav');

btnOpen.onclick = function() {
  nav.classList.toggle('active');
}

btnClose.onclick = function() {
  nav.classList.toggle('active');
}

navLink.onclick = function() {
  nav.classList.toggle('active');
}
