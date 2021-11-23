<?php
require 'inc/head.php';

if (isset($_SESSION['UserName'])) {
    session_destroy();
    session_unset();
    header('Location: /login.php');
    exit();
} else {
    header('Location: /login.php');
    exit();
}








































