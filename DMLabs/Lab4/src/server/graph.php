<?php
session_start();
// validation 

$_SESSION['error'] = "";

function isValid($matrix, $firstNode, $secondNode)
{
    $flag = true;
    $_SESSION['error'] = "";
    if (!$firstNode || !$secondNode) {
        $_SESSION['error'] = "Вершины не могут быть пустыми!";
    }
    if (!is_numeric($firstNode) || !is_numeric($secondNode)) {
        $_SESSION['error'] = "Вершины должны быть цифрами!";
    }
    if ($firstNode < 1 || $secondNode < 1) {
        $_SESSION['error'] = "Вершины не могут быть меньше 1!";
    }
    if ($firstNode > count($matrix) || $secondNode > count($matrix)) {
        $_SESSION['error'] = "Вершины с таким номером не существует!";
    }
    for ($i = 0; $i < count($matrix); $i++) {
        if (count($matrix[$i]) != count($matrix)) {
            $_SESSION['error'] = "Матрица должна быть квадратной";
        }
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if (!is_numeric($matrix[$i][$j]) && $matrix[$i][$j] != 0) {
                $_SESSION['error'] = "Введенная матрица должна состоять из цифр!";
            }
        }
    }
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] != $matrix[$j][$i]) {
                $_SESSION['error'] = "Матрица должа быть симметричной!";
                break;
            }
        }
    }
    if ($matrix[0][0] == "") {
        $_SESSION['error'] = "Матрица не должна быть пустой!";
    }
    if ($_SESSION['error']) {
        return false;
    } else {
        return true;
    }
}

$matrix = preg_split('/[\n\r]+/', $_POST['matrix']);
for ($i = 0; $i < count($matrix); $i++) {
    $matrix[$i] = trim($matrix[$i]);
    $matrix[$i] =  preg_replace('/\s+/', ' ', $matrix[$i]);
    $matrix[$i] = explode(" ", $matrix[$i]);
}
$firstNode = $_POST['node1'];
$secondNode = $_POST['node2'];

if (isValid($matrix, $firstNode, $secondNode)) {
    $length = count($matrix);  // длина
    $counted = array(); //расстояния посчитанные 
    $visited = array(); //посещенные 
    $temp = 0;  // временная переменная для цикла
    $minindex = 0;  // индекс минимального веса
    $min = 0; // минимальный вес
    $firstNode--; //уменьшаем на 1 для индексации
    $secondNode--;


    for ($i = 0; $i <  $length; $i++) {
        $counted[$i] = INF;
        $visited[$i] = 1;
    }

    $counted[$firstNode] = 0;

    while ($minindex < INF) {
        $minindex = INF;
        $min = INF;
        for ($i = 0; $i < $length; $i++) {
            if (($visited[$i] == 1) && ($counted[$i] < $min)) {
                $min = $counted[$i];
                $minindex = $i;
            }
        }
        if ($minindex != INF) {
            for ($i = 0; $i < $length; $i++) {
                if ($matrix[$minindex][$i] > 0) {
                    $temp = $min  + $matrix[$minindex][$i];
                    if ($temp < $counted[$i]) {
                        $counted[$i] = $temp;
                    }
                }
            }
            $visited[$minindex] = 0;
        }
    }

    $_SESSION["weight"] = $counted[$secondNode];

    $visited = array(); //Опять же посещенные здесь в итоге окажется истинный путь 
    $visited[0] = $secondNode + 1; // Забиваем сразу конечную вершину 
    $prev = 1;        // здесь будет храниться индекс предыдущей вершины в цикле 
    $weight = $counted[$secondNode];         // вес конечной вершины

    while ($secondNode != $firstNode) {         // Пока начальная неравна конечной 
        for ($i = 0; $i < $length; $i++) {          // чекаем все вершины
            if ($matrix[$i][$secondNode] != 0) {       // проверяем есть ли связь 
                $temp = $weight - $matrix[$i][$secondNode];    // записываем вес предыущей вершины
                if ($temp == $counted[$i]) {    // если вес подходит
                    $weight = $temp;              // записываем
                    $secondNode = $i;             // меняем конечную вершину на предыдущую 
                    $visited[$prev] = $i + 1;        // сохраняем в массив посещенных
                    $prev++;
                }
            }
        }
    }
    $resultWay = "";

    for ($i = count($visited) - 1; $i >= 0; $i--) {
        $resultWay .= $visited[$i] . " ";
    }
    $_SESSION["way"] = $resultWay;

    header("location: ../index.php");
} else {
    header("location: ../index.php");
}
