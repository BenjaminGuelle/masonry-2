const btnMenu = document.querySelector('.header-toggle')
btnMenu.addEventListener('click', isActiveMenuAdmin);

function isActiveMenuAdmin() {
    const navMobile = document.querySelector('#header-admin');
    if ( navMobile.classList.contains('active') ) {
        navMobile.classList.remove('active');
        btnMenu.classList.remove('active');
    }
    else {
        navMobile.classList.add('active');
        btnMenu.classList.add('active');
    }
}