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
    <link rel="stylesheet" href="../Styles/reg.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="wrap">
        <?php include_once "../templates/header.php" ?>
        <main id="main">
            <div class="fixed-container">
                <div class="fixed-container">
                    <div class="form-wrap">
                        <div class="form-content">
                            <h2 class="form-title">Sign up</h2>
                            <form action="../server/sign.php" class="sign-up-form" method="post" enctype="multipart/form-data">
                                <input class="fields" type="text" placeholder="Your login" name="login" value="<?php if (isset($login)) {
                                                                                                                    echo $login;
                                                                                                                } ?>">
                                <input class="fields" type="password" placeholder="Your password" name="password">
                                <input class="fields" type="password" placeholder="Your password again" name="repass">
                                <input class="submit" type="submit" value="Sign up" name="submit">
                            </form>
                            <p class="account-p">Already have an account? <a href="/IPLabs/src/Pages/login.php" class="already">Enter</a></p>
                            <?php
                            if (isset($_SESSION['error']) && $_SESSION["error"]) {
                                echo "<div class='error-container'>" . $_SESSION["error"] . "</div>";
                            }
                            unset($_SESSION["error"]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../scripts/main.js"></script>
</body>

</html>