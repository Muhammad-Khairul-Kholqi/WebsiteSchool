<?php
    if( isset($_POST['kirim'])){
        if( $_POST['namapengguna'] == "khairul" && $_POST['katsan'] == "098"){
            header("Location: tambahdata.php");
        }else{
            $salah = true;
        }
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
    <div class="content1">
        <div class="title1">
            <p>Login<br>Admin</p>
        </div>
    </div>

    <div class="keseluruhan">
        <div class="all_content">
            <div class="content_kiri">
                <form action="" method="post">
                    <input type="text" name="namapengguna" placeholder="Username" required autocomplete="off">
                    <br><br>
                    <input type="password" name="katsan" placeholder="Password" required autocomplete="off">
                    <br><br>
                    <button type="submit" name="kirim">Sign In</button>

                    <?php if (isset ($salah)){ ?>
                      <div class="false"><p><em>Username / Password Salah</em></p></div>
                    <?php } ?> 
                </form>
            </div>
            <div class="content_kanan">
                <p>Hanya Admin<br>Yang Dapat<br>Mengakses!</p>
            </div>
        </div>
    </div>
</body>
<style>
    .content1 {
        background-color: #19A7CE;
        top: 0;
        left: 0;
        right: 0;
        position: absolute;
        height: 200px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .title1 p {
        margin-top: 40px;
        margin-left: 70px;
        font-size: 45px;
        font-family: 'Kanit', sans-serif;
        font-weight: bold;
        color: #fff;
        letter-spacing: 2px;
        text-shadow: 1px 1px 10px #000;
    }

    .all_content {
        margin-top: 300px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 10px 10%;
    }

    input {
        width: 350px;
        height: 35px;
        border-radius: 10px;
        border: 2px solid #000;
    }

    ::placeholder {
        padding-left: 10px;
        color: #000;
        font-size: 1rem;
    }

    button {
        width: 350px;
        height: 35px;
        border-radius: 10px;
        border: 3px solid #1F8A70;
        color: #1F8A70;
        background-color: #fff;
        font-size: 1.2rem;
        font-weight: bold;
    }

    .content_kanan p {
        font-size: 3rem;
        font-weight: bold;
        font-family: 'Kanit', sans-serif;
        margin-top: -1px;
    }

    .false p {
        color: red;
    }
</style>
</html>