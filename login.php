<?php
session_start();
require 'controller.php';

// cek cookie
if(isset($_COOKIE['id']) && (isset($_COOKIE['key']))){

    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM tbl_loginakr WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($key === hash('sha256', $row['username'])) {
        $_SESSION ['login'] = true;
    }
    
}

// set session agar user yang sudah berada di halaman login tidak bisa kembali ke halaman login
if (isset($_SESSION["login"])) {
    header ("location: index.php");
    exit;
}


if (isset($_POST["login"])) {

    $username = $_POST ["username"];
    $password = $_POST ["password"];

    $result = mysqli_query($conn, "SELECT * FROM tbl_loginakr WHERE username = '$username' ");

    // cek username
    if ( mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result); 
            if (password_verify($password, $row["password"])) {

                // set session
                $_SESSION["login"] = true;

                // cek remember
                if(isset($_POST['remember'])) {

                // buat cookie
                setcookie('id', $row['id'], time() + 300);
                setcookie('key', hash('sha256', $row['username']), time() + 300 );
            }

                header("Location: index.php");
                exit;
            }

        }
        $error = true;
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
            <div class="logo_hp">
                <img src="foto/logo_signin.png">
            </div>
        </div>
        <div class="all_halaman_kanan">
            <div class="judul">
                <center><p><span class="span1">WELCOME!</span><span class="span2"><br>Sign In Your Account</span></p></center>
            </div>
            <br><br>
            <form action="" method="post">
                <div class="username_password">
                <input class="user1" type="text" name="username" required autocomplete="off"  placeholder="Username">
                <br><br>
                <input class="password1" type="password" name="password" required autocomplete="off"  placeholder="Password" >
                </div>
                <br>
                <div class="rememberme">
                    <input type="checkbox" name="remember" id="remember" class="checkbox">
                    <label for="remember">Remember me</label>
                </div>
                <br><br>
                <div class="kumpulan_button">
                    <div class="login"><button type="submit" name="login">Sign In</button></div>
                    <div class="register"><button><a href="register.php">Sign Up</a></button></div>
                </div>
                <br><br>
                <?php if(isset($error)) : ?>
                    <div class="peringatan_salah"><p>Username / password salah</p></div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
<style>
    body {
        background-image: url(foto/bg_signin.png);
        background-size: cover;
    }

    .semua_halaman {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 5px 10%;
        margin-top: 150px;
    }

    .username_password input {
        width: 400px;
        height: 30px;
        border: 2px solid #000000;
        border-radius: 10px;
        color: #000;
    }

    .username_password input:hover {
        border: 3px solid #1F8A70;
    }

    ::placeholder {
        color: #000;
        font-size: 16px;
        padding-left: 8px;
    }

    .judul p {
        color: #1F8A70;
        font-family: 'Inter', sans-serif;
        font-weight: bold;
    }

    .judul p .span1 {
        font-size: 40px;
    }

    .judul p .span2 {
        font-size: 25px;
    }

    .rememberme  {
        font-family: 'Inter', sans-serif;
    }

    .kumpulan_button {
        display: flex;
        flex-wrap: wrap;
    }

    .register {
        margin-left: 5px;
    }

    .login {
        margin-right: 5px;
    }

    .login button {
        background-color: #1F8A70;
        border: none;
        color: #fff;
    }

    .login button:hover {
        box-shadow: 1px 1px 5px #000;
    }

    .register button {
        border: 3px solid #1F8A70;
        background-color: #fff;
    }

    .register button:hover {
        box-shadow: 1px 1px 5px #000;
    }

    .register button a {
        text-decoration: none;
        color: #1F8A70;
    }


    button {
        width: 200px;
        height: 35px;
        font-weight: bold;
        font-size: 20px;
        border-radius: 10px;
    }

    .logo_hp img {
        width: 400px;
        margin-top: -70px;
    }

    .peringatan_salah {
        color: red;
        font-style: italic;
        font-size: 18px;
    }
</style>
</html>