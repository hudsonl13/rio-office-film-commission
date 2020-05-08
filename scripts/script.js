window.onload = function()
{
    // Controla slider de filmes gravados no Rio de Janeiro
    var filmagensGrade = document.querySelector(".filmagens__grade");
    var scrollerLeft = document.querySelector(".filmagens__scroller.scroller-left");
    var scrollerRight = document.querySelector(".filmagens__scroller.scroller-right");

    if (scrollerLeft)
        scrollerLeft.addEventListener("click" , () =>
            scrollerLeft.nextElementSibling.scrollLeft -= scrollerLeft.nextElementSibling.offsetWidth);

    if (scrollerRight)
        scrollerRight.addEventListener("click" , () =>
            scrollerRight.previousElementSibling.scrollLeft += scrollerRight.previousElementSibling.offsetWidth);

    // Controla menu lateral da versao mobile
    var menuToggler = document.querySelector(".nav__menu-toggler");
    var aside = document.querySelector("aside");

    menuToggler.addEventListener("click" , () =>
        aside.classList.toggle("aside--visible"));
}
