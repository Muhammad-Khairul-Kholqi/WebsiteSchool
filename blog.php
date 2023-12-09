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
            <a href="#blog">BLOG</a>
            <a href="about.php">ABOUT US</a>
        </div>

        <!-- hamburger menu -->
        <div class="navbar-extra">
            <a href="#" id="user"><i data-feather="user"></i></a>
            <a href="https://www.instagram.com/khrlkh10/" id="instagram"><i data-feather="instagram"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <!-- content 1 -->
    <div class="content1">
        <div class="title1">
            <p>Pesan &<br>Kesan Alumni</p>
        </div>
    </div>

    <!-- content 2 -->
    <br><br>
    <div class="pesan_kesan_alumni">
        <div class="psalumni_atas">
            <div class="pembungkus_alumni1">
                <div class="kata_alumni1">
                    <p>Bagi saya sekolah di SMPN 2 CICURUG<br>sangat menyenangkan saya mendapat<br>banyak teman walaupun saya sekolah<br>
                       disana hanya beberapa waktu saja karna<br>adanya wabah penyakit,<br>tapi tetap menyenangkan pernah menjadi<br>keluarga SMPN 2 CICURUG<br>
                       saya berharap semoga SMPN 2 CICURUG<br>semakin jaya dan makin dikenal orang<br>dan semoga untuk guru-guru<br>dan staf selalu sehat dan dalam<br> lindungan tuhan yang maha esa.</p>
                </div>
                <center><p class="nama_1">Khairul Kholqi</p></center>
            </div>
            <div class="pembungkus_alumni2">
                <div class="kata_alumni2">
                    <p>Saya merasa sangat berbahagia dan <br>bersyukur bisa bersekolah di <br>SMPN 2 Cicurug. Meskipun hanya sebentar <br>karena adanya 
                        wabah penyakit, <br>saya mendapatkan banyak teman <br>dan kenangan tak terlupakan. Terima kasih <br>SMPN 2 Cicurug telah memberikan <br>pengalaman berharga dalam hidup saya.<br> Semoga sekolah ini terus berkembang <br>dan semakin dikenal oleh masyarakat.</p>
                </div>
                <center><p class="nama_2">Rama Putra</p></center>
            </div>
            <div class="pembungkus_alumni3">
                <div class="kata_alumni3">
                    <p>Sebuah kehormatan bagi saya dapat<br> mengenyam pendidikan di SMPN 2 Cicurug. <br>Meskipun masa sekolahku terbatas karena<br>
                     situasi wabah, namun saya sangat <br>bersyukur atas pengalaman dan persahabatan <br>yang terjalin. Terima kasih SMPN 2 Cicurug,<br> 
                    semoga terus menjadi sekolah yang unggul <br>dan terdepan dalam memberikan<br> pendidikan berkualitas.</p>
                </div>
                <center><p class="nama_3">Dewi Sukmawijaya</p></center>
            </div>
        </div>

        <br><br>

        <div class="psalumni_bawah">
            <div class="pembungkus_alumni4">
                <div class="kata_alumni4">
                <p>Mendapat kesempatan bersekolah di<br> SMPN 2 Cicurug adalah anugerah yang<br> tak terhingga. Meskipun hanya sebentar <br>karena adanya wabah, saya merasakan <br>
                kebahagiaan yang luar biasa dalam <br>mendapatkan banyak teman sejati dan <br>pengetahuan berharga. Terima kasih<br> SMPN 2 Cicurug atas peran penting<br>
                 dalam hidup saya. Semoga sekolah ini <br>semakin berjaya dan menjadi <br>tempat pilihan bagi para pelajar.</p>
                </div>
                <center><p class="nama_4">Ardi Julian</p></center>
            </div>
            <div class="pembungkus_alumni5">
                <div class="kata_alumni5">
                    <p>Sungguh sebuah pengalaman yang <br>tak ternilai bisa menjadi bagian <br>dari keluarga SMPN 2 Cicurug. <br>Meski waktu yang dihabiskan di sana <br>singkat karena wabah, saya merasa sangat<br> 
                    beruntung mendapatkan teman-teman <br>sekaligus pengalaman berharga dalam <br>belajar. Terima kasih SMPN 2 Cicurug, <br> tumbuh dan dikenal luas oleh masyarakat.</p>
                </div>
                <center><p class="nama_5">Phony</p></center>
            </div>
            <div class="pembungkus_alumni6">
                <div class="kata_alumni6">
                    <p>SMPN 2 Cicurug adalah tempat <br>yang memberikan keceriaan dan kenangan <br>indah dalam hidup saya. Walaupun <br>saya hanya bersekolah di sana beberapa<br> waktu karena situasi wabah, <br>
                    saya merasa sangat beruntung<br> mendapatkan pengalaman berharga<br> dan bertemu dengan teman-teman <br>yang luar biasa. Terima kasih <br>SMPN 2 Cicurug atas segalanya. 
                    <br>Semoga sekolah ini terus berkembang<br> dan menjadi kebanggaan bagi kita semua.</p>
                </div>
                <center><p class="nama_6">Rehan</p></center>
            </div> 
        </div>
    </div>
    <br><br><br><br>

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

   /* content 1 */
   .title1 {
        display: flex;
        justify-content: space-between;
        padding: 2rem 10%;
        background: linear-gradient(to right, #19A7CE, #19A7CE);
        align-items: center;
   }

   .title1 p {
        margin-top: 140px;
        font-size: 35px;
        font-family: 'Kanit', sans-serif;
        font-weight: bold;
        color: #fff;
        letter-spacing: 2px;
        text-shadow: 1px 1px 10px #000;
   }

   .title_pesan p {
        font-size: 35px;
        font-family: 'Inter', sans-serif;
        font-weight: bold;
        margin-left: 50px;
   }

   /* content 2 */
   .psalumni_atas {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 5px 10%;
   }

   .psalumni_bawah {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 5px 10%;
   }

   /* kesan & pesan para alumni */
   .kata_alumni1 {
        background-color: #ffffff;
        padding: 10px;
        height: 300px;
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        border-bottom: 3px solid black;
   }

   .pembungkus_alumni1 {
        background-color: #00337C;
        border-radius: 10px;
        height: 400px;
        border: 3px solid black;
   }

   .nama_1 {
        color: #fff;
        font-size: 25px;
        font-family: 'Kanit', sans-serif;
   }

   .kata_alumni2 {
        background-color: #ffffff;
        padding: 10px;
        height: 300px;
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-family: 'Inter', sans-serif;
        border-bottom: 3px solid black;
   }

   .pembungkus_alumni2 {
        background-color: #00337C;
        border-radius: 10px;
        height: 400px;
        border: 3px solid black;
   }

   .nama_2 {
        color: #fff;
        font-size: 25px;
        font-family: 'Kanit', sans-serif;
   }

   .kata_alumni3 {
        background-color: #ffffff;
        padding: 10px;
        height: 300px;
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-family: 'Inter', sans-serif;
        border-bottom: 3px solid black;
   }

   .pembungkus_alumni3 {
        background-color: #00337C;
        border-radius: 10px;
        height: 400px;
        border: 3px solid black;
   }

   .nama_3 {
        color: #fff;
        font-size: 25px;
        font-family: 'Kanit', sans-serif;
   }

   .kata_alumni4 {
        background-color: #ffffff;
        padding: 10px;
        height: 300px;
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-family: 'Inter', sans-serif;
        border-bottom: 3px solid black;
   }

   .pembungkus_alumni4 {
        background-color: #00337C;
        border-radius: 10px;
        height: 400px;
        border: 3px solid black;
   }

   .nama_4 {
        color: #fff;
        font-size: 25px;
        font-family: 'Kanit', sans-serif;
   }

   .kata_alumni5 {
        background-color: #ffffff;
        padding: 10px;
        height: 300px;
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-family: 'Inter', sans-serif;
        border-bottom: 3px solid black;
   }

   .pembungkus_alumni5 {
        background-color: #00337C;
        border-radius: 10px;
        height: 400px;
        border: 3px solid black;
   }

   .nama_5 {
        color: #fff;
        font-size: 25px;
        font-family: 'Kanit', sans-serif;
   }

   .kata_alumni6 {
        background-color: #ffffff;
        padding: 10px;
        height: 300px;
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-family: 'Inter', sans-serif;
        border-bottom: 3px solid black;
   }

   .pembungkus_alumni6 {
        background-color: #00337C;
        border-radius: 10px;
        height: 400px;
        border: 3px solid black;
   }

   .nama_6 {
        color: #fff;
        font-size: 25px;
        font-family: 'Kanit', sans-serif;
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