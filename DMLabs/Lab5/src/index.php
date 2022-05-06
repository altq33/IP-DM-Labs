<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Lab5</title>
</head>

<body>
    <div class="content">
        <h1 class="lab">Лабораторная работа №5</h1>
        <form id="form" method="post" action="./server/matrix.php" class="form">
            <textarea name='matrix' class="matrix enter area" placeholder="Введите матрицу графа(для обозначения отсутствия пути используйте 0)" form="form"></textarea>
            <input name='submit' type="submit" class="button" value="Рассчитать">
        </form>
        <h2 class="by">Результаты:</h2>
        <div class="results">
            <?php if (isset($_SESSION['matrix']) && !empty($_SESSION['matrix'])) echo $_SESSION['matrix'] ?>
        </div>
        <div class="error-message">
            <?php if (isset($_SESSION['error5']) && !empty($_SESSION['error5'])) echo $_SESSION['error5'] ?>
        </div>
        <h2 class="by">Выполнил: Чанков Дмитрий ИВТАСбд-11</h2>
    </div>
</body>

</html>