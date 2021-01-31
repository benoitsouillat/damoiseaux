/*  Bouton Responsive Menu */

let menuButton = document.getElementById('button-nav');
let menuClose = document.getElementById('button-close');
let menu = document.getElementById("menu");

const toggleNav = () => {

    let menuButtonState = window.getComputedStyle(menuButton);

    if (menuButtonState.display === "block")   /* Clic pour afficher le menu */
    {
        menuButton.style.display = "none";
        menuClose.style.display = "block";
        menu.style.display = "block";
    }
    else if (menuButtonState.display === "none")    /* Clic pour cacher le menu */
    {
        menuClose.style.display = "none";
        menuButton.style.display = "block";
        menu.style.display = "none";
    }
}

menuButton.addEventListener("click", toggleNav);
menuClose.addEventListener("click", toggleNav);
