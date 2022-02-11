var error_message = "";
// Проверяет валидность полученных множеств
function isValidate(message) {
    let arr = message.split(" ");
    if(message1.length === 0 || message2.length === 0) {
        error_message = "Одно из множеств пустое, пожалуйста введите множества";
        return false;
    }
    for(let i = 0; i < arr.length; i++) {
        if(arr[i].length != 4) {
            error_message = "Элемент множества должен содеражть 4 символа!";
            return false; 
        }
        if(!(Number.isInteger(Number(arr[i][0])))) {
            error_message = "Первый сиимвол должен быть цифрой!"
            return false;
        }
        if(!(Number.isInteger(Number(arr[i][1])))) {
            error_message = "Второй сиимвол должен быть цифрой!"
            return false;
        }
        if(!(Number.isInteger(Number(arr[i][3])))) {
            error_message = "Четвертый сиимвол должен быть цифрой!"
            return false;
        }
        if(arr[i][0] % 2 > 0) {
            error_message = "Первая цифра в элемете множества должна быть четной!";
            return false; 
        }
        if(arr[i][1] % 2 === 0) {
            error_message = "Вторая цифра в элемете множества должна быть нечетной!";
            return false; 
        }
        if(arr[i][2] > "z" || arr[i][2] < "A") {
            error_message = "Третий символ должен быть буквой!";
            return false; 
        }
        if(arr[i][3] % 2 > 0) {
            error_message = "Четвертая цифра в элемете множества должна быть четной!";
            return false; 
        }
    }
    return true; 
}
// Основная Функция подсчета
function Calculation() {
    message1 = document.getElementById('first-field').value;
    message2 = document.getElementById('second-field').value;
    if (isValidate(message1) && isValidate(message2)){
        alert("Good")
    }else{
        alert(error_message)
    }
}
