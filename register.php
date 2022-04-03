<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<style type = "text/css">
        body{
            background-color: #84FFFF;        
        }
    </style>
<body>
    <form action="prosesRegister.php" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
        <table >
                <caption class="regis">Register</caption>

                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="namaDepan" id="namaDepan" required/></td> 
                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah"required/></td> 
                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang"required/></td> 
                </tr>

                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir"required/></td> 
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir"required/></td> 
                    <td>NIK</td>
                    <td><input type="text" name="NIK"required/></td> 
                </tr>

                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara"required/></td> 
                    <td>Email</td>
                    <td><input type="email" name="email"required/></td> 
                    <td>No. HP</td>
                    <td><input type="text" name="noHP"required/></td> 
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" id="" cols="20" rows="3" required></textarea></td> 
                    <td>Kode Pos</td>
                    <td><input type="number" name="kodePos"required/></td> 
                    <td>Foto Profil</td>
                    <td>
                        <form action="" method="post" enctype = "multipart/form-data">
                            <input type="file" name = "fotoProfile" accept="image/*" required/>
                        </form>
                    </td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"required/></td> 
                    <td>Password 1</td>
                    <td><input type="password" name="password1"required/></td> 
                    <td>Password 2</td>
                    <td><input type="password" name="password2"required/></td> 
                </tr>

                <tr>
                    <td>
                        <form class="btna" action="welcome.php" method="post">
                            <input class="btnKembali" type="submit" value="Kembali"> 
                        </form>
                    </td> 
                    <td>
                        <input class="btnRegister" type="submit" name="submit" value="Register">
                    </td>
                </tr>  
            </table>      
        </form>
    </body>
</html>