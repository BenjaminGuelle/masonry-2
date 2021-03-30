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

// display button scroll top

function handleScroll() {
  var scrollableHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var GOLDEN_RATIO = 0.5;

  if ((document.documentElement.scrollTop / scrollableHeight ) > GOLDEN_RATIO) {
    //show button
    getBtnUp().style.display = "flex";
  } else {
    //hide button
    getBtnUp().style.display = "none";
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
    document.addEventListener("scroll", handleScroll);
    getBtnMenu() &&  getBtnMenu().addEventListener('click', isActiveMenu);
    getBtnUp() &&  getBtnUp().addEventListener('click', handleBackUpSite);
});