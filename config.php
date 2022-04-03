<?php
// include("functions.php");


$conn = mysqli_connect("localhost", "root", "", "keuangan");


if (!$conn) {
    echo "database salah";
}
