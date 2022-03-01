let errorMessage = ""; 
let submit = document.querySelector(".button");
function multiplyMatrixBin(A, B) // Перемножение бинарных матриц 
{
    let C = [];
    for (let i = 0; i < 4; i++) {
        C[i] = []; 
    }
    for (let i = 0; i < 4; i++) {
         for (let j = 0; j < 4; j++) { 
             let t = 0;
             for (let k = 0; k < 4; k++) {
                 t += A[j][k] * B[k][i];
             }
             C[j][i] = t % 2;
        }
     }
    return C;
}
// Функция проверки валидости
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
        errorMessage = "Массив не должен быть пустым!";
    }
    if (errorMessage) {
        return false; 
    }else {
        return true; 
    }
}
// Основная функция проверки свойств отношений
submit.onclick = function() {  
    let refl = true;         // Логические переменные для хранения информации о свойствах 
    let sym = true; 
    let halfSym = true;
    let tranz = true;  
    let matrixArray = document.querySelector(".enter").value.split("\n");
    for(let i = 0; i < matrixArray.length; i++) {                     // Считываем двумерный массив, удаляя лишние пробелы
        matrixArray[i] = matrixArray[i].replace(/ +/g, ' ').trim();
        matrixArray[i] = matrixArray[i].split(" ");
    }
    if (isValidate(matrixArray)) {
        let tempMatrix = multiplyMatrixBin(matrixArray, matrixArray);
        for(let i = 0; i < 4; i++) {
            for(let j = 0; j < 4; j++) {
                if (!(!((matrixArray[i][j] == 1) && (i != j)) || matrixArray[j][i] == 0)) {
                    halfSym = false;
                }
                if (i == j) {
                    if (matrixArray[i][j] == 0) {
                        refl = false; 
                    }
                }else {
                    if(matrixArray[i][j] != matrixArray[j][i]) {
                        sym = false; 
                    }
                }
                if (matrixArray[i][j] == 0 && tempMatrix[i][j] == 1) {
                    tranz = false; 
                }
            }
        }
        if(refl) {
            document.querySelector("#refl").innerHTML = "Данная матрица рефлексивна";
        }else {
            document.querySelector("#refl").innerHTML = "Данная матрица не рефлексивна";
        }
        if (halfSym) { 
            document.querySelector("#cos").innerHTML = "Данная матрица кососимметрична";
        }else {
            document.querySelector("#cos").innerHTML = "Данная матрица не кососимметрична";
        }
        if(sym) {
            document.querySelector("#sym").innerHTML = "Данная матрица симметрична";
        }else {
            document.querySelector("#sym").innerHTML = "Данная матрица не симметрична";
        }
        if(tranz) {
            document.querySelector("#tranz").innerHTML = "Данная матрица транзитивна";
        }else {
            document.querySelector("#tranz").innerHTML = "Данная матрица не транзитивна";
        }
    }else {
        alert(errorMessage);
    }
}
