<?php
session_start();
include_once "./db.class.php";
DB::getInstance();
$_SESSION['error'] = "";
$login = htmlspecialchars($_POST['login']);
$currentLogin = $_GET['login'];
$password = htmlspecialchars($_POST['password']);
$repass = htmlspecialchars($_POST['repass']);
$query = "SELECT * FROM `users` WHERE `login` = '$currentLogin'";
$avaCheckResult  = DB::query($query);
$_SESSION['avatar'] = DB::fetch_array($avaCheckResult)['avatar_name'];

if ($password !== $repass) {
    $_SESSION["error"] = "Passwords don't match!";
}

if (strlen($password) < 4 && isset($password) && !empty($password)) {
    $_SESSION["error"] = "Password length no less than 5 characters!";
}

if (empty($login)) {
    $_SESSION["error"] = "Login can not be empty!";
}

if (!$_SESSION['error']) {
    $strPass = "";
    $strQueryAvatar = "";
    if (isset($password) && !empty($password)) {
        $strPass = ",`password` =  MD5('$password'), `repass` = MD5('$password') ";
    }
    if (is_uploaded_file($_FILES['avatar']['tmp_name'])) {
        $typeFile = "";
        if ($_FILES['avatar']['type'] = 'image/jpeg') {
            $typeFile = ".jpg";
        }

        $uploadNameFile = md5(time() . $_FILES['avatar']['name']);
        $uploadDirFile = $_SERVER["DOCUMENT_ROOT"] . "/IPLabs/uploads/avatars/";
        $uploadAvatar = $uploadDirFile . $uploadNameFile . $typeFile;
        $truePathAvatar = "/IPLabs/uploads/avatars/" . $uploadNameFile . $typeFile;
        move_uploaded_file($_FILES['avatar']['tmp_name'],  $uploadAvatar);
        $strQueryAvatar = ", `avatar_name` = '$truePathAvatar'";
    }
    $query =  "UPDATE `users` SET `login` = '$login'" . $strPass . $strQueryAvatar . "WHERE `login` = '$currentLogin'";
    $_SESSION['login'] = $login;
    DB::query($query);
    $query = "SELECT * FROM `users` WHERE `login` = '$currentLogin'";
    $avaCheckResult  = DB::query($query);
    $_SESSION['avatar'] = DB::fetch_array($avaCheckResult)['avatar_name'];
}

header("location: ../Pages/profile.php");
