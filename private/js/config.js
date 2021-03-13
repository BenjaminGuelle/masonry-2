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
}

// Function to active Modal
// const btnModal = document.querySelectorAll('.get_modal');

// for (let index = 0; index < btnModal.length; index++) {
//     btnModal[index].addEventListener('click', handleActiveModal);
// }

// function handleActiveModal() {
//     console.log('Active modal');
//     const modal = document.querySelector('.modal');
//     if ( modal.classList.contains('active') ) {
//         modal.classList.remove('active');
//     }
//     else {
//         modal.classList.add('active');
//     }
// }