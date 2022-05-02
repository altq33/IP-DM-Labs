<?php
session_start();
include_once "./db.class.php";
DB::getInstance();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = htmlspecialchars($_POST["login"]);
    $password = htmlspecialchars($_POST["password"]);
    $repass =  htmlspecialchars($_POST["repass"]);
    $_SESSION["error"] = "";
    $_SESSION["login"] = $login;

    if ($password !== $repass) {
        $_SESSION["error"] = "Passwords don't match!";
    }

    if (empty($repass)) {
        $_SESSION["error"] = "Please confirm the password!";
    }

    if (strlen($password) < 4) {
        $_SESSION["error"] = "Password length no less than 5 characters!";
    }

    if (empty($password)) {
        $_SESSION["error"] = "Password can not be empty!";
    }

    if (empty($login)) {
        $_SESSION["error"] = "Login can not be empty!";
    }

    if (!$_SESSION['error']) {
        $checkLogin = "SELECT * FROM `users` WHERE `login` = '$login'";
        $result = DB::query($checkLogin);
        if (!(($item = DB::fetch_array($result)) != false)) {
            $query = "INSERT INTO `users` (`login`, `password`, `repass`) VALUES ('$login', MD5('$password'), MD5('$repass') )";
            DB::query($query);
            $checkType = "SELECT `type` FROM `users` WHERE `login` = '$login'";
            $typeCheckResult  = DB::query(($checkType));
            $_SESSION['type'] = DB::fetch_array($typeCheckResult)['type'];
            $_SESSION["auth"] = true;
            $_SESSION["login"] = $login;
        } else {
            $_SESSION['error'] = "Login is already busy, try another!";
        }
    }
}


if (isset($_SESSION["auth"])) {
    header("location: ../Pages/profile.php");
} else {
    include_once "../Pages/registration.php";
}
