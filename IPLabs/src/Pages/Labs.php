<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/LabsStyle.css">
    <title>Labs</title>
</head>

<body>
    <div class="wrap">
        <?php include_once "../templates/header.php" ?>
        <main id="main">
            <div class="fixed-container">
                <div class="content">
                    <h1 class="my">My labs</h1>
                    <div class="links-container">
                        <a href="../../../DMLabs/Lab1/src/index.html" class="lab-link">Lab1</a>
                        <a href="../../../DMLabs/Lab2/index.html" class="lab-link">Lab2</a>
                        <a href="../../../DMLabs/Lab3/src/index.html" class="lab-link">Lab3</a>
                        <a href="#" class="lab-link">Lab4</a>
                        <a href="#" class="lab-link">Lab5</a>
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
    <script src="../scripts/main.js"></script>
</body>

</html>