window.onload = function() {
    const img = document.querySelectorAll(".line-container .img-container img");
    const imgCont = document.querySelector(".img-container");
    const lineCont = document.querySelector(".line-container");
    let count = 0;
    let width; 
    
    function reColor() {
        switch(count) {
            case 0: 
                lineCont.style.background = "linear-gradient(90deg, #69b7eb, #b3dbd3, #f4d6db)";
                break; 
            case 1:
                lineCont.style.background = "linear-gradient(90deg,#f7576a,#f0817d,#e5a398)";
                break;
            case 2:
                lineCont.style.background = "linear-gradient(90deg,#2faac8,#40cc62,#bbee7d)";
                break;
            case 3: 
                lineCont.style.background = "linear-gradient(90deg, #afd9f7,#459cf7)";
                break;        
        }
    }

    function init() {
        width = lineCont.offsetWidth + 9;
        imgCont.style.width = width  * img.length + "px";
        img.forEach(item => {
            item.style.width =  width  + "px";
            item.style.height = "auto"; 
        })
        document.querySelector(".img-frame").style.height = getComputedStyle(lineCont).height;
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
        if(count == 0) {
            document.querySelector("#point4").classList.remove("dots-active");
            document.querySelector("#point1").classList.add("dots-active");
        }else {
            document.querySelector("#point" + count).classList.remove("dots-active");
            document.querySelector("#point" + (count + 1)).classList.add("dots-active"); 
        }
        reColor();
    });

    document.querySelector(".left-arrow").addEventListener("click", function(e) { 
        count--;
        if(count < 0) {
            count = img.length - 1;
        }
        roll();
        if(count == img.length - 1) {
            document.querySelector("#point1").classList.remove("dots-active");
            document.querySelector("#point4").classList.add("dots-active");
        }else {
            document.querySelector("#point" + (count + 2)).classList.remove("dots-active");
            document.querySelector("#point" + (count + 1)).classList.add("dots-active"); 
        }
        reColor();
    });

    // Функция смещения 
    function roll() {
        imgCont.style.transform = "translate(-"+count*width+"px)";
    }

    // Обработчик нажатия на поинты
    const toggles = document.querySelectorAll(".dots"); 

    for (let item of toggles) {
        item.addEventListener("click", function(e) {
            for(let toggle of toggles) {
                toggle.classList.remove("dots-active");
            }
            e.target.classList.add("dots-active");
            count = e.target.id[e.target.id.length - 1] - 1;
            imgCont.style.transform = "translate(-"+count*width+"px)";
            reColor();
        });
    }



}
