<?php

$connect = mysqli_connect('localhost', 'root', '', 'registration');

if (!$connect) {
    die("Error connecting to database!");
}
