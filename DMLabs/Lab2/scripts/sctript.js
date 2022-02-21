let errorMessage = ""; 

function MultiplyMatrix(A, B)
{
    let C = [];
    for (var i = 0; i < 4; i++) {
        C[i] = []; 
    }
    for (var i = 0; i < 4; i++) {
         for (var j = 0; j < 4; j++) { 
             let t = 0;
             for (var k = 0; k < 4; k++) {
                 t += A[ j ][k]*B[k][i];
             }
             C[j][i] = t;
        }
     }
    return C;
}

function TransMatrix(matrix)      // Транспонирование матрицы 
{
    let tMatrix = [];
    for (let i = 0; i < 4; i++) { 
       tMatrix[i] = [];
        for (let j = 0; j < 4; j++) {
           tMatrix[i][j] = matrix[j][i];
       } 
     }
    return tMatrix;
}

function isValidate(arr) {
    errorMessage = ""; 
    for(let i = 0; i < arr.length; i++) {
        if(arr[i].length != 4) {  
            errorMessage = "Матрица должна содержать 4 столбца!";
            break; 
        }
        if (arr.length != 4) { 
            errorMessage = "Матрица должна содержать 4 строки!";
        }
    }
    if (errorMessage) {
        return false; 
    }else {
        return true; 
    }
}

function Calculation() {  
    let refl = true;
    let halfRefl = false;
    let sym = true; 
    let antiSym = true; 
    let matrixArray = document.querySelector(".enter").value.split("\n");
    for(let i = 0; i < matrixArray.length; i++) {
        matrixArray[i] = matrixArray[i].replace(/ +/g, ' ').trim();
        matrixArray[i] = matrixArray[i].split(" ");
    }
    if (isValidate(matrixArray)) {
        let tempMatrix = MultiplyMatrix(TransMatrix(matrixArray), matrixArray);
        /* Переписать 
        for(let i = 0; i < 4; i++) { 
            for(let j = 0; j < 4; j++) {
                if(i === j) { 
                    if (matrixArray[i][j] != "1") {
                        refl = false;  
                    }
                    if (matrixArray[i][j] === "1") {
                        halfRefl = true;  
                    }                  
                }else {
                    if (matrixArray[i][j] != matrixArray[j][i]) { 
                        sym = false; 
                    } 
                    if(tempMatrix[i][j] == 1) {
                        antiSym = false;
                    }              
                }
            }      
        }*/
        if(refl) {
            document.querySelector("#refl").innerHTML = "Данная матрица рефлескивна";
        }else {
            if (halfRefl) { 
                document.querySelector("#refl").innerHTML = "Данная матрица косорефлескивна";
            }else {
                document.querySelector("#refl").innerHTML = "Данная матрица антирефлексивна";
            }
        }
        if(sym) {
            document.querySelector("#sym").innerHTML = "Данная матрица симметрична";
        }else {
            if(antiSym) {
                 document.querySelector("#sym").innerHTML = "Данная матрица асимметрична";
            }      
        }
    }else {
        alert(errorMessage);
    }
}