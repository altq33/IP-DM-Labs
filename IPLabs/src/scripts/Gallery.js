const img = document.querySelectorAll(".line-container .img-container img");
const imgCont = document.querySelector(".img-container")
let count = 0;
let width; 

function init() {
    width = document.querySelector(".line-container").offsetWidth + 7;
    imgCont.style.width = width  * img.length + "px";
    img.forEach(item => {
        item.style.width =  width  + "px";
        item.style.height = "auto"; 
    })
    roll();
}

init();
window.addEventListener("resize", init);


document.querySelector(".right-arrow").addEventListener("click", function(e) { 
    count++;
    if(count >= img.length) {
        count = 0;
    }
    roll();
});

document.querySelector(".left-arrow").addEventListener("click", function(e) { 
    count--;
    if(count < 0) {
        count = img.length - 1;
    }
    roll();
});


function roll() {
    imgCont.style.transform = "translate(-"+count*width+"px)";
}