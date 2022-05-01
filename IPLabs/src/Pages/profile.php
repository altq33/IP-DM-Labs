<?php
session_start();

if (isset($_SESSION['auth'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Styles/styles.css">
        <link rel="stylesheet" href="../Styles/profile.css">
        <title>Profile | <?= $_SESSION['login'] ?></title>
    </head>

    <body>
        <div class="wrap">
            <?php include_once "../templates/header.php" ?>
            <main id="main">
                <div class="fixed-container">
                    <div class="profile-container">
                        <div class="profile-content">
                            <h2 class="profile-title"><?= $_SESSION['login'] ?> profile</h2>
                            <form class="profile-form profile-side-container" action="../server/profile-edit.php?login=<?= $_SESSION['login'] ?>" method="POST" enctype="multipart/form-data">
                                <div class="profile-left">
                                    <h3 class="label">Login</h3>
                                    <input class="fields" value="<?= $_SESSION['login'] ?>" type="text" name="login">
                                    <h3 class="label">Password</h3>
                                    <input class="fields" type="password" name="password" placeholder="Enter a new password">
                                    <input class="fields" type="password" name="repass" placeholder="Enter the password again">
                                    <?php if (isset($_SESSION['error']) && $_SESSION["error"]) {
                                        echo "<div class='error-container'>" . $_SESSION["error"] . "</div>";
                                    }
                                    unset($_SESSION["error"]);
                                    ?>
                                    <input type="submit" class="submit" value="Save">
                                </div>
                                <div class="profile-right">
                                    <h3 class="label">Profile picture</h3>
                                    <img class="right-img" src="<?php if (isset($_SESSION['avatar']) && !empty($_SESSION['avatar'])) {
                                                                    echo   $_SESSION['avatar'];
                                                                } else {
                                                                    echo "../../img/profile.jpg";
                                                                }          ?>" alt="avatar">
                                    <input id="file-chooser" type="file" name="avatar" class="file-chooser">
                                    <label for="file-chooser" class="file-chooser-label">
                                        <span class="file-wraper"><img class="file-img" src="../../logo/file-upload.svg" alt="Выбрать файл" width="25"></span>
                                        <span class="file-text">Edit</span>
                                    </label>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="../scripts/main.js"></script>
    </body>

    </html>

<?  } else {
    header("Location: ./login.php");
} ?>