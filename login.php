<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
    <style type = "text/css">
        body{
            background-color: #FFFF8D;        
        }
        .cont1{
            text-align:center;
            padding : 10px 480px;
        }
        .aa{
            background-color: #40C4FF;
        }
    </style>
<body>
    <div class="aa">
        <h1 class="text3">Login</h1>
        <form action="prosesLogin.php" method="post" onSubmit="return validasi()">
            <table class="cont1">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="usernameLogin"required/></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="passwordLogin"required/></td>
                    </tr>
                    <tr>
                        <td>
                            <input class="btnRegister" type="submit" name="submit" value="Login">
                        </td>
                        <td>
                            <form class="btna" href="register.php" method="post">
                                <input class="btnKembali" type="submit" value="Kembali"> 
                            </form>
                        </td> 
                    </tr>  

                </table>
    
        </form>
    </div>
</body>
</html>