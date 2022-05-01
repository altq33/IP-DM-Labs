<?php
session_start();
include_once "./db.class.php";
DB::getInstance();
$login = htmlspecialchars($_POST['login']);
$type = htmlspecialchars($_POST['type']);
$password = htmlspecialchars($_POST['password']);
$id = htmlspecialchars($_POST['id']);
$strPass = "";
if (isset($password) && !empty($password)) {
    $strPass = ",`password` =  MD5('$password'), `repass` = MD5('$password') ";
}

$query =  "UPDATE `users` SET `login` = '$login', `type` = '$type'" . $strPass . "WHERE id='$id'";
DB::query($query);
header("location: ../Pages/admin.php");
