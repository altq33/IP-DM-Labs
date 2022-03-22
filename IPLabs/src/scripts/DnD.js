const dragNDrop = () => {
    const img = document.querySelectorAll(".js-img");
    const fav = document.querySelectorAll(".drag-box");

    function dragStart() {
        setTimeout(() => {
            this.classList.add("hide")}
            , 0);
    }

    function dragEnd() {
        this.classList.remove("hide")
    }

    function dragOver(e) {
        e.preventDefault();
    }

    
    function dragEnter(e) {
        e.preventDefault();
        this.classList.add("hovered");
    }

    function dragLeave() {
        this.classList.remove("hovered");
    }

    function dragDrop() {
        this.append(img[0]);
        this.classList.remove("hovered");
    }


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