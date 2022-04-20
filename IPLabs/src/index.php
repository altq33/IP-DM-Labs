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
        <header id="header">
            <div class="fixed-container">
                <div class="head-container">
                    <a href="../src"><div class="logo"></div></a>
                    <div class="burger-menu"></div>  
                    <div class="links">
                      <nav id="nav">
                        <div class="buttons-container">
                            <a class="nav-links" href="../src">Home</a>
                            <a class="nav-links" href="../../IPLabs/src/Pages/About.php">About me</a>
                            <a class="nav-links" href="../../IPLabs/src/Pages/Labs.php">Labs</a>
                            <a class="nav-links" href="../../IPLabs/src/Pages/Gallery.php">Gallery</a>
                            <a href="#" class="nav-links">Game</a>
                            <a href="#" class="sign-up nav-links">Sign up</a>
                            <a href="#" class="log-in nav-links">Log in</a>     
                        </div>                     
                      </nav>
                      <div class="media-links">
                        <a class="social" href="https://vk.com/altq33" target="blank"></a>
                        <a class="social" href="https://www.spotify.com/ru-ru/" target="blank"></a>
                        <a class="social" href="https://twitter.com/?lang=ru" target="blank"></a>
                        <a class="social" href="https://www.facebook.com" target="blank"></a>                         
                      </div>
                    </div>
                </div>
            </div>         
        </header>
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
    <script src="../src/scripts/main.js"></script>
</body>
</html>