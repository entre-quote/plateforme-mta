var mobileNavBtn = document.querySelector('.mobileNavBtn');
var pageNav = document.querySelector('.page-nav nav');
var pageNavLink = document.querySelectorAll('.page-nav nav a');

mobileNavBtn.onclick = function() {
    pageNav.classList.toggle('active');
}

pageNav.onclick = function() {
    pageNav.classList.toggle('active');
}
