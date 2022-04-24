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
                        <form action="" class="log-in-form" method="post" enctype="multipart/form-data">
                            <input class="fields" type="text" placeholder="Your login" required>
                            <input class="fields" type="password" placeholder="Your password" required>
                            <input class="submit" type="submit" value="Log in">
                        </form>
                        <a href="./login.php" class="already">Don't have an account yet? Sign up</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>