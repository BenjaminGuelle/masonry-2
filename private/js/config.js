const btnMenu = document.querySelector('.header-toggle')
btnMenu.addEventListener('click', isActiveMenuAdmin);
const sectionAdmin = document.querySelector('.section');

function isActiveMenuAdmin() {
    const navMobile = document.querySelector('#header-admin');
    if ( navMobile.classList.contains('active') ) {
        navMobile.classList.remove('active');
        btnMenu.classList.remove('active');
        sectionAdmin.classList.remove('active');
    }
    else {
        navMobile.classList.add('active');
        btnMenu.classList.add('active');
        sectionAdmin.classList.add('active');
    }
};

