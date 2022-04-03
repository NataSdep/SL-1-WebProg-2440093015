<?php
    session_start();
    include("config.php");

    $namaFile = $_FILES['fotoProfile']['name'];
    $tmp_name = $_FILES['fotoProfile']['tmp_name'];

    $dirupload = "fotoProfile/";
    $uploaded = move_uploaded_file($tmp_name,$dirupload.$namaFile);
    $_SESSION['fotoProfile'] = $namaFile;
    $_SESSION['register-done'] = true;
        
        $namaDepan = $_POST['namaDepan'];
        $namaTengah = $_POST['namaTengah'];
        $namaBelakang = $_POST['namaBelakang'];

        $tempatLahir = $_POST['tempatLahir'];
        $tanggalLahir = $_POST['tanggalLahir'];
        $NIK = $_POST['NIK'];
        
        $wargaNegara = $_POST['wargaNegara'];
        $email = $_POST['email'];
        $noHP = $_POST['noHP'];
        
        $alamat = $_POST['alamat'];
        $kodePos = $_POST['kodePos'];

        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        $_SESSION["namaDepanRegis"] = $namaDepan;
        $_SESSION["namaTengahRegis"] = $namaTengah;
        $_SESSION["namaBelakangRegis"] = $namaBelakang;

        $_SESSION["tempatLahirRegis"] = $tempatLahir;
        $_SESSION["tanggalLahirRegis"] = $tanggalLahir;
        $_SESSION["NIKRegis"] = $NIK;

        $_SESSION["wargaNegaraRegis"] = $wargaNegara;
        $_SESSION["emailRegis"] = $email;
        $_SESSION["noHPRegis"] = $noHP;

        $_SESSION["alamatRegis"] = $alamat;
        $_SESSION["kodePosRegis"] = $kodePos;

        $_SESSION["usernameRegis"] = $username;
        $_SESSION["passwordRegis1"] = $password1;
         $_SESSION["passwordRegis2"] = $password2;
         
         $str_query = "insert into user value('".$namaDepan."','".$namaBelakang."','".$namaTengah."','".$tempatLahir."','".$tanggalLahir."','".$NIK."','".$wargaNegara."','".$email."','".$noHP."','".$alamat."','".$kodePos."','".$fotoProfile."','".$username."','".$password1."')";

        try{
            $query = mysqli_query($connection, $str_query);
            $_SESSION["msg"] = "Register Berhasil";
            header("Location:login.php");
        } catch(Exception $e){
            $_SESSION["msg"] = "Register Gagal";
}
?>

