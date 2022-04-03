<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form action="registerProses.php" method="post" enctype="multipart/form-data">
            <div class="content">
                <div class="box">
                    <div class="data-profile">
                        Nama Depan
                        <input type="text" name="namaDepan" required>
                    </div>
                    <div class="data-profile">
                        Tempat Lahir
                        <input type="text" name="tl" required>
                    </div>
                    <div class="data-profile">
                        Warga Negara
                        <input type="text" name="wn" required>
                    </div>
                    <div class="data-profile">
                        Alamat
                        <input type="text" name="alamat" required>
                    </div>
                    <div class="data-profile">
                        username
                        <input type="text" name="username" required>
                    </div>

                </div>
                <div class="box">
                    <div class="data-profile">
                        Nama Tengah
                        <input type="text" name="namaTengah" required>
                    </div>
                    <div class="data-profile">
                        Tgl Lahir
                        <input type="date" name="ttl" required>
                    </div>
                    <div class="data-profile">
                        Email
                        <input type="email" name="email" required>
                    </div>
                    <div class="data-profile">
                        Kode POS (5 digit)
                        <input type="tel" name="pos" pattern="[0-9]{5}" required>
                    </div>
                    <div class="data-profile">
                        password
                        <input type="password" name="pass" required>
                    </div>
                </div>
                <div class="box">
                    <div class="data-profile">
                        Nama Belakang
                        <input type="text" name="namaBelakang" required>
                    </div>
                    <div class="data-profile">
                        NIK (16 digit)
                        <input type="tel" name="nik" required pattern="[0-9]{16}">
                    </div>
                    <div class="data-profile">
                        No HP (12 digit)
                        <input type="tel" id="phone" name="phone" required pattern="[0-9]{12}">
                    </div>
                    <div class="data-profile">
                        Foto Profil
                        <input type="file" name="photos" accept="image/*" required>
                    </div>
                    <div class="data-profile">
                        Confirm password
                        <input type="password" name="conPass" required>
                    </div>
                </div>
            </div>
            <div class="btn-group">
                <button type="submit" name="submit">Register</button>
                <button type="button"><a href="index.php">Kembali</a></button>
            </div>
        </form>
    </div>
</body>

</html>