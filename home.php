<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body style="padding: 10px;">
    <div style="height:100vh; background-color: #b681e9;">
        <div style="height:70px; background-color: #dcf094; display:flex; font-size:25pt;align-items:center;">
            <div style="padding: 0 30px;">Aplikasi Pengelolaan Keuangan</div>
            <a href="./home.php" style="margin-left:240px;">Home</a>
            <a href="./profile.php" style="padding-left: 20px;">Profile</a>
            <a href="./logout.php" style="margin-left: auto;padding-right:20px">Logout</a>
        </div>
        <div style="font-size: 24pt; margin-top:200px; text-align:center">
            Halo 
            <strong>
                <?= $_SESSION['namaDepanRegis'].' '.$_SESSION['namaTengahRegis'].' '.$_SESSION['namaBelakangRegis']; ?>
            </strong>
            , Selamat datang di Aplikasi Pengelolaan Keuangan
        </div>
    </div>
</body>

</html>