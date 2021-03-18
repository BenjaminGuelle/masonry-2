// Function to move menu from left to right screen on mobile screen.
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

// Function to edit span on upload file => section presentation Admin
const inputUpload = document.querySelector('#fileUpload');
inputUpload.addEventListener('change', handleGetNameFileUpload );

function handleGetNameFileUpload() {
    const spanNamePicture = document.querySelector('.picture_name');
    spanNamePicture.innerHTML = "Votre fichier :" + inputUpload.value;
};
