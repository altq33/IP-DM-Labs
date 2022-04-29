<?php
Session_start();
session_destroy();
if ($_SERVER['HTTP_REFERER'] != "https://mycardpage/IPLabs/src/Pages/profile.php") {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: ../index.php');
}
