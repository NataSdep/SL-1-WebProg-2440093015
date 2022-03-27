<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
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
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><strong><?= $_SESSION['namaDepanRegis'] ?></strong></td> 
                    <td>Nama Tengah</td>
                    <td><strong><?= $_SESSION['namaTengahRegis'] ?></strong></td>
                    <td>Nama Belakang</td>
                    <td><strong><?= $_SESSION['namaBelakangRegis'] ?></strong></td>
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td><strong><?= $_SESSION['tempatLahirRegis'] ?></strong></td> 
                    <td>Tanggal Lahir</td>
                    <td><strong><?= $_SESSION['tanggalLahirRegis'] ?></strong></td> 
                    <td>NIK</td>
                    <td><strong><?= $_SESSION['NIKRegis'] ?></strong></td> 
                </tr>

                <tr>
                    <td>Warga Negara</td>
                    <td><strong><?= $_SESSION['wargaNegaraRegis'] ?></strong></td> 
                    <td>Email</td>
                    <td><strong><?= $_SESSION['emailRegis'] ?></strong></td> 
                    <td>No. HP</td>
                    <td><strong><?= $_SESSION['noHPRegis'] ?></strong></td> 
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><strong><?= $_SESSION['alamatRegis'] ?></strong></td> 
                    <td>Kode Pos</td>
                    <td><strong><?= $_SESSION['kodePosRegis'] ?></strong></td>
                    <td>Foto Profil</td>
                    <td>
                    <img src="./fotoProfile/<?= $_SESSION['fotoProfile'] ?>" alt="fotoProfile" style="max-height:100px;">
                    </td>
            </table>
            
        </div>
    </div>
</body>
</html>