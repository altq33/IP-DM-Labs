<?php
session_start();
include_once "./server/db.class.php";
DB::getInstance();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/Styles/styles.css">
    <title>MyPageHome</title>
</head>

<body>
    <div class="wrap">
        <?php include_once "./templates/header.php" ?>
        <main id="main">
            <div class="fixed-container">
                <div class="info-container">
                    <div class="left-part">
                        <img src="../img/portret.png" alt="Portret">
                        <p class="quote">
                            Success is the ability to go from one failure to another with no loss of enthusiasm.
                            Winston Churchill
                        </p>
                    </div>
                    <div class="right-part">
                        <h1 class="name">Dmitry Chankov</h1>
                        <p class="description">
                            I am a novice programmer, studying at the Ulyanovsk State Technical University in the direction of foreign mathematics and computer engineering. I am positive and strive to develop, my dream is to become a top developer.
                        </p>
                        <a href="../src/Pages/Social.php" class="more">Find out more about me</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../src/scripts/main.js"></script>
</body>

</html>