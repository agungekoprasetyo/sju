<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MenuQren</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            width: 100%;
            overflow-x: hidden;
        }

        .faqHeader {
            font-size: 27px;
            margin: 20px;
        }

        .panel-heading [data-toggle="collapse"]:after {
            font-family: 'Glyphicons Halflings';
            content: "e072";
            /* "play" icon */
            float: right;
            color: #F58723;
            font-size: 18px;
            line-height: 22px;
            /* rotate "play" icon from > (right arrow) to down arrow */
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .panel-heading [data-toggle="collapse"].collapsed:after {
            /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
            color: #454444;
        }

        /*.owl-theme .owl-controls .owl-page {
      display: inline-block;
      }*/
        /*   .owl-theme .owl-controls .owl-page span {
      background: none repeat scroll 0 0 #869791;
      border-radius: 20px;
      display: block;
      height: 42px;
      margin: 5px 7px;
      width: 12px;
      }*/
        /*.owl-dot{
      padding: 20px !important;
      color: blue !important;
      background-color: blue !important;
      margin: 0px 10px;
      border-radius: 20px;
      width: 20px !important;
      height: 20px !important;
      }*/
    </style>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">
    <div class="navigation">
        <nav id="navigation" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">MenuQren</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex justify-content-between" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fitur">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#harga">Harga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak</a>
                        </li>
                    </ul>
                    <div>
                        <a class="btn btn-primary btn-sm" href="{{ route('register') }}">Login</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slider w-100" style="background-color: #fc8338;color: white;height: 400px;">
                    <div class="container">
                        <div class="row align-items-center" style="height: 400px;">
                            <div class="col-md-6">
                                <h2>Gabung bersama kami!</h2>
                                <p>Membuat cafe dan restomu semakin kece dan menarik</p>
                                <a class="btn btn-primary" href="{{ route('register') }}">Daftar Sekarang!</a>
                            </div>
                            <div class="col-md-6">
                                <img src="/assets/images/banner1.png" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider w-100" style="background-color: #fc8338;color: white;height: 400px;">
                    <div class="container">
                        <div class="row align-items-center" style="height: 400px;">
                            <div class="col-12 col-md-6">
                                <h2>Mengurangi antrian</h2>
                                <p>Membuat pelanggan anda lebih santai dalam memilih menu</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <img src="/assets/images/banner3.png" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="slider w-100" style="background-color: #fc8338;color: white;height: 400px;">
                    <div class="container">
                        <div class="row align-items-center" style="height: 400px;">
                            <div class="col-12 col-md-6">
                                <h2>Mudah untuk digunakan</h2>
                                <p>Berikan kemudahan pelanggan anda dalam melihat daftar menu</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <img src="/assets/images/banner2.png" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="content">
        <section id="regist" class="py-3 pb-5">
            <div class="text-center">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="/assets/images/4354179.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-md-6">
                        <h2>Ayo, Daftar Sekarang Juga .. ! GRATIS</h2>
                        <p>Nikmati layanan Menu QR yang keren secara gratis</p>
                        <a class="btn btn-primary" href="{{ route('register') }}">Daftar Sekarang!</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="regist" class="bg-light">
            <div class="text-center">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>Pesan Menu dengan Scan QR Code</h2>
                        <p>Pilih menu kesukaanmu tanpa antri</p>
                    </div>
                    <div class="col-md-6">
                        <img src="/assets/images/3886130.png" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </section>

        <section id="regist" class="py-3 pb-5">
            <div class="text-center">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="/assets/images/Wavy_Gen-04_Single-05.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-md-6">
                        <h2>Metode Pembayaran yang mudah</h2>
                        <p>Bayar sesuai metode yang kamu pengen</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="harga">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4">Harga</h1>
            </div>

            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header" style="background-color: #fc8338;">
                            <h4 class="my-0 font-weight-normal">Free</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Rp 0 <small class="text-muted"></small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <a href="{{ route('register') }}"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Daftar Gratis Disini</button></a>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header" style="background-color: #fc8338;">
                            <h4 class="my-0 font-weight-normal">Medium</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Rp 50.000 <small class="text-muted">/ bulan</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-primary">Hubungi Kami</button>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header" style="background-color: #fc8338;">
                            <h4 class="my-0 font-weight-normal">Advance</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">Rp 100.000 <small class="text-muted">/ bulan</small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-primary">Hubungi Kami</button>
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 ">
                <h1 class="display-4 mx-auto text-center"><b>FAQ</b></h1>

                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="accordion" id="faqExample">
                            <div class="card">
                                <div class="card-header p-2" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Q: Apa itu menuQren?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                                    <div class="card-body">
                                        <b>Jawab:</b> Aplikasi yang dapat membuat outletmu tambah keren dan termonitor dan membantu pelanggan untuk memesan makanan tanpa antri dan pembayaran yang mudah
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-2" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Q: Bagaimana cara menggunakannya?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                                    <div class="card-body">
                                        <b>Jawab: </b> Hanya dengan input list makanan kamu ke aplikasi ini nanti menuQren akan generate otomatis qrcode untuk outletmu
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header p-2" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Q. Bagaimana cara berlangganan?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                                    <div class="card-body">
                                        <b>Jawab: </b> Tinggal hubungi kontak kami, menuQren siap membantu kamu
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
        </section>
        <!--/row-->
        <!--container-->



        <!-- Footer -->
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Form -->

                <!-- Section: Text -->
             
                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-12 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Kontak Kami</h5>

                            <ul class="list-unstyled mb-0">
                                <p>Email : menuqren@gmail.com</p>
                                <p>Telepon : 082115922195</p>

                                <li>
                                    <a href="{{ url('syarat') }}" class="text-white">Syarat & Ketentuan</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                    
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright: MenuQren
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>