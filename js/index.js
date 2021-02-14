const app = {

    // GETTERS
    btnMenu: document.querySelector('.navbar-btn_menu'),

    init() {
        app.addEventToElment();

    },

    // Creat and add all event to elements
    addEventToElment() {
        app.btnMenu.addEventListener('click', () => {
            app.handleMenuMobClick();
        });
    },

    // drop down menu on mobile
    handleMenuMobClick() {
        const menu = document.querySelector('.navlinks-down');
        menu.classList.toggle('active');
    },

};

window.addEventListener('DOMContentLoader', app.init());