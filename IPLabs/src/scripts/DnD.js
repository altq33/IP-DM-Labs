const dragNDrop = () => {
    const img = document.querySelectorAll(".js-img");   // коллекция картинок 
    const fav = document.querySelectorAll(".drag-box"); // коллекция контейнеров для картинок
    let grabbed;   // переменная хранит текущий взятый объект, нужна для добавление текущего элемента в новый драг бокс
    // Функции для взаимодействия с драгом
    function dragStart() {
        setTimeout(() => {
            this.classList.add("hide")}
            , 0);
        grabbed = this; 
    }

    function dragEnd() {
        this.classList.remove("hide")
    }

    function dragOver(e) {
        e.preventDefault();
    }

    
    function dragEnter(e) {
        e.preventDefault();
        if(fav[1].childElementCount != 1) {
            this.classList.add("hovered");
        }else if(this == fav[0]) {
            this.classList.add("hovered");
        }       
    }

    function dragLeave() {
        this.classList.remove("hovered");
    }

    function dragDrop() {
        if(this.childElementCount == 0 || this == fav[0]) {
            this.append(grabbed);
        }  
        this.classList.remove("hovered");
    }
    // Вешаем все обработчики на каждый элемент коллекции
    for(elem of img) {
        elem.addEventListener("dragstart", dragStart);
        elem.addEventListener("dragend", dragEnd);
    }

    for(elem of fav) {    
        elem.addEventListener("dragover", dragOver);
        elem.addEventListener("dragenter", dragEnter);
        elem.addEventListener("dragleave", dragLeave);
        elem.addEventListener("drop", dragDrop);
    }
}

dragNDrop();
