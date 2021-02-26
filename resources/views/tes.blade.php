<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIPAKAR NARKOBA</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('etrain/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('etrain/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('etrain/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('etrain/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('etrain/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('etrain/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('etrain/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('etrain/css/style.css')}}">
</head>

<?php
$connect = mysqli_connect("localhost","root","","db_spnarkoba");
    // mencari kode barang dengan nilai paling besar
$query = "SELECT max(id) as maxKode FROM pasien";
$hasil = mysqli_query($connect,$query);
$datapas = mysqli_fetch_array($hasil);
$id_pas = $datapas['maxKode'];

$noUrut = (int) substr($id_pas, 3, 3);

$noUrut++;

$char = "PAS";
$id_pas = $char . sprintf("%03s", $noUrut);
?>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset ('etrain/img/logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="#banner">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jenis">Jenis Narkoba</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#narkoba">Tentang Narkoba</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#konsultasi">Jumlah Konsultasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pakar">Sistem Pakar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
</header>
<!-- Header part end-->

<!-- banner part start-->
<section class="banner_part" id="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h2 style="text-align: justify;">SISTEM PAKAR DIAGNOSA DINI PENGGUNA NARKOBA DAN JENISNYA MENGGUNAKAN METODE CERTAINTY FACTOR DAN FORWARD CHAINING BERBASIS WEB</h2>
                        <p style="text-align: justify;">Pada pembangunan “Sistem Pakar Diagnosa Dini Pengguna Narkoba Dan Jenisnya Menggunakan Metode Certainty Factor dan Forward Chaining berbasis web“ ini memerlukan dua metode yang akan digunakan dalam pengembangan sistem ini.</p>
                        <button type="button"  data-toggle="modal" data-target="#createModalLong" class="btn_1">MULAI KONSULTASI</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section id="jenis" class="feature_part">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xl-4 align-self-center">
                <div class="single_feature_text ">
                    <h2>Jenis <br> Narkoba</h2>
                    <p style="text-align: justify;">Istilahah NARKOBA sesuai dengan Surat Edaran Badan Narkotika Nasional (BNN) No. SE atau 03 atau IV atau 2002 merupakan akronim dari NARkotika, psiKOtropika, dan Bahan Adiktif lainnya. Narkoba yaitu zat-zat alami maupun kimiawi yang jika dimasukan kedalam tubuh dapat mempengaruhi pikiran, suasana hati dan pikiran seseorang serta dapat merusak susunan syaraf otak</p>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-layers"></i></span>
                        <h4>Kokain</h4>
                        <p style="text-align: justify;">Kokain adalah jenis narkoba yang berasal dari tanaman Erythroxylon coca, dari Amerika Selatan. Daun tanaman ini biasanya dimanfaatkan untuk mendapatkan efek stimulan, yaitu dengan cara dikunyah. Kokain dapat memicu metabolisme sel menjadi sangat cepat</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                        <h4>Ganja</h4>
                        <p style="text-align: justify;">Ganja, yang bernama lain Cannabis sativa syn. Cannabis Indica, adalah tumbuhan budidaya yang menghasilkan serat dan kandungan zat narkotika pada bijinya. Narkoba jenis ini dapat membuat pemakainya mengalami euforia, yaitu rasa senang berkepanjangan tanpa sebab</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                        <h4>Ekstasi</h4>
                        <p style="text-align: justify;">Ekstasi merupakan obat golongan psikotropik yang paling populer. Efeknya sebagai antidepresi yaitu untuk mengatasi tekanan mental dengan memanfaatkan efek eforianya (menimbulkan kegembiraan)</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-spray"></i></span>
                        <h4>Heroin atau Putaw</h4>
                        <p style="text-align: justify;">Heroin atau putaw adalah narkoba yang diproses dari morfin, yaitu zat alami dari ekstrak benih biji tanaman poppy varietas tertentu. Menurut hasil survey BNN, Heroin merupakan jenis narkoba peringkat ke-4 yang paling banyak dikonsumsi di Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-save-alt"></i></span>
                        <h4>Metamfetamina</h4>
                        <p style="text-align: justify;">Metamfetamina, disingkat met, dan dikenal di Indonesia sebagai sabu-sabu, adalah obat psikostimulansia dan simpatomimetik. Obat ini dipergunakan untuk kasus parah gangguan hiperaktivitas kekurangan perhatian atau narkolepsi dengan nama dagang Desoxyn, tetapi juga disalahgunakan sebagai narkotika.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-unlink"></i></span>
                        <h4>Halusinogen</h4>
                        <p style="text-align: justify;">Halusinogen adalah salah satu golongan narkotika yang mampu mendistorsi persepsi realita bagi penggunanya. Pemakai halusinogen akan berhalusinasi, seperti melihat gambar atau warna tertentu, mendengar suara-suara, dan merasakan sensasi yang sebenarnya tidak ada.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-bookmark-alt"></i></span>
                        <h4>Amfetamin</h4>
                        <p style="text-align: justify;">Amfetamin merupakan salah satu zat kimia berbahaya yang dapat menyebabkan kecanduan. Meskipun demikian amfetamin juga digunakan untuk pengobatan.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-paint-roller"></i></span>
                        <h4>Petidin</h4>
                        <p style="text-align: justify;">Petidin adalah obat esensial untuk analgetik narkotik yang tercantum dalam Daftar Obat Esensial Nasional 2013 dan Formularium Nasional 2013. Obat esensial adalah obat pilihan yang paling dibutuhkan untuk pelayanan kesehatan yang diupayakan tersedia pada fasilitas pelayanan kesehatan sesuai fungsi dan tingkatannya.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-paint-bucket"></i></span>
                        <h4>Kodein</h4>
                        <p style="text-align: justify;">Kodein adalah alkaloid terkandung dalam opium sebesar 0,7- 2,5%, selain itu alkaloid kodein juga ditemukan dalam opioid sekitar 0,3- 3,0%. Kodein merupakan obat analgesik golongan opium yang biasa digunakan untuk penghilang rasa nyeri dari sedang hingga berat. Kodein merupakan obat yang paling banyak digunakan dikalangan praktisi kesehatan</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single_feature">
                    <div class="single_feature_part single_feature_part_2">
                        <span class="single_service_icon style_icon"><i class="ti-brush-alt"></i></span>
                        <h4>Morfin</h4>
                        <p>Morfin adalah obat yang digunakan untuk mengatasi rasa sakit dengan intensitas sedang hingga parah, seperti nyeri pada kanker atau serangan jantung. Untuk mengatasi nyeri, morfin dapat dikonsumsi sebagai obat tunggal atau dikombinasikan dengan obat pereda nyeri lainnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- learning part start-->
<section class="learning_part" id="narkoba">
    <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
            <div class="col-md-7 col-lg-7">
                <div class="learning_img">
                    <img src="etrain/img/learning_img.png" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="learning_member_text">
                    <h5>Tentang</h5>
                    <h2>Narkoba</h2>
                    <p style="text-align: justify;">Narkoba merupakan singkatan dari Narkotika,Psikotropika dan bahan adiktif lainnya,narkoba merupakan zat atau obat yang sangat buruk bagi kesehatan tubuh,hilangnya kesadaran bahkan dapat menyebabkan kematian jika disalahgunakan atau pemakaian secara berlebihan. Narkoba yang tingginya kematian disebabkan oleh overdosis atau komplikasi penyakit.</p>
                    <ul>
                        <li><span class="ti-pencil-alt"></span><p style="text-align: justify;">Narkoba yang sebenernya mempunyai peran yang luar biasa pada bidang medis,bisa memberikan dampak yang luar biasa buruk apabila disalahgunakan.</p></li>
                        <li><span class="ti-ruler-pencil"></span><p style="text-align: justify;">Zat aktif dalam narkoba dapat bereaksi negative pada tubuh,akibat terparah karena kandungan kimia narkoba adalah adanya perubahan kejiwaan serta dapat menyebabkan kematian</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->

<!-- member_counter counter start -->
<section class="member_counter" id="konsultasi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="single_member_counter">
                    <span class="counter">{{$pasiencount}}</span>
                    <h4>Jumlah Konsultasi</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- member_counter counter end -->

<!-- learning part start-->
<section class="advance_feature learning_part" id="pakar">
    <div class="container">
        <div class="row align-items-sm-center align-items-xl-stretch">
            <div class="col-md-6 col-lg-6">
                <div class="learning_member_text">
                    <h5>Sistem Pakar</h5>
                    <h2>Apa Itu Sistem Pakar?</h2>
                    <p style="text-align: justify;">Istilah sistem pakar berasal dari istilah Knowledge-based expert syistem. istilah ini muncul karena untuk memecahkan masalah, sistem pakar menggunakan pengetahuan seorang pakaryang dimasukkan kedalam  komputer.  Seorang  yang  bukan  pakar  menggunakan  sistem  pakar  untuk  meningkatkan kemampuan   pemecahan   masalah,   sedangkan   seorang   pakar   menggunakan   sistem   pakar   untuk knowledge assistant.</p>
                    <p  style="text-align: justify;">Sistem pakar adalah sebuah sistem yang menggunakan kemampuan manusia dimana pengetahuan tersebut  dimasukkan  kedalam  sebuah  komputer  dan  kemudian  digunakan  untuk  menyelesaikan masalah-masalah yang biasanya membutuhkan kepakaran atau keahlian manusia</p>
                    <div class="row">
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <div class="learning_member_text_iner">
                                <span class="ti-pencil-alt"></span>
                                <h4>Ghozali & Eviyanti, 2016</h4>
                                <p  style="text-align: justify;">Sistem pakar merupakan aplikasi yang berbasis komputer serta diharapkan dapat memecahkan suatu permasalahan layaknya permasalahan yang hanya dapat diselesaikan oleh pakar yang ahli pada bidang tertentu yang dimana permasalahan tersebut tidak dapat diselesaikan oleh orangorang awam</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6">
                            <div class="learning_member_text_iner">
                                <span class="ti-stamp"></span>
                                <h4>Ignizio, 1991</h4>
                                <p  style="text-align: justify;">Sistem pakar adalah model dan prosedur yang berkaitan dalam suatu domain tertentu, yang mana tingkat keahlianya dapat dibandingkan dengan keahlian seorang pakar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="learning_img">
                    <img src="etrain/img/advance_feature_img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- learning part end-->
<div class="modal fade" id="createModalLong" tabindex="-1" role="dialog" aria-labelledby="createModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLongTitle">Masukan data diri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('submit_pasien.store')}}" method="POST">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id">ID Pasien</label>
                        <input name="id" type="text" class="form-control" id="id" aria-describedby="emailHelp" value="<?= $id_pas?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" required oninvalid="this.setCustomValidity('Nama Harus Terisi')" oninput="setCustomValidity('')">
                    </div>

                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input name="umur" type="number" class="form-control" id="umur" aria-describedby="emailHelp" placeholder="Umur" required oninvalid="this.setCustomValidity('Umur Harus Terisi')" oninput="setCustomValidity('')">
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <br>
                        <div class="form-check">
                            <input value="Laki-laki" class="form-check-input" type="radio" name="jenis_kelamin" checked>
                            <label class="form-check-label mr-4">Laki-laki</label>

                            <input value="Perempuan" class="form-check-input" type="radio" name="jenis_kelamin">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                        <div class="form-check">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" aria-describedby="emailHelp" placeholder="Pekerjaan" required oninvalid="this.setCustomValidity('Pekerjaan Harus Terisi')" oninput="setCustomValidity('')">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Alamat pasien" required oninvalid="this.setCustomValidity('Alamat Harus Terisi')" oninput="setCustomValidity('')"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- footer part start-->
<footer class="footer-area" id="contact">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                    <p>But when shot real her. Chamber her one visite removal six
                    sending himself boys scot exquisite existend an </p>
                    <p>But when shot real her hamber her </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                    </p>
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Enter email address'
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter email address'">
                                <div class="input-group-append">
                                    <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-facebook"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-instagram"></i> </a>
                        <a href="#"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                        <p><span> Phone :</span> +2 36 265 (8060)</p>
                        <p><span> Email : </span>info@colorlib.com </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('etrain/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('etrain/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('etrain/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('etrain/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('etrain/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('etrain/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('etrain/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('etrain/js/jquery.nice-select.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('etrain/js/slick.min.js')}}"></script>
    <script src="{{asset('etrain/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('etrain/js/waypoints.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('etrain/js/custom.js')}}"></script>
</body>

</html>