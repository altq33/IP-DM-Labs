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
        <link rel="stylesheet" href="../Styles/reg.css">
        <title>Profile | <?= $_SESSION['login'] ?></title>
    </head>

    <body>
        <div class="wrap">
            <?php include_once "../templates/header.php" ?>
            <main id="main">
                <div class="fixed-container">
                    <?php echo $_SERVER['PHP_SELF'] ?>
                </div>
            </main>
        </div>
        <script src="../scripts/main.js"></script>
    </body>

    </html>

<?  } else {
    echo "To view the profile, you must log in!";
} ?>