let errorMessage = ""; 

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
    let matrixArray = document.querySelector(".enter").value.split("\n");
    for(let i = 0; i < matrixArray.length; i++) {
        matrixArray[i] = matrixArray[i].replace(/ +/g, ' ').trim();
        matrixArray[i] = matrixArray[i].split(" ");
    }
    if (isValidate(matrixArray)) {
        // здесь будет логика
    }else {
        alert(errorMessage);
    }
}