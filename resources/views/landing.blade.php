<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MenuQren Aplikasi bisnis yang keren">
    <meta name="author" content="MenuQren">
    <meta name="keywords" content="MenuQren, menuqr, menu qr, restoran, aplikasi kasir, aplikasi cafe">
    <a href='https://www.freepik.com/vectors/banner'>Banner vector created by rawpixel.com - www.freepik.com</a>
    <title>MenuQren</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/frontend/img/favicon.ico" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/frontend/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- SPECIFIC CSS -->
    <link href="/frontend/css/home.css" rel="stylesheet">
    <link href="/frontend/css/submit.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/frontend/css/custom.css" rel="stylesheet">
</head>

<body>

    <header class="header black_nav clearfix element_to_stick">
        <div class="container">
            <div id="logo">
                <a href="#">
                    <img src="/frontend/img/logo.png" width="162" height="35" alt="">
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
            <ul id="top_menu">
                <li><a href="{{ route('register') }}" class="btn btn_1  small d-none d-md-block" style="color: white !important">Daftar</a></li>
                <li><a href="{{ route('login') }}" class="btn btn_2  small" style="color: white !important">Login</a></li>
                <!-- <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li> -->
            </ul>
            <!-- /top_menu -->
            <a href="#0" class="open_close">
                <i class="icon_menu"></i><span>Menu</span>
            </a>
            <nav class="main-menu secondary_nav ">
                <div id="header_menu">
                    <a href="#0" class="open_close">
                        <i class="icon_close"></i><span>Menu</span>
                    </a>
                    <a href="#"><img src="/frontend/img/logo.svg" width="162" height="35" alt=""></a>
                </div>
                <ul id="secondary_nav">
                    <li>
                        <a href="#home">Produk</a>
                    </li>
                    <li>
                        <a href="#home">Klaim Produk</a>
                    </li>
                    <li>
                        <a href="#fitur">Artikel</a>
                    </li>
                    <li>
                        <a href="#harga">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#kontak">Kontak</a>
                    </li>
                </ul>

                <div class="container">
                    <a class="btn btn_1 gradient small d-block d-md-none" style="color: white !important">Daftar</a>
                </div>

            </nav>
        </div>
    </header>
    <!-- /header -->

    <main id="home">
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">
                <div class="owl-slide cover" style="background-image: url(img/slides/slide_home_1.jpg);">
                    <!-- /Would probably better not use LazyLoad fo the first item -->
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-end">
                                <div class="col-lg-6 static">
                                    <div class="slide-text text-right white">
                                        <h2 class="owl-slide-animated owl-slide-title">Enjoy<br>unique food</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Huge variery of food at the best price
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="grid-listing-filterscol.html" role="button">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover owl-lazy" data-src="img/slides/slide_home_2.jpg">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white">
                                        <h2 class="owl-slide-animated owl-slide-title">Discover<br>and Order</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            The best restaurants at the best price
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="grid-listing-filterscol.html" role="button">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover owl-lazy" data-src="img/slides/slide_home_3.jpg">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-12 static">
                                    <div class="slide-text text-center white">
                                        <h2 class="owl-slide-animated owl-slide-title">Enjoy<br>a friends dinner</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            The best restaurants at the best price
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="grid-listing-filterscol.html" role="button">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/owl-slide-->
                </div>
            </div>
            <div id="icon_drag_mobile"></div>
            <div class="wave hero"></div>
        </div>



        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title">
                    <span><em></em></span>
                    <h2>Merchant yang menggunakan MenuQren</h2>
                    <p>Berikut bisnis kuliner yang sudah mersakan keuntungan dari aplikasi MenuQren.</p>
                    <a href="#0">View All &rarr;</a>
                </div>
                <div class="row add_bottom_25">
                    <div class="col-lg-4">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/frontend/img/merchant1.png" data-src="/frontend/img/merchant1.png" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/frontend/img/merchant2.jpg" data-src="/frontend/img/merchant2.jpg" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/frontend/img/merchant5.jpeg" data-src="/frontend/img/merchant5.jpeg" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/frontend/img/merchant6.jpeg" data-src="/frontend/img/merchant6.jpeg" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="list_home">
                            <ul>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/frontend/img/merchant5.jpeg" data-src="/frontend/img/merchant5.jpeg" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <figure>
                                            <img src="/frontend/img/merchant6.jpeg" data-src="/frontend/img/merchant6.jpeg" alt="" class="lazy" width="350" height="233">
                                        </figure>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /bg_gray -->

        <div class="shape_element_2" id="fitur">
            <div class="container margin_60_0">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="intro_txt">
                            <div class="main_title">
                                <span><em></em></span>
                                <h2>Masih kurang?</h2>
                            </div>
                            <p class="lead">Kamu bisa explore lagi deh fitur-fitur lain yang sangat berguna dan keren banget buat ngebantu kamu jalanin usaha kuliner kamu.</p>
                            <p><a href="#0" class="btn_1 medium gradient pulse_bt mt-2">Lihat Fitur Keren lainnya</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="intro_txt">
                            <div class="main_title">
                                <span><em></em></span>
                                <h2>Masih kurang?</h2>
                            </div>
                            <p class="lead">Kamu bisa explore lagi deh fitur-fitur lain yang sangat berguna dan keren banget buat ngebantu kamu jalanin usaha kuliner kamu.</p>
                            <p><a href="#0" class="btn_1 medium gradient pulse_bt mt-2">Lihat Fitur Keren lainnya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /shape_element_2 -->
       
        <div class="bg_gray" id="harga">
            <div class="container margin_60_40">
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>Daftar Harga Berlangganan</h2>
                    <p>Berikut list layanan harga kami.</p>
                </div>
                <div class="row plans">
                    <div class="plan col-md-4">
                        <div class="plan-title">
                            <h3>Gratis</h3>
                            <p>Fitur Gratis tapi keren</p>
                        </div>
                        <p class="plan-price" style="font-size: 24px;">Rp.0</p>
                        <ul class="plan-features">
                            <li>QR Code & Online Menu</li>
                            <li>Multi Merchant</li>
                            <li>Manage Menu</li>
                            <li>Stock QR Template</li>
                        </ul>
                    </div> <!-- End col-md-4 -->

                    <div class="plan plan-tall col-md-4">
                        <div class="plan-title">
                            <h3>Paket Sultan</h3>
                            <p>Sultan udah pasti pilih paket yang memiliki fitur lebih banyak</p>
                        </div>
                        <p class="plan-price" style="font-size: 24px;">Rp.100rb</p>
                        <p>Dengan Rp.100rb/bulan <br> kamu bisa menikmati fitur-fitur berikut:</p>
                        <ul class="plan-features">
                            <li><strong>Semua</strong> fitur di paket <strong>gratis</strong> dan <strong>Premium</strong></li>
                            <li><strong>Customer</strong> Self Order</li>
                            <li><strong>Cashless</strong> Payment</li>
                            <li><strong>Integrasi</strong> Gofood & Grabfood</li>
                            <li><strong>Laporan</strong> Keuangan yang sangat lengkap</li>
                        </ul>
                    </div><!-- End col-md-4 -->

                    <div class="plan col-md-4">
                        <div class="plan-title">
                            <h3>Paket Premium</h3>
                            <p>Paket yang membuat usaha kamu makin keren</p>
                        </div>
                        <p class="plan-price" style="font-size: 24px;">Rp. 65rb</p>
                        <p>Dengan Rp.65rb/bulan <br> kamu bisa menikmati fitur-fitur berikut:</p>
                        <ul class="plan-features">
                            <li><strong>Semua</strong> fitur di paket gratis</li>
                            <li><strong>Premium</strong> support</li>
                            <li><strong>Aplikasi</strong> Kasir</li>
                            <li><strong>Custom</strong> Template QR</li>
                            <li><strong>Laporan</strong> Penjualan</li>
                        </ul>
                    </div><!-- End col-md-4 -->
                </div><!-- End row plans-->
            </div>
            <!-- /container -->
        </div>

    </main>
    <!-- /main -->

    <x-footer />
    <!--/footer-->

    {{-- <div id="toTop"></div><!-- Back to top button --> --}}

    <!-- Sign In Modal -->
    <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="modal_header">
            <h3>Login</h3>
        </div>
        <form>
            <div class="sign-in-wrapper">
                <!--   <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div> -->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                </div>
                <div class="clearfix add_bottom_15">
                    <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
                </div>
                <div class="text-center">
                    <input type="submit" value="Log In" class="btn_1 full-width mb_5">
                    Belum bergabung? <a href="#">Daftar Sekarang</a>
                </div>
                <div id="forgot_pw">
                    <div class="form-group">
                        <label>Please confirm login email below</label>
                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                </div>
            </div>
        </form>
        <!--form -->
    </div>
    <!-- /Sign In Modal -->

    <!-- COMMON SCRIPTS -->
    <script src="/frontend/js/common_scripts.min.js"></script>
    <script src="/frontend/js/common_func.js"></script>
    <script src="/frontend/js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- SPECIFIC SCRIPTS -->
    <script src="/frontend/js/sticky_sidebar.min.js"></script>
    <script src="/frontend/js/sticky-kit.min.js"></script>
    <script src="/frontend/js/specific_detail.js"></script>

    <script src="/frontend/js/typed.min.js"></script>
    <script>
        var typed = new Typed('.element', {
            strings: ["membuat usaha kuliner kamu makin keren", "membuat usaha kuliner kamu lebih mudah dikelola", "membantu customer kamu dalam memesan menu"],
            startDelay: 10,
            loop: true,
            backDelay: 2000,
            typeSpeed: 50
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/608db6415eb20e09cf38732b/1f4kovsjc';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>