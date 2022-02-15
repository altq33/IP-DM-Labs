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
            error_message = "Элемент множества должен содержать 4 символа!";
            return false; 
        }
        if(!(Number.isInteger(Number(arr[i][0])))) {
            error_message = "Первый символ должен быть цифрой!"
            return false;
        }
        if(!(Number.isInteger(Number(arr[i][1])))) {
            error_message = "Второй символ должен быть цифрой!"
            return false;
        }
        if(!(Number.isInteger(Number(arr[i][3])))) {
            error_message = "Четвертый символ должен быть цифрой!"
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
    // Проверка валидности
    if (isValidate(message1) && isValidate(message2)){
        const first_set = new Set(message1.split(" ")); // Получаем два множества из строк, сплитуем по пробелу
        const second_set = new Set(message2.split(" "));
        //Объединяем два множества 
        const union_set = new Set([...first_set, ...second_set]);
        document.getElementById('union').innerHTML = "Объединение: " + [...union_set.values()];
        //Пересекаем множества 
        const intersection_set = new Set([...first_set].filter(x => second_set.has(x)));
        document.getElementById('int').innerHTML = "Пересечение: " + [...intersection_set.values()];
        //Дополняем множества 
        // A \ B
        const difference_set_a = new Set([...first_set].filter(x => !second_set.has(x)));
        document.getElementById('diff').innerHTML = "A \\ B: " + [...difference_set_a.values()];
        // B \ A    
        const difference_set_b = new Set([...second_set].filter(x => !first_set.has(x)));
        document.getElementById('diff2').innerHTML = "B \\ A: " + [...difference_set_b.values()];
        // Симметрическая разность 
        const symmetric_difference_set = new Set([...difference_set_a, ...difference_set_b]);
        document.getElementById('sym').innerHTML = "Симметрическая разница: " + [...symmetric_difference_set.values()];
    }else{
        alert(error_message);
    }
}
