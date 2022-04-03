<?php
session_start();

// require_once "functions.php";
include('newFunction.php');
include 'config.php';

if (isset($_POST['submit'])) {
    // include 'functions.php';
    $password = $_POST['pass'];
    $conPass = $_POST['conPass'];
    $username = $_POST['username'];

    $namaDepan = $_POST['namaDepan'];
    $namaTengah = $_POST['namaTengah'];
    $namaBelakang = $_POST['namaBelakang'];
    $ttl = $_POST['ttl'];
    $tl = $_POST['tl'];
    $wn = $_POST['wn'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $pos = strval($_POST['pos']);
    $nik = strval($_POST['nik']);
    $phone = strval($_POST['phone']);

    // echo $nik . $pos . $phone;

    $photoName = $_FILES['photos']['name'];
    $tempName = $_FILES['photos']['tmp_name'];
    // $photoSize = $_FILES['photos']['size'];

    if ($password != $conPass) {
        pesan("password tidak sama");
        movePage("edit.php");
    } else if (cekUsername($username) || cekNik($nik)) {
        pesan("username / nik sudah dipakai");
        movePage("register.php");
    } else {
        $ext = pathinfo($photoName, PATHINFO_EXTENSION);
        $newName = uniqid() . "." . $ext;
        $moveFolder = "Photo/";
        $uploadFoto = move_uploaded_file($tempName, $moveFolder . $newName);
        $name = $namaDepan . " " . $namaTengah . " " . $namaBelakang;
        // echo $name;
        $sql = "INSERT INTO akun VALUES('$name', '$tl', '$wn', '$alamat', '$username','$ttl','$email','$pos','$nik','$phone','$password', '$newName')";
        mysqli_query($conn, $sql);
        // echo "test";

        $_SESSION['loginCek'] = null;


        // $_SESSION['photoLoc'] = $moveFolder . $photoName;

        pesan("Register Sukses");
        movePage("index.php");
    }
}
