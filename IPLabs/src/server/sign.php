<?php
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$repass = trim($_POST['repass']);

function checkValue($login, $password, $repass)
{
    $error = "";
    if (!$login) {
        $error = "The login cannot be empty!";
    } else if (!$password) {
        $error = "The password cannot be empty!";
    } else if ($password != $repass) {
        $error = "Passwords must match";
    }
    return $error;
}

$error = checkValue($login, $password, $repass);
