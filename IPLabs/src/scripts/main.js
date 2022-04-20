const burger = document.querySelector('.burger-menu');
const menu = document.querySelector('.buttons-container');
const back = document.querySelector('body');

burger.onclick = function(){;
    menu.classList.toggle('active');
    back.classList.toggle('lock');
}

const signUp = document.querySelector(".modal-sign-up");
const logIn = document.querySelector(".modal-log-in");  
const signUpButton = document.querySelector(".sign-up");
const logInButton = document.querySelector(".log-in");
const signClose = document.querySelector(".close-sign");
const logClose = document.querySelector(".close-log");

signUpButton.addEventListener("click", function() {
    if(logIn.classList.contains("open")){
        logIn.classList.remove("open");
        setTimeout(function() {
            signUp.classList.toggle("open");
        }, 500);
      
    }else {
        signUp.classList.toggle("open");
    }
});

logInButton.addEventListener("click", function() {
    if(signUp.classList.contains("open")){
        signUp.classList.remove("open");
        setTimeout(function() {
            logIn.classList.toggle("open");
        }, 500);
    }else {
        logIn.classList.toggle("open");
    }
});

signClose.addEventListener("click", () => signUp.classList.remove("open"));
logClose.addEventListener("click", () => logIn.classList.remove("open"));