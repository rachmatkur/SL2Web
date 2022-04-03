<?php
include('newFunction.php');
session_start();

if (!isset($_SESSION['loginCek'])) {
    movePage("login.php");
}

$data = getData($_SESSION['loginCek']);
$nameArray = explode(" ", $data['name']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <h2>Aplikasi Pengelolaan Keuangan</h2>
            <div class="menu">
                <a href="home.php">Home</a>
                <a href="profile.php">Profile</a>
                <a href="edit.php">Edit Profile</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <h1>Profile Pribadi</h1>
        <div class="content">
            <div class="box">
                <div class="data-profile">
                    <p>Nama Depan : <b><?php echo $nameArray[0]; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Tempat Lahir : <b><?php echo $data['tl']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Warga Negara : <b><?php echo $data['wn']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Alamat : <b><?php echo $data['alamat']; ?></b></p>
                </div>
            </div>
            <div class="box">
                <div class="data-profile">
                    <p>Nama Tengah : <b><?php echo $nameArray[1]; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Tgl Lahir : <b><?php echo date('d-m-Y', strtotime($data['ttl'])); ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Email : <b><?php echo $data['email']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Kode POS : <b><?php echo $data['pos']; ?></b></p>
                </div>
            </div>
            <div class="box">
                <div class="data-profile">
                    <p>Nama Belakang : <b><?php echo $nameArray[2]; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>NIK : <b><?php echo $data['nik']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>No HP : <b><?php echo $data['hp']; ?></b></p>
                </div>
                <div class="data-profile">
                    <p>Foto Profile : </p>
                    <img src="<?php echo "Photo/" . $data['image']; ?>" alt="Photo Profile" style="max-height: 250px; ">
                </div>
            </div>
        </div>
    </div>
</body>

</html>