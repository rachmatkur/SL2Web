<?php
session_start();

// require_once "functions.php";
include('newFunction.php');
include 'config.php';

if (isset($_POST['update'])) {
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
    $name = $namaDepan . " " . $namaTengah . " " . $namaBelakang;

    // echo $nik . $pos . $phone;

    $photoName = $_FILES['photos']['name'];
    $tempName = $_FILES['photos']['tmp_name'];
    // $photoSize = $_FILES['photos']['size'];

    if ($password != $conPass) {
        pesan("password tidak sama");
        movePage("edit.php");
    } else if (cekUsernameUpdate($username, $nik)) {
        pesan("username sudah dipakai");
        movePage("edit.php");
    } else {
        if ($photoName === '') {
            // echo "photo null";
            $sql = "UPDATE akun SET name='" . $name . "', tl='" . $tl . "', wn='" . $wn . "', alamat='" . $alamat . "', username='" . $username . "', ttl='" . $ttl . "', 
            email='" . $email . "', pos='" . $pos . "', nik='" . $nik . "', hp='" . $phone . "', password='" . $password . "' WHERE nik='" . $nik . "'";
            $qr = mysqli_query($conn, $sql);
            if ($qr) {
                pesan("sukses");
                movePage('home.php');
            }
            pesan("error");
            movePage('edit.php');
        } else {
            echo 'masuk';
            $data = getData($_SESSION['loginCek']);
            $moveFolder = "Photo/";
            $deletePhoto = $moveFolder . $data['image'];

            $ext = pathinfo($photoName, PATHINFO_EXTENSION);
            $newName = uniqid() . "." . $ext;
            $uploadFoto = move_uploaded_file($tempName, $moveFolder . $newName);

            $sql = "UPDATE akun SET name='" . $name . "', tl='" . $tl . "', wn='" . $wn . "', alamat='" . $alamat . "', username='" . $username . "', ttl='" . $ttl . "', 
            email='" . $email . "', pos='" . $pos . "', nik='" . $nik . "', hp='" . $phone . "', password='" . $password . "', image='" . $newName . "' WHERE nik='" . $nik . "'";
            $qr = mysqli_query($conn, $sql);
            if (file_exists($deletePhoto))
                unlink($deletePhoto);
            if ($qr) {
                pesan("sukses");
                movePage('home.php');
            }
            // pesan("error");
            // movePage('edit.php');
            echo $newName;
        }
    }
}
