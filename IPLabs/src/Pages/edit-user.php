<?php
session_start();
include_once "../server/db.class.php";
DB::getInstance();

if (isset($_SESSION['auth']) && isset($_SESSION['type']) && $_SESSION['type'] == 0) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Styles/styles.css">
        <link rel="stylesheet" href="../Styles/admin.css">
        <title>Edit <?= $_GET['id'] ?></title>
    </head>

    <body>
        <div class="wrap">
            <?php include_once "../templates/header.php" ?>
            <main id="main">
                <div class="fixed-container">
                    <?php
                    $query = "SELECT * FROM `users` WHERE `id`=" . $_GET['id'];
                    $res  = DB::query($query);
                    if (($item = DB::fetch_array($res)) != false) { ?>
                        <div class="form-wrap">
                            <div class="form-content">
                                <h2 class="form-title">Edit <?= $item['login'] ?></h2>
                                <form action="../server/user-update.php " class="sign-up-form" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                    <input class="fields" type="text" placeholder="Login" name="login" value="<?= $item['login'] ?>">
                                    <input class="fields" type="text" placeholder="Type" name="type" value="<?= $item['type'] ?>">
                                    <input class="fields" type="password" placeholder="Password" name="password">
                                    <input class="submit" type="submit" value="Save" name="submit">
                            </div>
                        </div>
                    <?php }

                    ?>
                </div>
        </div>
        </main>
        </div>
        <script src="../scripts/main.js"></script>
    </body>

    </html>

<?  } else {
    echo "You are not right enough!";
} ?>