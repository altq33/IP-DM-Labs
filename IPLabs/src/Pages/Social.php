<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Social.css">
    <title>Social media</title>
</head>

<body>
    <div class="wrap">
        <?php include_once "../templates/header.php" ?>
        <main id="main">
            <div class="content">
                <h1 class="title">My social media</h1>
                <ul class="list">
                    <a target="blank" href="https://www.instagram.com/altq33/">
                        <li class="list-item inst">Instagram</li>
                    </a>
                    <a target="blank" href="https://vk.com/altq33">
                        <li class="list-item vk">Vk</li>
                    </a>
                    <a target="blank" href="https://www.youtube.com/channel/UCoaGP0cs2snikOILUSPcUKg">
                        <li class="list-item you">YouTube</li>
                    </a>
                    <a target="blank" href="https://shikimori.one/altq33">
                        <li class="list-item shik">Shikimori</li>
                    </a>
                </ul>
            </div>
        </main>
    </div>
    <script src="../scripts/main.js"></script>
</body>

</html>