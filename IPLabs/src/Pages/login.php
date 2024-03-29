<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/styles.css">
    <link rel="stylesheet" href="../Styles/log.css">
    <title>Log in</title>
</head>

<body>
    <div class="wrap">
        <?php include_once "../templates/header.php" ?>
        <main id="main">
            <div class="fixed-container">
                <div class="form-wrap">
                    <div class="form-content">
                        <h2 class="form-title">Log in</h2>
                        <form action="../server/auth.php" class="log-in-form" method="post" enctype="multipart/form-data">
                            <input class="fields" type="text" placeholder="Your login" name="login" value="<?php if (isset($login)) {
                                                                                                                echo $login;
                                                                                                            } ?>">
                            <input class="fields" type="password" placeholder="Your password" name="password">
                            <input class="submit" type="submit" value="Log in">
                        </form>
                        <p class="account-p">Don't have an account yet? <a href="/IPLabs/src/Pages/registration.php" class="already">Sign up</a></p>
                        <?php
                        if (isset($_SESSION['error2']) && $_SESSION["error2"]) {
                            echo "<div class='error-container'>" . $_SESSION["error2"] . "</div>";
                        }
                        unset($_SESSION["error2"]);
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../scripts/main.js"></script>
</body>

</html>