let errorMessage = ""; 
let submit = document.querySelector(".button");
function multiplyMatrixBin(A, B) // Перемножение матриц 
{
    let C = [];
    for (var i = 0; i < 4; i++) {
        C[i] = []; 
    }
    for (var i = 0; i < 4; i++) {
         for (var j = 0; j < 4; j++) { 
             let t = 0;
             for (var k = 0; k < 4; k++) {
                 t += A[j][k] * B[k][i];
             }
             C[j][i] = t % 2;
        }
     }
    return C;
}

function isValidate(arr) {
    console.log(arr);
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
    if (errorMessage) {
        return false; 
    }else {
        return true; 
    }
}

submit.onclick = function() {  
    let refl = true;
    let sym = true; 
    let halfSym = true;
    let tranz = true;  
    let matrixArray = document.querySelector(".enter").value.split("\n");
    for(let i = 0; i < matrixArray.length; i++) {
        matrixArray[i] = matrixArray[i].replace(/ +/g, ' ').trim();
        matrixArray[i] = matrixArray[i].split(" ");
    }
    if (isValidate(matrixArray)) {
        let tempMatrix = multiplyMatrixBin(matrixArray, matrixArray);
        for(let i = 0; i < 4; i++) {
            for(let j = 0; j < 4; j++) {
                if (!(!(matrixArray[i][j] == 1 && i != j) || matrixArray[j][i] == 0)) {
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
            document.querySelector("#refl").innerHTML = "Данная матрица рефлескивна";
        }else {
            document.querySelector("#refl").innerHTML = "Данная матрица не рефлескивна";
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
            document.querySelector("#tranz").innerHTML = "Данная матрица не тразитивна";
        }
    }else {
        alert(errorMessage);
    }
}