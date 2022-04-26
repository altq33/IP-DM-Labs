<?php session_start(); ?>
<header id="header">
    <div class="fixed-container">
        <div class="head-container">
            <a href="/IPLabs/src/index.php">
                <div class="logo"></div>
            </a>
            <div class="burger-menu"></div>
            <div class="links">
                <nav id="nav">
                    <div class="buttons-container">
                        <a class="nav-links" href="/IPLabs/src/index.php">Home</a>
                        <a class="nav-links" href="/IPLabs/src/Pages/About.php">About me</a>
                        <a class="nav-links" href="/IPLabs/src/Pages/Labs.php">Labs</a>
                        <a class="nav-links" href="/IPLabs/src/Pages/Gallery.php">Gallery</a>
                        <a href="#" class="nav-links">Game</a>
                        <a href="/IPLabs/src/Pages/login.php" class="nav-links">Log in</a>
                        <?php if (!isset($_SESSION["auth"])) {
                            echo "<a href='/IPLabs/src/Pages/registration.php' class='nav-links'>Sign up</a>";
                        } ?>
                    </div>
                </nav>
                <div class="media-links">
                    <a class="social" href="https://vk.com/altq33" target="blank"></a>
                    <a class="social" href="https://www.spotify.com/ru-ru/" target="blank"></a>
                    <a class="social" href="https://twitter.com/?lang=ru" target="blank"></a>
                    <a class="social" href="https://www.facebook.com" target="blank"></a>
                </div>
            </div>
            <?php if (isset($_SESSION["auth"])) {
                echo "<a class='profile-link'>" . $_SESSION["login"] . "</a>";
                echo "<a class='logout' href='/IPLabs/src/server/logout.php'>Log out</a>";
            } ?>
        </div>
    </div>
</header>