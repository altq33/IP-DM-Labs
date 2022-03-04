let errorMessage = ""; 
let submit = document.querySelector(".button");
// Валидация
function isValidate(A, B, couples) {
    errorMessage = "";
    if (A.size != 4 || B.size != 4) {
        errorMessage = "Множества должны содержать по 4 элемента!";
    }
    for(elem of couples) {
        if(!(A.has(elem[0]) && B.has(elem[1])) || elem.length != 2) {
            errorMessage = "Пары элементов должны быть вида (Ai Bi, An Bn...)";
        }
    }
    if(errorMessage) {
        return false; 
    }else {
        return true; 
    }
}
// Обработчик событий
submit.addEventListener("click", function(e) {    
    let elementsA = document.querySelector("#first-set").value.replace(/ +/g, ' ').trim();
    let elementsB = document.querySelector("#second-set").value.replace(/ +/g, ' ').trim();
    let couples = document.querySelector("#relative").value.split(",");
    const setElementsA = new Set(elementsA.split(" "));
    const setElementsB = new Set(elementsB.split(" ")); 
    let matrixArray = [[0, 0, 0, 0], [0, 0, 0, 0], [0, 0, 0, 0], [0, 0, 0, 0]]; 
    let flagA = true;
    let flagB = true; 
    let rowCheck = "";
    let colCheck = "";
    // Представляем пары в виде двумерного массива
    for(let i = 0; i < couples.length; i++) {
        couples[i] = couples[i].replace(/ +/g, ' ').trim(); 
        couples[i] = couples[i].split(" ");
    }
    // Проверка валидности и далее основные действия
    if (isValidate(setElementsA,  setElementsB,  couples)) {
        // Составляем матрицу по отношению 
        for(let i = 0; i < couples.length; i++) {
           let firstIndex = Array.from(setElementsA).indexOf(couples[i][0]);
           let secondIndex = Array.from(setElementsB).indexOf(couples[i][1]);
            if(firstIndex != -1 && secondIndex != -1) {
                matrixArray[firstIndex][secondIndex] = 1; 
            }
        }
        for(let i = 0; i < 4; i++) {
            colCheck = "";
            rowCheck = "";
            for(let j = 0; j < 4; j++) {
                colCheck += matrixArray[j][i];
                rowCheck += matrixArray[i][j];
            }
            if (colCheck.split("1").length - 1 != 1) {
                flagB = false; 
            }
            if (rowCheck.split("1").length - 1 != 1) {
                flagA = false;  
            } 
        }
        for(let i = 0; i < 4; i++) {
            matrixArray[i] = matrixArray[i].join(" ");
        }
        const str = "#matrix";
        for(let i = 1; i < (matrixArray.length + 1); i++) {
            document.querySelector(str + String(i)).innerHTML = matrixArray[i - 1]; 
        } 
        if (flagA) {    
            document.querySelector("#AB").innerHTML = "Отношение является функцией А в B";
        }else {
            document.querySelector("#AB").innerHTML = "Отношение не является функцией А в B";
        }
        if (flagB) {
            document.querySelector("#BA").innerHTML = "Отношение является функцией B в A";
        }else {
            document.querySelector("#BA").innerHTML = "Отношение не является функцией B в A";
        }    
    }else {
        alert(errorMessage);
    }
})
