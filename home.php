<?php
include("connect.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 3 2018C</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        #logo {
            height: 100px;
        }

        .animate {
            -webkit-animation: animatezoom 0.9s;
            animation: animatezoom 0.9s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar-fixed-top animate" style="background-color: black; opacity: 80%;">
        <div class="container" id="navbar">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#home">HOME</a></li>
                    <li role="presentation"><a href="#macam_wisata">NEWS</a></li>
                    <li role="presentation"><a href="#gallery">GALLERY</a></li>
                    <li role="presentation"><a href="#team">ABOUT</a></li>
                    <li role="presentation"><a href="#"><i class="glyphicon glyphicon-search"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- jumbotron -->
    <div class="animate" id="background">
        <div class="jumbotron" style="padding-top: 70px;">
            <div class="navbar-header">
                <a href="#" class=""><img src="assets/img/logokelompok3.png " id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <h1 style="padding-top: 100px;">Wonderful Yogyakarta</h1>
            <p><i>Yogyakarta adalah destinasi wisata paling populer di Indonesia setelah Bali.
                    Apa yang membuat Jogja begitu istimewa sampai dikunjungi jutaan orang setiap tahun?
                    Temukan info wisata Jogja terbaik di sini.</i></p>
        </div>
    </div>
    <!-- jumbotron -->

    <!-- container atas -->
    <div class="animate" id="home">
        <div class="isi">
            <div class="container atas">
                <h1>Keistimewaan Tempat Wisata Di Yogyakarta</h1>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <i class="glyphicon glyphicon-map-marker"></i>
                        <h3>STRATEGIC</h3>
                        <p class="text-justify"><strong>Yogyakarta </strong>adalah kota yang sangat strategis karena banyak sekali
                            tempat wisata yang ada di kota ini. Kota pelajar satu ini memang selalu melekat di hati pengunjungnya.
                            Bagaimana tidak? Jogja adalah kota dengan paket wisata lengkap baik wisata alam, edukasi, kuliner,
                            belanja, semua dapat ditemukan. Karena itu, banyak sekali wisatawan yang tertarik dengan kota ini.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <i class="glyphicon glyphicon-tree-conifer"></i>
                        <h3>CLIMATE</h3>
                        <p class="text-justify"><strong>Yogyakarta </strong>memiliki iklim yang panas ketika musim kemarau. Secara
                            umum, rata-rata curah hujan tertinggi di Kota Yogyakarta yaitu sebanyak 692.50 mm3. Kelembaban udara
                            rata-rata cukup tinggi, terendah terjadi pada bulan Agustus tahun 2019 sebesar 81 persen. Tahun 2019
                            rata-rata tekanan udara sebesar 995.66 mb dan suhu udara rata-rata 26,05oC.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <i class="glyphicon glyphicon-camera"></i>
                        <h3>EXOTIC</h3>
                        <p class="text-justify"><strong>Yogyakarta </strong>Merupakan kota yang eksotik dan berbudaya. Pegunungan,
                            pantai-pantai, hamparan sawah yang hijau dan udara yang sejuk menghiasi keindahan kota Jogja. Tidak
                            diherankan bila kota Jogja sangat terkenal dan merupakan salah satu tujuan utama para wisatawan
                            mancanegara, untuk berlibur dan menghabiskan sisa waktu istirahatnya di Jogja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container atas -->

    <!-- container bawah -->
    <div class="container bawah" id="macam_wisata">
        <h1 style="margin-bottom: 30px;">Berbagai Macam Tempat Wisata Di Yogyakarta</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/pantaisinden.jpg" width="200px">
                <h3>WISATA ALAM</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/Wisata-Kuliner-Yogyakarta.png" width="200px">
                <h3>WISATA KULINER</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/candi-prambanan.jpg" width="200px">
                <h3>WISATA KESEJARAHAN</h3>
            </div>
        </div>
    </div>
    <!-- container bawah -->

    <!-- container news -->
    <div id="news">
        <div class="container">
            <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="thumbnail"><img src="assets/img/indrayanti.jpg">
                        <div class="caption">
                            <h3 style="font-size: 22px;">Pantai Indrayanti</h3>
                            <p class="text-justify">Pantai Pulang Sawal (Pantai Indrayanti) atau disingkat dengan Pantai Pulsa adalah
                                salah satu pantai yang menarik dan eksotis berada di Dusun Ngasem, Desa Sidoharjo, Kecamatan Tepus,
                                Kabupaten Gunung Kidul, Daerah Istimewa <span id="dots1">...</span> <span id="more1">Yogyakarta. Lokasi
                                    Pantai Indrayanti, Kabupaten Gunungkidul
                                    terletak tepat di sisi timur Pantai Sundak. Keduanya dibatasi oleh perbukitan karang. Pantai
                                    Indarayati ini juga menawarkan keindahan panorama yang unik dibanding pantai-pantai lain di
                                    Gunungkidul.</span>
                            </p>
                            <button class="btn btn-default" id="read1" type="button" onclick="read1()">Read More</button><br>
                            <button class="btn btn-default" style="margin-top: 10px;" type="button">Update</button>
                            <button class="btn btn-default" style="margin-top: 10px;" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="thumbnail"><img src="assets/img/kedungpedhut.jpg">
                        <div class="caption">
                            <h3 style="font-size: 22px;">Kedung Pedhut</h3>
                            <p class="text-justify">Sebuah lembah yang terletak di Desa Jatimulyo,
                                Kecamatan Girimulyo, Kabupaten Kulon Progo, Yogyakarta. Air jernih dan kebiruan dari Gunung Kelir,
                                sebuah gunung kapur di antara Kulonprogo dan Purworejo, mengalir sepanjang sungai dan melintasi
                                <span id="dots2">...</span> <span id="more2">riam serta menciptakan air terjun bertingkat-tingkat hingga
                                    ratusan meter, dari ukuran setinggi pintu
                                    maupun air terjun belasan meter. Tempat ini dinamai Kedung Pedut, salah satu andalan Kulon Progo.
                                    Panorama
                                    lembah, riam dan jeram serta airnya bak lukisan. Wisatawan yang datang pasti tergoda untuk langsung
                                    berendam serta berkecipak di sungai itu.</span>
                            </p>
                            <button class="btn btn-default" id="read2" type="button" onclick="read2()">Read More</button><br>
                            <button class="btn btn-default" style="margin-top: 10px;" type="button">Update</button>
                            <button class="btn btn-default" style="margin-top: 10px;" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="thumbnail"><img src="assets/img/kalibiru.jpg">
                        <div class="caption">
                            <h3 style="font-size: 22px;">Kalibiru</h3>
                            <p class="text-justify">Kalibiru adalah salah satu wisata alam yang cukup populer di Kabupaten Kulonprogo.
                                Wisata alam hutan ini memiliki tanah yang bergelombang dan disekelilingnya terdapat banyak bukit dalam
                                area hutan lindung. Wisata Alam <span id="dots3">...</span> <span id="more3">Kalibiru ini berada pada
                                    ketinggian 450 M dpl. Pemandangan alamnya yang sangat indah dan suhu udara yang sangat sejuk karena belum tercemar oleh polusi udara
                                    menjadi salah satu daya tarik kawasan wisata alam ini.</span>
                            </p>
                            <button class="btn btn-default" id="read3" type="button" onclick="read3()">Read More</button><br>
                            <button class="btn btn-default" style="margin-top: 10px;" type="button">Update</button>
                            <button class="btn btn-default" style="margin-top: 10px;" type="button">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="thumbnail"><img src="assets/img/hutanpinusmangunan.jpg">
                        <div class="caption">
                            <h3 style="font-size: 22px;">Hutan Pinus Mangunan</h3>
                            <p class="text-justify">Hutan Pinus Mangunan merupakan destinasi wisata alam yang berada di daerah Bantul
                                yang dijadikan sebagai salah satu tempat selfie yang diburu oleh banyak orang. Hutan Pinus Mangunan
                                memiliki suasana yang dapat membuat pengunjung <span id="dots4">...</span> <span id="more4">merasa damai,
                                    sangat asri, masih alami, serta dapat membuat hati tenang. Terdapat banyak deretan pohon pinus yang tumbuh subur di sepanjang hutan tersebut.
                                    Hutan yang dikelola oleh RPH Mangunan (Resort Pengelolaan Hutan) ini memiliki banyak keunikan. Luas
                                    hutan ini mencapai 500 hektar dan banyak tumbuh pepohonan yang tinggi yang membuat suasana hati
                                    menjadi sejuk dan tenang. Hutan Pinus Mangunan juga sering dikenal dengan Hutan Pinus Imogiri, karena
                                    hutan tersebut berdekatan dengan Makam Raja-raja Imogiri.</span>
                            </p>
                            <button class="btn btn-default" id="read4" type="button" onclick="read4()">Read More</button><br>
                            <button class="btn btn-default" style="margin-top: 10px;" type="button">Update</button>
                            <button class="btn btn-default" style="margin-top: 10px;" type="button">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container news -->

    <!-- gallery -->
    <div id="gallery">
        <div class="container">
            <h1>Gallery</h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="satu">
                    <img class="img-responsive" src="assets/img/gambar-3-A.jpg">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu">
                    <img class="img-responsive" src="assets/img/malioboro.jpg">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="satu">
                    <img class="img-responsive" src="assets/img/tugujogja.jpg">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding-top:31px;">
                    <img class="img-responsive" src="assets/img/bunkerkaliadem.jpg">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding-top:31px;">
                    <img class="img-responsive" src="assets/img/pantaingrenehan1.jpg">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="dua">
                    <img class="img-responsive" src="assets/img/alkid.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- gallery -->

    <!-- container team -->
    <div id="team">
        <div class="container">
            <h1 id="footer">Meet The Team</h1>
            <div class="row">
                <a href="https://www.instagram.com/tsaqif.aushaff10/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_tsaqif.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Tsaqif Aushaf Farodis</h3>
                                <p class="text-center">Founder</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/sulistio_sanjaya/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_tio.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Sulistio Sanjaya</h3>
                                <p class="text-center">Co-Founder</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/realkiaile/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_musa.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Musafak</h3>
                                <p class="text-center">Database Analys</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/vyaninsyanurmuhammad/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_vyan.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Vyan Insyah Nur</h3>
                                <p class="text-center">Back-End Developer</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="https://www.instagram.com/4k1117/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="margin-left: 150px;">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_arya1.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Abdul Eriawan Nahar</h3>
                                <p class="text-center">Front-End Developer</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/miftahjailanii/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_miftah2.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Miftah Jailani Nasution</h3>
                                <p class="text-center">Front-End Developer</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/nurfajarismail/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_fajar.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Nur Fajar Ismail</h3>
                                <p class="text-center">UI / UX Designer</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- container team -->

    <!-- about -->
    <div id="about">
        <div class="container footer">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php
                if (isset($_COOKIE["adminID"])) {
                    $getUserLoggedIn = $connect->query("SELECT * FROM admin WHERE adminID = '" . $_COOKIE["adminID"] . "'")->fetch_assoc();
                ?>
                <?php

                } else {
                ?>
                <?php
                }
                ?>
                <h1> <img src="assets/img/logokelompok3.png" width="180px"></h1>
                <h2>Punya pertanyaan ?</h2>
                <p>Silahkan kirim pertanyaan atau masukan ke email berikut !</p>
                <a href="https://mail.google.com/mail/u/0/#sent?compose=GTvVlcSPFdVqdzgdfJnXJQPVllSKQRxxJDHHrVHjtGsNTFpZLThrNPdTHgZlBwFcNJQmSlNmlHDvW" target="_blank">tsaqifarodis@gmail.com</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2>Newsletter Subscription</h2>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" value="Your Email">
                    <div class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Subscribe </button>
                    </div>
                </div>
                <div id="icon">
                    <a href="https://www.instagram.com/wisatadiyogyakarta/?hl=id" target="_blank" style="color: white;"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCT20SfbVmrz-qA7f23nYlXg/featured" target="_blank" style="color: white;"><i class="fa fa-youtube-play"></i></a>
                    <a href="https://www.facebook.com/jelajahwisatajogja" target="_blank" style="color: white;"><i class="fa fa-facebook-official"></i></a>
                </div>
                <a href="logout.php">
                    <button id="login" class="btn btn-primary" type="submit">Log out</button>
                </a>
                <a href="index.php">
                    <button id="login" class="btn btn-primary" type="submit">Ke Halaman User</button>
                </a>
            </div>
        </div>
    </div>
    <!-- about -->
    <a href="#" class="ignielToTop"></a>
    <!-- kaki -->
    <div id="kaki">
        <div class="container">
            <h5 class="text-center">Copyright © 2020 | Powered by Kelompok-3 2018-C</h5>
        </div>
    </div>
    <!-- kaki -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var i = 0;
        function read() {
            if (!i) {
                document.getElementsByClassName("more").style.display = "inline";
                document.getElementsByClassName("dots").style.display = "none";
                document.getElementsByClassName("read").innerHTML = "Read less";
                i = 1;
            } else {
                document.getElementsByClassName("more").style.display = "none";
                document.getElementsByClassName("dots").style.display = "inline";
                document.getElementsByClassName("read").innerHTML = "Read more";
                i = 0;
            }
        }
        var a = 0;
        function read1() {
            if (!a) {
                document.getElementById("more1").style.display = "inline";
                document.getElementById("dots1").style.display = "none";
                document.getElementById("read1").innerHTML = "Read less";
                a = 1;
            } else {
                document.getElementById("more1").style.display = "none";
                document.getElementById("dots1").style.display = "inline";
                document.getElementById("read1").innerHTML = "Read more";
                a = 0;
            }
        }
        var b = 0;
        function read2() {
            if (!b) {
                document.getElementById("more2").style.display = "inline";
                document.getElementById("dots2").style.display = "none";
                document.getElementById("read2").innerHTML = "Read less";
                b = 1;
            } else {
                document.getElementById("more2").style.display = "none";
                document.getElementById("dots2").style.display = "inline";
                document.getElementById("read2").innerHTML = "Read more";
                b = 0;
            }
        }
        var c = 0;
        function read3() {
            if (!c) {
                document.getElementById("more3").style.display = "inline";
                document.getElementById("dots3").style.display = "none";
                document.getElementById("read3").innerHTML = "Read less";
                c = 1;
            } else {
                document.getElementById("more3").style.display = "none";
                document.getElementById("dots3").style.display = "inline";
                document.getElementById("read3").innerHTML = "Read more";
                c = 0;
            }
        }
        var d = 0;
        function read4() {
            if (!d) {
                document.getElementById("more4").style.display = "inline";
                document.getElementById("dots4").style.display = "none";
                document.getElementById("read4").innerHTML = "Read less";
                d = 1;
            } else {
                document.getElementById("more4").style.display = "none";
                document.getElementById("dots4").style.display = "inline";
                document.getElementById("read4").innerHTML = "Read more";
                d = 0;
            }
        }
    </script>
</body>

</html>