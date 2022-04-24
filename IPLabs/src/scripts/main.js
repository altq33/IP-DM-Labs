const burger = document.querySelector('.burger-menu');
const menu = document.querySelector('.buttons-container');
const back = document.querySelector('body');

burger.onclick = function(){;
    menu.classList.toggle('active');
    back.classList.toggle('lock');
}

