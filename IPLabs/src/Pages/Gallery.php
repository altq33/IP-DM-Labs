<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/Gallery.css">
    <title>Gallery</title>
</head>
<body>
    <div class="wrap">
        <header id="header">
            <div class="fixed-container">
                <div class="head-container">
                    <a href="../index.html"><div class="logo"></div></a>
                    <div class="burger-menu"></div>  
                    <div class="links">
                      <nav id="nav">
                        <div class="buttons-container">
                            <a class="nav-links" href="../index.html">Home</a>
                            <a class="nav-links" href="../../src/Pages/About.html">About me</a>
                            <a class="nav-links" href="../../src/Pages/Labs.html">Labs</a>
                            <a class="nav-links" href="#">Gallery</a>
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
            <div class="wrapper">
                <div class="line-container">
                    <div class="img-container drag-box">
                        <img src="../../img/first-g.jpg" alt="1" draggable="true" class="js-img">
                        <img src="../../img/second-g.jpg" alt="2" draggable="true" class="js-img">
                        <img src="../../img/third-g.jpg" alt="3" draggable="true" class="js-img">
                        <img src="../../img/fourth-g.jpg" alt="4" draggable="true" class="js-img">
                    </div>
                    <div class="buttons-container-gal">
                        <button class="left-arrow"></button>
                        <div class="buttons-container-gal-points">
                            <button class="dots dots-active" id="point1"></button>
                            <button class="dots" id="point2"></button>
                            <button class="dots" id="point3"></button>
                            <button class="dots" id="point4"></button>
                        </div>                 
                        <button class="right-arrow"></button>
                    </div>
                </div>
                <h1 class="favorite">Favorite</h1>
                <div class="img-frame drag-box"></div>
            </div>        
        </main>
    </div>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/Gallery.js"></script>
    <script src="../scripts/DnD.js"></script>
</body>
</html>