let shares = document.querySelector('.social_share');
let social = document.querySelector('.ul-social-share');

shares.addEventListener('click', function () {
    social.classList.toggle('ul_active_share');
});