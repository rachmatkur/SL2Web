<?php
include('newFunction.php');
session_start();

if (isset($_SESSION['loginCek'])) {
    movePage("home.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container" style="background-color: #fbfdac; justify-content: center;">
        <div class="box-login">
            <h1>Login</h1>
            <form action="loginProses.php" method="post">
                <div class="content-login">
                    <div class="inputan">
                        <div class="inputForm">
                            username
                            <input type="text" name="username" required>
                        </div>
                        <div class="inputForm">
                            password
                            <input type="password" name="pass" required>
                        </div>
                    </div>
                    <div class="tombol-login">
                        <button type="submit" name="login">Login</button>
                        <button><a href="index.php">Kembali</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>