<?php
    session_start();
    include("config.php");
    $str_query = "select * from user where username = '" . $_SESSION['usernameRegis'] . "'";
    $query = mysqli_query($connection, $str_query);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
<body style="padding: 10px;">
    <div style="height:100vh; background-color: #b681e9;">
        <div style="height:70px; background-color: #dcf094; display:flex; font-size:25pt; align-items:center;">
            <div style="padding: 0 30px;">Aplikasi Pengelolaan Keuangan</div>
            <a href="./home.php" style="margin-left:240px">Home</a>
            <a href="./profile.php" style="padding-left: 20px;">Profile</a>
            <a href="./logout.php" style="margin-left: auto;padding-right:20px">Logout</a>
        </div>
        <div style="text-align: center; padding:50px 0; font-size:25pt"><strong>Profil Pribadi</strong></div>
        <div style="display: flex;flex-wrap:wrap; justify-content:space-around; margin:0 30px;">
        <form action="prosesEditProfile.php" method="post"enctype="multipart/form-data" onSubmit="return validasi()"></form>
        <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="namaDepan" id="namaDepan" value="<?= $_SESSION['namaDepanRegis'] ?>"></td> 
                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah" id="namaTengah" value="<?= $_SESSION['namaTengahRegis'] ?>"></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang" id="namaBelakang" value="<?= $_SESSION['namaBelakangRegis'] ?>"></td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir" id="tempatLahir" value="<?= $_SESSION['tempatLahirRegis'] ?>"></td> 
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir" id="tanggalLahir" value="<?= $_SESSION['tanggalLahirRegis'] ?>"></td> 
                    <td>NIK</td>
                    <td><input type="text" name="NIK" id="NIK" value="<?= $_SESSION['NIKRegis'] ?>"></td> 
                </tr>

                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara" id="wargaNegara" value="<?= $_SESSION['wargaNegaraRegis'] ?>"></td> 
                    <td>Email</td>
                    <td><input type="email" name="email" id="email" value="<?= $_SESSION['emailRegis'] ?>"></td> 
                    <td>No. HP</td>
                    <td><input type="text" name="noHP" id="noHP" value="<?= $_SESSION['noHPRegis'] ?>"></td> 
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" id="alamat" cols="20" rows="3"><?= $_SESSION['alamatRegis'] ?></textarea></td> 
                    <td>Kode Pos</td>
                    <td><input type="number" name="kodePos" id="kodePos" value="<?= $_SESSION['kodePosRegis'] ?>"></td>
                    <td>Ganti Foto Profil</td>
                    <td>
                        <form action="" method="post" enctype = "multipart/form-data">
                        <input type="file" name = "fotoProfile" accept="image/*" required/>
                    </td>

                <tr>
                    <td>
                    <a href="profile.php" style="margin-right:45px;background-color:#FFAB40">Kembali</a>
                    <a href="profile.php" style="margin-right:45px;background-color:#66BB6A">Save</a>
                    </td>
                </tr>

            </table>

        </div>
    </div>
</body>
</html>