let offset = 0; 
const imgContainer = document.querySelector(".img-container");  
const leftArrow = document.querySelector(".left-arrow");
const rightArrow = document.querySelector(".right-arrow");
let first = document.querySelector("#first-point");
let second = document.querySelector("#second-point");
let third = document.querySelector("#third-point");
let fourth = document.querySelector("#fourth-point");

function checkPos(off) {
    switch(off) {
        case 0:
            third.classList.remove("dots-active");
            second.classList.remove("dots-active");
            fourth.classList.remove("dots-active");
            first.classList.add("dots-active");
            break;
        case 820:
            third.classList.remove("dots-active");
            first.classList.remove("dots-active");
            fourth.classList.remove("dots-active");
            second.classList.add("dots-active");    
            break;
        case 820 * 2:
            second.classList.remove("dots-active");
            first.classList.remove("dots-active");
            fourth.classList.remove("dots-active");
            third.classList.add("dots-active");
            break;
        case 820 * 3:
            second.classList.remove("dots-active");
            first.classList.remove("dots-active");
            third.classList.remove("dots-active");
            fourth.classList.add("dots-active");
    }
}

rightArrow.addEventListener('click', function(e) { 
    if(offset >= 820 * 3){
        offset = 0;
    }else {
        offset += 820;  
    }
    checkPos(offset);
    imgContainer.style.left = -offset + "px";
})

leftArrow.addEventListener('click', function(e) { 
    if(offset <= 0){ 
        offset = 820 * 3;
    }else {
        offset -= 820; 
    }
    checkPos(offset);   
    imgContainer.style.left = -offset + "px";
})

first.addEventListener('click', function(e) {
    third.classList.remove("dots-active");
    second.classList.remove("dots-active");
    fourth.classList.remove("dots-active");
    first.classList.add("dots-active");
    offset = 0;
    imgContainer.style.left = offset + "px";
})

second.addEventListener('click', function(e) {
    third.classList.remove("dots-active");
    first.classList.remove("dots-active");
    fourth.classList.remove("dots-active");
    second.classList.add("dots-active");
    offset = 820;
    imgContainer.style.left = -offset + "px";
})

third.addEventListener('click', function(e) {
    second.classList.remove("dots-active");
    first.classList.remove("dots-active");
    fourth.classList.remove("dots-active");
    third.classList.add("dots-active");
    offset = 820 * 2;
    imgContainer.style.left = -offset + "px";
})

fourth.addEventListener('click', function(e) {
    second.classList.remove("dots-active");
    first.classList.remove("dots-active");
    third.classList.remove("dots-active");
    fourth.classList.add("dots-active");
    offset = 820 * 3;
    imgContainer.style.left = -offset + "px";
})