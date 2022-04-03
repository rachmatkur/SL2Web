<?php
session_start();
include("newFunction.php");
include("config.php");

if (isset($_POST['login'])) {

    if (cekLogin($_POST['username'], $_POST['pass'])) {
        $_SESSION['loginCek'] = $_POST['username'];
        movePage("home.php");
    } else {
        pesan("wrong username or password");
        movePage("login.php");
    }
}
