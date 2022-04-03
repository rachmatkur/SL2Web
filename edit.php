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
    <title>Edit Data</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container">
        <h1>Update Data</h1>
        <form action="updateProses.php" method="post" enctype="multipart/form-data">
            <div class="content">
                <div class="box">
                    <div class="data-profile">
                        Nama Depan
                        <input type="text" name="namaDepan" value="<?php echo $nameArray[0] ?>" required>
                    </div>
                    <div class="data-profile">
                        Tempat Lahir
                        <input type="text" name="tl" value="<?php echo $data['tl'] ?>" required>
                    </div>
                    <div class="data-profile">
                        Warga Negara
                        <input type="text" name="wn" value="<?php echo $data['wn'] ?>" required>
                    </div>
                    <div class="data-profile">
                        Alamat
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" required>
                    </div>
                    <div class="data-profile">
                        username
                        <input type="text" name="username" value="<?php echo $data['username'] ?>" required>
                    </div>

                </div>
                <div class="box">
                    <div class="data-profile">
                        Nama Tengah
                        <input type="text" name="namaTengah" value="<?php echo $nameArray[1] ?>" required>
                    </div>
                    <div class="data-profile">
                        Tgl Lahir
                        <input type="date" name="ttl" value="<?php echo $data['ttl'] ?>" required>
                    </div>
                    <div class="data-profile">
                        Email
                        <input type="email" name="email" value="<?php echo $data['email'] ?>" required>
                    </div>
                    <div class="data-profile">
                        Kode POS (5 digit)
                        <input type="tel" name="pos" pattern="[0-9]{5}" value="<?php echo $data['pos'] ?>" required>
                    </div>
                    <div class="data-profile">
                        password
                        <input type="password" name="pass" value="<?php echo $data['password'] ?>" required>
                    </div>
                </div>
                <div class="box">
                    <div class="data-profile">
                        Nama Belakang
                        <input type="text" name="namaBelakang" value="<?php echo $nameArray[2] ?>" required>
                    </div>
                    <div class="data-profile">
                        NIK (16 digit)
                        <input type="tel" name="nik" value="<?php echo $data['nik'] ?>" required pattern="[0-9]{16}" readonly>
                    </div>
                    <div class="data-profile">
                        No HP (12 digit)
                        <input type="tel" id="phone" name="phone" value="<?php echo $data['hp'] ?>" required pattern="[0-9]{12}">
                    </div>
                    <div class="data-profile">
                        Foto Profil
                        <input type="file" name="photos" accept="image/*">
                    </div>
                    <div class="data-profile">
                        Confirm password
                        <input type="password" name="conPass" value="<?php echo $data['password'] ?>" required>
                    </div>
                </div>
            </div>
            <div class="btn-group">
                <button type="submit" name="update">Update Data</button>
                <button type="button"><a href="home.php">Kembali</a></button>
            </div>
        </form>
    </div>
</body>

</html>