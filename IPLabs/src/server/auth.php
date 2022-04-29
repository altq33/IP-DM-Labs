<?php
session_start();
include_once "./db.class.php";
DB::getInstance();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = htmlspecialchars($_POST["login"]);
    $password = htmlspecialchars($_POST["password"]);
    $_SESSION["error2"] = "";

    if (empty($password)) {
        $_SESSION["error2"] = "Password can not be empty!";
    }

    if (empty($login)) {
        $_SESSION["error2"] = "Login can not be empty!";
    }

    if (!$_SESSION['error2']) {
        $query = "SELECT * FROM `users` WHERE `login` = '$login' and `password` = MD5('$password')";
        $reqResult = DB::query($query);
        if (($item = DB::fetch_array($reqResult)) != false) {
            $_SESSION["auth"] = true;
            $_SESSION["login"] = $login;
        } else {
            $_SESSION['error2'] = "Incorrect login or password";
        }
    } else {
        $_SESSION['error2'] = "Incorrect login or password";
    }


    if (isset($_SESSION["auth"])) {
        header("location: ../index.php");
    } else {
        include_once "../Pages/login.php";
    }
}
