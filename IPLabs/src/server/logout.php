<?php
Session_start();
session_destroy();
if ($_SERVER['HTTP_REFERER'] != "https://mycardpage/IPLabs/src/Pages/profile.php" && $_SERVER['HTTP_REFERER'] != "https://mycardpage/IPLabs/src/Pages/admin.php" && $_SERVER['HTTP_REFERER'] != "https://mycardpage/IPLabs/src/Pages/edit-user.php") {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: ../index.php');
}
