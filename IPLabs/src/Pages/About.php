<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/About-styles.css">
    <title>About me</title>
</head>

<body>
    <div class="wrap">
        <?php include_once "../templates/header.php" ?>
        <main id="main">
            <div class="content">
                <div class="pic-container">
                    <img src="../../img/head-pic.jpg" alt="photo">
                </div>
                <div class="about">
                    <h2>About me</h2>
                    <p>My name is Dmitry, I am 19 years old and studying to be a programmer at ULSTU. I am full of ambitions and I want to become a professional in my field, namely in the field of web development. In 2021, I graduated from school with excellent marks and entered the Polytechnic university of my city. I like studying here.
                    </p>
                </div>
                <div class="more-about">
                    <p>I started programming not so long ago, but I really like it and I want to do it, I will do everything to succeed in this field and become a highly qualified specialist. I got acquainted with programming at school at a computer science lesson in the 10th grade, I got into the exam preparation group, although I did not plan to take it myself, as a result, I liked this area so much that I decided to devote myself entirely to programming.</p>
                </div>
                <div class="about hobbies">
                    <h2>Hobbies</h2>
                    <p>In my free time from programming, I like to watch anime and movies, swim, play chess or watch educational content on YouTube. I love sports and used to do workout when I had a lot of free time. I also like to play computer games of completely different genres, one of my favorites is Genshin Impact.
                    </p>
                </div>
                <div class="pic-container">
                    <img class="foot" src="../../img/foot-pic.jpg" alt="photo2">
                </div>
            </div>
        </main>
    </div>
    <script src="../scripts/main.js"></script>
</body>

</html>