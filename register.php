<?php
    require 'controller.php';

    if(isset($_POST["regis"])) {
        if(registrasi($_POST) > 0) {
            echo "
                <script>
                    alert('Registrasi anda berhasil');
                    document.location.href = 'login.php';
                </script>
            ";
        }
            echo mysqli_error($conn);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMPN 2 CICURUG</title>
    <!-- logo title -->
    <link rel="website icon" href="foto/logobcr.png" type="png">
</head>
<body>
<div class="semua_halaman">
<div class="all_halaman_kiri">
    <div class="judul">
        <center><p>Create Account!</p></center>
        <br><br>
    </div>

    <form action="" method="post">
        <input class="user1" type="text" name="username" required autocomplete="off"  placeholder="Username">
        <br><br>
        <input class="password1" type="password" name="password" required autocomplete="off"  placeholder="Password" >
        <br><br>
        <input class="password2" type="password" name="conf_password" required autocomplete="off"  placeholder="Confirm Password" >
        <br><br><br>
        <button type="submit" name="regis">Sign Up</button>
    </form>
</div>
<div class="all_halaman_kanan">
    <div class="logo_laptop">
        <img src="foto/fotosignup.png">
    </div>
</div>
</div>
</body>
<style>
    body {
        background-image: url(foto/bg_signup.png);
        background-size: cover;
    }

    .semua_halaman {
        display: flex;
        flex-wrap: wrap;
        padding: 5px 10%;
        justify-content: space-between;
        margin-top: 150px;
    }

    .logo_laptop img {
        width: 450px;
    }

    input {
        width: 400px;
        height: 30px;
        border: 2px solid #000000;
        border-radius: 10px;
        color: #000;
    }

    input:hover {
        border: 3px solid #1F8A70;
    }

    ::placeholder {
        color: #000;
        font-size: 16px;
        padding-left: 8px;
    }

    button {
        width: 400px;
        height: 35px;
        border: 3px solid #1F8A70;
        background-color: #fff;
        border-radius: 10px;
        color: #1F8A70;
        font-weight: bold;
        font-size: 20px;
    }

    button:hover {
        box-shadow: 1px 1px 5px #000;
    }

    .judul p {
        font-size: 40px;
        color: #1F8A70;
        font-weight: bold;
        font-family: 'Inter', sans-serif;
    }
</style>
</html>