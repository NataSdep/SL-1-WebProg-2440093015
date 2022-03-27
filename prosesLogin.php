<?php
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_SESSION)){
            if(($_POST['usernameLogin'] == $_SESSION['usernameRegis']) && ($_POST['passwordLogin'] == $_SESSION['passwordRegis1'])){
                header("Location: home.php");
            } else{
                echo "Login gagal"; echo "<br>";
                echo "<a href='register.php'>Silahkan klik disini untuk menuju Menu Register</a>";
            }
            
        } 
    }
?>
