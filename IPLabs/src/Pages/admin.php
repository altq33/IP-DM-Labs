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
        <title>Admin panel</title>
    </head>

    <body>
        <div class="wrap">
            <?php include_once "../templates/header.php" ?>
            <main id="main">
                <div class="fixed-container">
                    <div class="table-container">
                        <div class="table">
                            <div class="table-row">
                                <div class="table-row-item">id</div>
                                <div class="table-row-item">login</div>
                                <div class="table-row-item">type</div>
                                <div class="table-row-item">avatar</div>
                                <div class="table-row-item">avatar_name</div>
                            </div>
                            <?php
                            $query = "SELECT * FROM `users`";
                            $res  = DB::query($query);
                            while (($item = DB::fetch_array($res)) != false) { ?>
                                <div class="table-row">
                                    <div class="table-row-item"><?= $item['id'] ?></div>
                                    <div class="table-row-item"><?= $item['login'] ?></div>
                                    <div class="table-row-item"><?= $item['type'] ?></div>
                                    <div class="table-row-item"><img class="user-avatar" src="<?php
                                                                                                if (!empty($item['avatar_name'])) {
                                                                                                    echo $item['avatar_name'];
                                                                                                } else {
                                                                                                    echo "../../img/profile.jpg";
                                                                                                }
                                                                                                ?>" alt="avatar"></div>
                                    <div class="table-row-item"><?= $item['avatar_name'] ?></div>
                                    <a href="./edit-user.php?id=<?= $item['id'] ?>" class="manage-user" title="Edit"></a>
                                    <?php if ($item['type'] != 0) { ?>
                                        <a href="../server/delete-user.php?id=<?= $item['id'] ?>" class="delete-user" title="Delete"></a>
                                    <?php } ?>
                                </div>
                            <?php }

                            ?>
                        </div>
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