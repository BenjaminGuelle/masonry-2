document.querySelector('.menu').addEventListener('click', isActiveMenu);

function isActiveMenu() {
    const navMobile = document.querySelector('.nav-mobile');
    if ( navMobile.classList.contains('active') ) {
        navMobile.classList.remove('active');
    }
    else {
        navMobile.classList.add('active');
    }
}