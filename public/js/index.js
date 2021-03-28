const btnMenu = document.querySelector('.menu')
btnMenu.addEventListener('click', isActiveMenu);

function isActiveMenu() {
    const navMobile = document.querySelector('.nav-mobile');
    if ( navMobile.classList.contains('active') ) {
        navMobile.classList.remove('active');
        btnMenu.classList.remove('active');
    }
    else {
        navMobile.classList.add('active');
        btnMenu.classList.add('active');
    }
}

const btnViewUp = document.querySelector('.up');
btnViewUp.addEventListener('click', handleBackUpSite);

function handleBackUpSite() {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
        });
}