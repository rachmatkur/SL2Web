<?php
include('config.php');

function pesan($message)
{
    echo "<script type='text/javascript'>alert('$message');</script>";
}

function movePage($page)
{
    echo "<script type='text/javascript'>window.location.replace('$page');</script>";
}


function cekUsernameUpdate($username, $nik)
{
    include('config.php');
    $sql = "SELECT * FROM akun";
    $data = mysqli_query($conn, $sql);
    while ($c = mysqli_fetch_array($data)) {
        if (strval($nik) !== $c['nik'] && $username === $c['username']) {
            return true;
        }
    }
    return false;
}

function cekNik($nik)
{
    include('config.php');
    $sql = "SELECT * FROM akun";
    $data = mysqli_query($conn, $sql);
    while ($c = mysqli_fetch_array($data)) {
        if (strval($nik) === $c['nik']) {
            return true;
        }
    }
    return false;
}


function cekUsername($username)
{
    include('config.php');
    $sql = "SELECT * FROM akun";
    $data = mysqli_query($conn, $sql);
    while ($c = mysqli_fetch_array($data)) {
        // echo $c['username'];
        if ($username === $c['username']) {
            return true;
        }
    }
    return false;
}

function cekLogin($uname, $pass)
{
    include('config.php');

    $sql = "SELECT * FROM akun";
    $data = mysqli_query($conn, $sql);
    while ($c = mysqli_fetch_array($data)) {
        if (($uname === $c['username']) && ($pass === $c['password'])) {
            return true;
        }
    }
    return false;
}

function getData($uname)
{
    include('config.php');

    $sql = "SELECT * FROM akun";
    $data = mysqli_query($conn, $sql);
    while ($c = mysqli_fetch_array($data)) {
        if ($uname === $c['username']) {
            return $c;
        }
    }
}
