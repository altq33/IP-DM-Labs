<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/LabsStyle.css">
    <title>Labs</title>
</head>

<body>
    <div class="wrap">
        <?php include_once "../templates/header.php" ?>
        <main id="main">
            <div class="fixed-container">
                <div class="content">
                    <h1 class="my">My labs</h1>
                    <div class="links-container">
                        <a href="../../../DMLabs/Lab1/src/index.html" class="lab-link">Lab1</a>
                        <a href="../../../DMLabs/Lab2/index.html" class="lab-link">Lab2</a>
                        <a href="../../../DMLabs/Lab3/src/index.html" class="lab-link">Lab3</a>
                        <a href="../../../DMLabs/Lab4/src/index.php" class="lab-link">Lab4</a>
                        <a href="../../../DMLabs/Lab5/src/index.php" class="lab-link">Lab5</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../scripts/main.js"></script>
</body>

</html>