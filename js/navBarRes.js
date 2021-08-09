const menuIcon = document.querySelector(".responsiveBar");
const resTab = document.querySelector(".navBarResponsive");

let menuOpen = false;

menuIcon.addEventListener('touchstart', ()=> {

    if (!menuOpen) {
        menuIcon.classList.add('open');
        resTab.classList.add('open');
        menuOpen= true;
        
    }
    else{
        menuIcon.classList.remove('open');
        resTab.classList.remove('open');

        menuOpen= false;
    }
})
