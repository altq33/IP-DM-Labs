let burger = document.querySelector('.burger-menu');
let menu = document.querySelector('.buttons-container');
let back = document.querySelector('body');
let header__list = document.querySelector('.header__list');

burger.onclick = function(){;
    menu.classList.toggle('active');
    back.classList.toggle('lock');
}