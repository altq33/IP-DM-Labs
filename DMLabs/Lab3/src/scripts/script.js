let errorMessage = ""; 
let submit = document.querySelector(".button");

function isValidate(arr) {
    errorMessage = ""; 
    if (arr.length != 4) { 
        errorMessage = "Матрица должна содержать 4 строки!";
    }
    for(let i = 0; i < arr.length; i++) {
        if(arr[i].length != 4) {  
            errorMessage = "Матрица должна содержать 4 столбца!";
        }        
        for(let j = 0; j < arr[i].length; j++) {
            if (arr[i][j] != '1' && arr[i][j] != '0') {
                errorMessage = "Введенная матрица должна состоять из 0 и 1!";
            }
        }
    }
    if (arr[0][0] == "") {
        errorMessage = "Матрица не должна быть пустой!";
    }
    if (errorMessage) {
        return false; 
    }else {
        return true; 
    }
}

submit.addEventListener("click", function(e) {    
    let matrixArray = document.querySelector(".area").value.split("\n");
    let flagA = true;
    let flagB = true; 
    let rowCheck = "";
    let colCheck = "";
    for(let i = 0; i < matrixArray.length; i++) {                     // Считываем двумерный массив, удаляя лишние пробелы
        matrixArray[i] = matrixArray[i].replace(/ +/g, ' ').trim();
        matrixArray[i] = matrixArray[i].split(" ");
    }
    if (isValidate(matrixArray)) {
        for(let i = 0; i < 4; i++) {
            colCheck = "";
            rowCheck = "";
            for(let j = 0; j < 4; j++) {
                colCheck += matrixArray[j][i];
                rowCheck += matrixArray[i][j];
            }
            if (colCheck.split("1").length - 1 != 1) {
                flagA = false; 
            }
            if (rowCheck.split("1").length - 1 != 1) {
                flagB = false; 
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
        }   
    }else {
        alert(errorMessage);
    }
})
