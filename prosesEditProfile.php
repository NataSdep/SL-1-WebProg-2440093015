<?php
    session_start();
    include("config.php");

    $namaDepan = $_POST['namaDepan'];
    $namaTengah = $_POST['namaTengah'];
    $namaBelakang = $_POST['namaBelakang'];
    $NIK = $_POST['NIK'];
    $email = $_POST['email'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $tempatLahir = $_POST['tempatLahir'];
    $wargaNegara = $_POST['wargaNegara'];
    $alamat = $_POST['alamat'];
    $kodePos = $_POST['kodePos'];
    $noHP = $_POST['noHP'];
    $str_query = "update user set nik = '".$NIK."', email = '".$email."', namaDepan = '".$namaDepan."', namaTengah = '".$namaTengah."', namaBelakang = '".$namaBelakang."', tanggalLahir = '".$tanggalLahir."', tempatLahir = '".$tempatLahir."', wargaNegara = '".$wargaNegara."', alamat = '".$alamat."', kodePos = '".$kodePos."', noHP = '".$noHP."' where username = '".$_SESSION['username']."'";

    $query = mysqli_query($connection, $str_query);

    $namaFile = $_FILES['fotoProfile']['name'];
    $tmp_name = $_FILES['fotoProfile']['tmp_name'];

    $dirupload = "fotoProfile/";
    $uploaded = move_uploaded_file($tmp_name,$dirupload.$namaFile);

    $str_query = "update user set profile_pic = '".$namaFile."' where username = '".$_SESSION['usernameRegis']."'";
    $query = mysqli_query($connection, $str_query);

    $_SESSION["msg"] = "Profile Berhasil Diubah!";

    header(Location: "profile.php");

?>