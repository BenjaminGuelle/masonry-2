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

function handleBackUpSite() {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
        });
}

function getBtnMenu() {
    return typeof document == 'undefined' ? null : document.querySelector('.menu');
}
function getBtnUp() {
    return typeof document == 'undefined' ? null : document.querySelector('.up');
}

document.addEventListener('DOMContentLoaded', () => {
    getBtnMenu() &&  getBtnMenu().addEventListener('click', isActiveMenu);
    getBtnUp() &&  getBtnUp().addEventListener('click', handleBackUpSite);
});