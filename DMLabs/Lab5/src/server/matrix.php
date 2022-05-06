<?php
session_start();
// validation 

$_SESSION['error5'] = "";

function isValid($matrix)
{
    $flag = true;
    $_SESSION['error5'] = "";
    for ($i = 0; $i < count($matrix); $i++) {
        if (count($matrix[$i]) != count($matrix)) {
            $_SESSION['error5'] = "Матрица должна быть квадратной";
        }
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if (!is_numeric($matrix[$i][$j]) && $matrix[$i][$j] != 0) {
                $_SESSION['error5'] = "Введенная матрица должна состоять из цифр!";
            }
        }
    }

    if ($matrix[0][0] == "") {
        $_SESSION['error5'] = "Матрица не должна быть пустой!";
    }
    if ($_SESSION['error5']) {
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
for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix); $j++) {
        if ($matrix[$i][$j] != 0) {
            $matrix[$i][$j] = 1;
        }
        if ($i == $j) {
            $matrix[$i][$j] = 0;
        }
    }
}


if (isValid($matrix)) {
    for ($k = 0; $k < count($matrix); $k++) {
        for ($i = 0; $i < count($matrix); $i++) {
            for ($j = 0; $j < count($matrix); $j++) {
                $matrix[$i][$j] = ($matrix[$i][$j] || ($matrix[$i][$k] && $matrix[$k][$j]));
                if (empty($matrix[$i][$j])) {
                    $matrix[$i][$j] = 0;
                }
            }
        }
    }
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix); $j++) {
            if ($i == $j) {
                $matrix[$i][$j] = 1;
            }
        }
    }
    $_SESSION['matrix'] = "";
    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix); $j++) {
            $_SESSION['matrix'] .= $matrix[$i][$j] . "    ";
        }
        $_SESSION['matrix'] .= "<br>";
    }
}

header("location: ../index.php");
