<?php
session_start();
// set session agar user tidak bisa mengakses halaman ini harus login terlebih dahulu
if (!isset($_SESSION["login"])) {
    header ("location: login.php");
    exit;
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
    <!-- link js untuk feather-->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<!-- ini adalah bagian navbar, foto, dan judul -->
<nav class="navbar">
        <!-- logo -->
        <div class="navbar-logo"><img src="foto/logobcr.png"></div>

        <!-- navbar -->
        <div class="navbar-nav">
            <a href="index.php">HOME</a>
            <a href="service.php">SERVICES</a>
            <a href="blog.php">BLOG</a>
            <a href="#about">ABOUT US</a>
        </div>

        <!-- hamburger menu -->
        <div class="navbar-extra">
            <a href="#" id="user"><i data-feather="user"></i></a>
            <a href="https://www.instagram.com/khrlkh10/" id="instagram"><i data-feather="instagram"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <div class="content1">
        <div class="title1">
            <p>Hubungi<br>Kami</p>
        </div>
    </div>

    <!-- content -->
    <div class="all_content">
    <div class="content_about">
        <div class="content_kiri">
            <div class="title_about">
                <p>SMP NEGERI<br>2 CICURUG</p>
            </div>
            <div class="pembungkus_alamat">
                <div class="logo_alamat">
                    <img src="foto/placeholder.png">
                </div>
                <div class="kata_alamat">
                    <p><span class="span1">ALAMAT</span><br><span class="span2">Jl. Leuwinanggung, Purwasari, Kec.<br> Cicurug, Kabupaten Sukabumi, Jawa Barat</span></p>
                </div>
            </div>
            <br><br>
            <div class="pembungkus_gmail">
                <div class="logo_gmail">
                    <img src="foto/mail.png">
                </div>
                <div class="kata_gmail">
                    <p><span class="span3">EMAIL</span><br><span class="span4">smpn2cicurug@yahoo.co.id</span></p>
                </div>
            </div>
        </div>

        <div class="content_kanan">
        <br><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7542744596985!2d106.77738057263633!3d-6.799721193197638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68332c0d06143b%3A0xc36676693f5cc6f1!2sSMPN%202%20Cicurug!5e0!3m2!1sid!2sid!4v1686969513200!5m2!1sid!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>
    <br><br>

           <!-- footer -->
<div class="container_all_footer">
    <br><br>
    <div class="container_footer">
        <div class="bag_kiri">
            <div class="kata_foto_footer">
            <div class="logo_footer">
                <img src="foto/logobcr.png">
            </div>
            <div class="kata_footer_kiri">
                <p>SMP NEGERI<br><span>2 CICURUG</span></p>
            </div>
            </div>
            <div class="alamat_footer">
                <p>Jl. Leuwinanggung, Purwasari,<br>Kec. Cicurug, Kabupaten<br>Sukabumi, Jawa Barat.</p>
            </div>
        </div>
        <div class="bag_tengah">
            <div class="title_tengah">
                <p>Kontak Kami</p>
                <hr color="#F79327" size="3" width="150px">
            </div>
            <div class="telepon_tengah">
                <p><img src="foto/telephone.png"></p>
                <p>Telepon<br>-</p>
            </div>
            <div class="whatsapp_tengah">
                <p><img src="foto/whatsapp.png"></p>
                <p>whatsapp<br>-</p>
            </div>
        </div>
        <div class="bag_kanan">
            <div class="title_kanan">
                <p>Media Sosial</p>
                <hr color="#F79327" size="3" width="160px">
            </div>
            <div class="pembungkus_ig_fb">
            <div class="instagram">
                <a href="https://www.instagram.com/smpnegeri_2_cicurug/"><img src="foto/instagram.png"></a>
                <p><a href="https://www.instagram.com/smpnegeri_2_cicurug/">instagram</a></p>
            </div>
            <div class="facebook">
                <a href="https://www.facebook.com/profile.php?id=100064772691499&locale=ms_MY"><img src="foto/facebook.png"></a>
                <p><a href="https://www.facebook.com/profile.php?id=100064772691499&locale=ms_MY">Facebook</a></p>
            </div>
            </div>
        </div>
    </div>
    <br><br>
</div>
<!-- copyright -->
<div class="penutupan">
    <br>
    <center>
        <div class="title_penutup">
        <p>2023 - SMPN 2 CICURUG</p>
        </div>
    </center>
    <br>
</div>

</body>
<!-- feather icons -->
<script>
    feather.replace()
</script>

<!-- script js -->
<script src="js/script.js"></script>

<style>
       /* fonts */
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Roboto+Slab:wght@500&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Inter:wght@500&family=Roboto+Slab:wght@500&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&family=Inter:wght@500&family=Roboto+Slab:wght@500&family=Rowdies:wght@300&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Kanit&display=swap');
   /* navbar */
   body {
       background-color: #D9D9D9;
       min-height: 1200px;
       margin: 0;
       padding: 0;
   }

   .navbar {
       display: flex;
       justify-content: space-between;
       align-items: center;
       padding: 0.1rem 5%;
       background-color: #ffffff;
       position: fixed;
       top: 0;
       left: 0;
       right: 0;
       z-index: 9999;
       box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
   }

   .navbar-logo img {
       width: 5rem;
   }

   .navbar .navbar-nav a {
       color: #000000;
       display: inline-block;
       font-size: 22px;
       font-family: 'Inter', sans-serif;
       margin: 0 1rem;
       text-decoration: none;
       
   }

   .navbar .navbar-nav a:hover {
       color: #1F8A70;
   }

   .navbar .navbar-nav a::after {
       content: '';
       display: block;
       padding-bottom: 0.5rem;
       border-bottom: 3px solid #1F8A70;
       transform: scaleX(0);
       transition: 0.2s linear;
   }

   .navbar .navbar-nav a:hover::after {
       transform: scaleX(0.5);
   }

   .navbar .navbar-extra a {
       color: black;
       margin: 0 0.5rem;
   }

   .navbar .navbar-extra a:hover {
        color: #1F8A70;
   }

   .navbar .navbar-extra a:hover {
       color: #00337C;
   }

   #hamburger-menu {
       display: none;
   }

   /* judul */
   .title1 {
        display: flex;
        justify-content: space-between;
        padding: 2rem 10%;
        background: linear-gradient(to right, #19A7CE, #19A7CE);
        align-items: center;
   }

   .title1 p {
        margin-top: 140px;
        font-size: 40px;
        font-family: 'Kanit', sans-serif;
        font-weight: bold;
        color: #fff;
        letter-spacing: 2px;
        text-shadow: 1px 1px 10px #000;
   }

   /* content */
   .content_about {
        display: flex;
        justify-content: space-between;
        padding: 30px 10%;
        flex-wrap: wrap;
   }

   .content_kiri {
        display: block;
   }

   .pembungkus_alamat {
        display: flex;
        flex-wrap: wrap;
   }

   .kata_alamat p {
        margin-top: -1px;
        margin-left: 10px;
   }

   .kata_alamat p .span1 {
        font-size: 20px;
        font-weight: bold;
        font-family: 'Inter', sans-serif;
   }

   .kata_alamat p .span2 {
        font-size: 1rem;
        font-family: 'Inter', sans-serif;
   }

   .logo_alamat img {
        width: 60px;
   }

   .pembungkus_gmail {
        display: flex;
        flex-wrap: wrap;
   }

   .logo_gmail img {
        width: 60px;
   }

   .kata_gmail p {
        margin-left: 10px;
        margin-top: -1px;
        margin-top: 7px;
   }

   .kata_gmail p .span3 {
        font-size: 20px;
        font-weight: bold;
        font-family: 'Inter', sans-serif;
   }

   .kata_gmail p .span4 {
        font-size: 1rem;
        font-family: 'Inter', sans-serif;
   }

   .title_about p {
        font-size: 45px;
        font-weight: bold;
        font-family: 'Kanit', sans-serif;
        letter-spacing: 2px; 
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
   }

   .all_content {
        background-color: #D9D9D9;
   }

     /* footer */
     .container_all_footer {
    background-color: #272727;
}

.container_footer {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 5px 12%;
}

.bag_kiri {
    display: block;
}

.kata_foto_footer {
    display: flex;
}

.logo_footer img {
    width: 100px;
}

.kata_footer_kiri p {
    font-size: 25px;
    margin-left: 10px;
    font-family: 'Inter', sans-serif; 
    font-weight: bold;
    color: #ffffff;
}

.alamat_footer p {
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif; 
    color: #ffffff;
    margin-left: 10px;
}

.bag_tengah {
    display: block;
}

.title_tengah p {
    font-family: 'Inter', sans-serif; 
    font-size: 23px;
    color: #ffffff;
}

.telepon_tengah {
    display: flex;
    flex-wrap: wrap;
}

.telepon_tengah img {
    width: 30px;
}

.telepon_tengah p {
    color: #ffffff;
    margin-left: 15px;
    line-height: 1.4;
}

.whatsapp_tengah {
    display: flex;
    flex-wrap: wrap;
}

.whatsapp_tengah img {
    width: 35px;
}

.whatsapp_tengah p {
    color: #ffffff;
    margin-left: 15px;
    line-height: 1.4;
}

.bag_kanan {
    display: block;
}

.title_kanan p {
    font-family: 'Inter', sans-serif; 
    font-size: 23px;
    color: #ffffff;
}

.instagram {
    display: flex;
    flex-wrap: wrap;
    line-height: 3;
}

.instagram p {
    margin-top: -10px;
}

.instagram p a {
    margin-left: 10px;
    text-decoration: none;
    color: #ffffff;
    font-size: 20px;
}

.instagram img {
    width: 40px;
}

.facebook {
    display: flex;
    flex-wrap: wrap;
}

.facebook img {
    width: 40px;
}

.facebook p a {
    margin-left: 10px;
    text-decoration: none;
    color: #ffffff;
    font-size: 18px;
}

.pembungkus_ig_fb {
    margin-top: 20px;
}

/* copyright */
.penutupan {
    background-color: #000;
}

.title_penutup p {
    color: #ffffff;
    font-size: 20px;
}

    /* responsive */

   /* laptop */
   @media (max-width: 1366px) {
       .navbar .navbar-nav a {
           font-size: 20px;
       }

       .image img {
            width: 400px;
            margin-left: -100px;
       }

       .navbar-logo img {
           width: 85px;
       }
   }

   /* tablet */
   @media (max-width: 758px) {
       .navbar .navbar-nav a {
           font-size: 62.5%;
       }

       .navbar-logo img {
           width: 60px;
           margin-left: 30px;
       }

       #hamburger-menu {
           display: inline-block;
       }

       .navbar .navbar-nav {
           position: absolute;
           top: 100%;
           right: -100%;
           background-color: #ffffff;
           width: 18.3rem;
           height: 70vh;
           transition: 0.3s;
           border-top: 3px solid red;
       }

       .navbar .navbar-nav.active {
           right: 0;
       }

       .navbar .navbar-nav a {
           color: black;
           display: block;
           margin: 1.5rem;
           padding: 0.5rem;
           font-size: 18px;
       }

       .navbar .navbar-nav a::after {
           transform-origin: 0 0 ;
       }

       .navbar .navbar-nav a:hover::after {
           transform: scaleX(0.2);
       }

       .navbar .navbar-nav a:hover {
           color: #00337C;
       }

       .navbar .navbar-nav a::after {
            border-bottom: 3px solid #00337C;
       }

       iframe {
            width: 300px;
            height: 200px;
       }
   }

   /* mobile phone */
   @media (max-width: 450px) {
       .navbar .navbar-nav a {
           font-size: 80%;
           padding: 1px;
       }

       .navbar-logo img {
           width: 40px;
       }

       .navbar .navbar-nav {
           width: 10rem;
           height: 45vh;
           transition: 0.3s;
           border-radius: 0 0 10px 10px; 
       }
   }

   </style>
</html>