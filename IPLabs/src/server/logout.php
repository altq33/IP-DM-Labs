<?php
Session_start();
session_destroy();  
header('Location: ' . $_SERVER['HTTP_REFERER']);
