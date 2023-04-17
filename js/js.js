const burgerToggle = document.querySelector('.header_naw');
const burgerBtnToggle = document.querySelector('.menu-icon');

burgerBtnToggle.addEventListener("click", function (){
    burgerBtnToggle.classList.toggle("menu-icon-active");
    burgerToggle.classList.toggle("body_red");
});

