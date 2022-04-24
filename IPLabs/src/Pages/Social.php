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
    <div class="modal-sign-up">
        <div class="modal-sign-up-content">
            <span class="close-sign close">Х</span>
            <h2 class="form-title">Sign up</h2>
            <form action="" class="sign-up-form" method="POST">
                <input class="fields" type="text" placeholder="Your login">
                <input class="fields" type="password" placeholder="Your password">
                <input class="submit" type="submit" value="Sign up">
            </form>
        </div>
    </div>
    <div class="modal-log-in">
        <div class="modal-sign-up-content">
            <span class="close-log close">Х</span>
            <h2 class="form-title">Log in</h2>
            <form action="" class="log-in-form" method="POST">
                <input class="fields" type="text" placeholder="Your login">
                <input class="fields" type="password" placeholder="Your password">
                <input class="submit" type="submit" value="Log in">
            </form>
        </div>
    </div>
    <script src="../scripts/main.js"></script>
</body>

</html>