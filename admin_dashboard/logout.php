<?php
include("./config.php");
date_default_timezone_set('Asia/Amman');
$last_login = date('Y:m:d H:m:s');
$login_database = "UPDATE `users` SET `last_login`='$last_login' WHERE `email`= '$email' ";
$data = $conn->query($login_database);
session_start();
session_unset();
session_destroy();

header('location:./index.php');