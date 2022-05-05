<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Lab4</title>
</head>

<body>
    <div class="content">
        <h1 class="lab">Лабораторная работа №4</h1>
        <form id="form" method="post" action="./server/graph.php" class="form">
            <textarea name='matrix' class="matrix enter area" placeholder="Введите матрицу графа(для обозначения отсутствия пути используйте 0)" form="form"></textarea>
            <input name='node1' class="node1 enter" placeholder="Введите первую вершину" type="text">
            <input name='node2' class="node2 enter" placeholder="Введите вторую вершину" type="text">
            <input name='submit' type="submit" class="button" value="Рассчитать">
        </form>
        <h2 class="by">Результаты:</h2>
        <div class="results">
            <?php if (isset($_SESSION['weight']) && !empty($_SESSION['weight'])) echo $_SESSION['weight'] . " || " ?>
            <?php if (isset($_SESSION['way']) && !empty($_SESSION['way'])) echo $_SESSION['way'] ?>
        </div>
        <div class="error-message">
            <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) echo $_SESSION['error'] ?>
        </div>
        <h2 class="by">Выполнил: Чанков Дмитрий ИВТАСбд-11</h2>
    </div>
</body>

</html>