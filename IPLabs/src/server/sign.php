<?php
session_start();
$login = htmlspecialchars($_POST["login"]);
$password = htmlspecialchars($_POST["password"]);
$repass =  htmlspecialchars($_POST["repass"]);
$_SESSION['error'] = "";

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
    $_SESSION["auth"] = true;
    $_SESSION["login"] = $login;
}

include_once "../Pages/registration.php";
