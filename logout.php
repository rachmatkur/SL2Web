<?php
require_once "newFunction.php";
session_start();

session_destroy();

pesan("Logout success");
movePage("login.php");
