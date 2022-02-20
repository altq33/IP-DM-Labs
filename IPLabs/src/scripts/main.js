let burger = document.querySelector('.burger-menu');
let menu = document.querySelector('.buttons-container');
let back = document.querySelector('body');

burger.onclick = function(){;
    menu.classList.toggle('active');
    back.classList.toggle('lock');
}
