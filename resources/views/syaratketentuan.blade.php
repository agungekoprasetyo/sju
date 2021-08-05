<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MenuQren Aplikasi bisnis yang keren">
    <meta name="author" content="MenuQren">
    <meta name="keywords" content="MenuQren, menuqr, menu qr, restoran, aplikasi kasir, aplikasi cafe">
    <title>MenuQren</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/frontend/img/favicon.ico" type="image/x-icon">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/frontend/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">

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
                <a href="{{ url ('/') }}">
                    <img src="/frontend/img/logoqren.png" width="162" height="35" alt="">
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
            <ul id="top_menu">
                <li><a href="{{ route('register') }}" class="btn btn_1 gradient small d-none d-md-block" style="color: white !important">Daftar</a></li>
                <li><a href="{{ route('login') }}" class="btn btn_1 gradient small" style="color: white !important">Login</a></li>
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

                </ul>

                <div class="container">
                    <a class="btn btn_1 gradient small d-block d-md-none" style="color: white !important">Daftar</a>
                </div>

            </nav>
        </div>
    </header>
    <!-- /header -->

    <main id="home">
        <div class="hero_single inner_pages background-image" data-background="url(img/hero_submit_2.jpg)">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Syarat & Ketentuan</h1>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <div class="wave hero gray"></div>
        </div>
        <!-- /hero_single -->

        <div class="container margin_60_20" id="submit">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center add_bottom_15">
                      <h2> <strong> Persyaratan dan Ketentuan </strong> </h2>

                      <p> Selamat datang di MenuQren! </p>

                      <p> Syarat dan ketentuan ini menguraikan aturan dan ketentuan penggunaan Website MenuQren yang terletak di https://menuqren.id/. </p>
                      <p> Dengan mengakses situs web ini, kami menganggap Anda menerima syarat dan ketentuan ini. Jangan terus menggunakan MenuQren jika Anda tidak setuju untuk mengambil semua syarat dan ketentuan yang dinyatakan di halaman ini. </p>

                      <p> Terminologi berikut berlaku untuk Syarat dan Ketentuan ini, Pernyataan Privasi dan Pemberitahuan Sanggahan dan semua Perjanjian: "Klien", "Anda" dan "Milik Anda" mengacu pada Anda, orang yang masuk ke situs web ini dan mematuhi persyaratan Perusahaan dan kondisi. "Perusahaan", "Diri Kami", "Kami", "Milik Kami", dan "Kami", mengacu pada Perusahaan kami. "Pihak", "Pihak", atau "Kami", mengacu pada Klien dan diri kami sendiri. Semua istilah mengacu pada penawaran, penerimaan, dan pertimbangan pembayaran yang diperlukan untuk melakukan proses bantuan kami kepada Klien dengan cara yang paling tepat untuk tujuan yang jelas untuk memenuhi kebutuhan Klien sehubungan dengan penyediaan layanan yang dinyatakan Perusahaan, sesuai dengan dan tunduk pada, hukum yang berlaku di Indonesia. Setiap penggunaan terminologi di atas atau kata lain dalam bentuk tunggal, jamak, huruf besar dan / atau dia, dianggap dapat dipertukarkan dan oleh karena itu merujuk pada yang sama. 

                          <h3>Cookie </h3>

                          <p> Kami menggunakan penggunaan cookie. Dengan mengakses MenuQren, Anda setuju untuk menggunakan cookie sesuai dengan Kebijakan Privasi MenuQren. </p>

                          <p> Sebagian besar situs web interaktif menggunakan cookie agar kami dapat mengambil detail pengguna untuk setiap kunjungan. Cookie digunakan oleh situs web kami untuk mengaktifkan fungsionalitas area tertentu agar lebih mudah bagi orang yang mengunjungi situs web kami. Beberapa afiliasi / mitra periklanan kami juga dapat menggunakan cookie. </p>

                          <h3>License </h3>

                          <p> Kecuali dinyatakan lain, MenuQren dan / atau pemberi lisensinya memiliki hak kekayaan intelektual untuk semua materi di MenuQren. Semua hak kekayaan intelektual dilindungi. Anda dapat mengakses ini dari MenuQren untuk penggunaan pribadi Anda dengan tunduk pada batasan yang ditetapkan dalam syarat dan ketentuan ini. </p>

                          <p> Anda tidak boleh: </p>
                          <ul>
                             Terbitkan ulang materi dari MenuQren 
                             Menjual, menyewakan, atau mensublisensikan materi dari MenuQren 
                             Mereproduksi, menggandakan, atau menyalin materi dari MenuQren 
                             Mendistribusikan kembali konten dari MenuQren 
                         </ul>

                         <p> Perjanjian ini akan dimulai pada tanggal Perjanjian ini. </p>

                         <p> Bagian dari situs web ini menawarkan kesempatan bagi pengguna untuk memposting dan bertukar pendapat dan informasi di area tertentu di situs web. MenuQren tidak memfilter, mengedit, menerbitkan atau meninjau Komentar sebelum kehadiran mereka di situs web. Komentar tidak mencerminkan pandangan dan pendapat MenuQren, agen dan / atau afiliasinya. Komentar mencerminkan pandangan dan opini orang yang memposting pandangan dan opini mereka. Sejauh diizinkan oleh hukum yang berlaku, MenuQren tidak akan bertanggung jawab atas Komentar atau untuk setiap kewajiban, kerusakan atau biaya yang disebabkan dan / atau diderita sebagai akibat dari penggunaan dan / atau posting dan / atau penampilan Komentar tentang ini. situs web. </p>

                         <p> MenuQren berhak memantau semua Komentar dan menghapus Komentar apa pun yang dapat dianggap tidak pantas, menyinggung, atau menyebabkan pelanggaran Syarat dan Ketentuan ini. </p>

                         <p> Anda menjamin dan menyatakan bahwa: </p>

                         <li> Anda berhak memposting Komentar di situs web kami dan memiliki semua lisensi dan persetujuan yang diperlukan untuk melakukannya; </li>
                         <li> Komentar tidak melanggar hak kekayaan intelektual apa pun, termasuk tanpa batasan, hak cipta, paten, atau merek dagang pihak ketiga mana pun; </li>
                         <li> Komentar tidak mengandung materi yang memfitnah, memfitnah, menyinggung, tidak senonoh, atau melanggar hukum yang merupakan pelanggaran privasi </li>
                         <li> Komentar tidak akan digunakan untuk meminta atau mempromosikan bisnis atau kebiasaan atau menampilkan aktivitas komersial atau aktivitas yang melanggar hukum. </li>

                         <br>
                         <p> Anda dengan ini memberi MenuQren lisensi non-eksklusif untuk menggunakan, mereproduksi, mengedit, dan mengizinkan orang lain untuk menggunakan, mereproduksi, dan mengedit Komentar Anda dalam segala bentuk, format, atau media. </p>

                         <h3> <strong> Melakukan Hyperlink ke Konten kami </strong> </h3>

                         <p> Organisasi berikut dapat menautkan ke Situs Web kami tanpa persetujuan tertulis sebelumnya: </p>


                         <li> Lembaga pemerintah; </li>
                         <li> Mesin telusur; </li>
                         <li> Organisasi berita; </li>
                         <li> Distributor direktori daring dapat menautkan ke Situs Web kami dengan cara yang sama seperti mereka membuat pranala ke Situs Web bisnis terdaftar lainnya; dan </li>
                         <li> Bisnis Terakreditasi di seluruh sistem kecuali meminta organisasi nirlaba, pusat perbelanjaan amal, dan grup penggalangan dana amal yang mungkin tidak hyperlink ke situs web kami. </li>

                         <br>
                         <p> Organisasi-organisasi ini dapat menautkan ke beranda kami, ke publikasi atau ke informasi Situs Web lainnya selama tautan tersebut: (a) sama sekali tidak menipu; (b) tidak secara tidak langsung menyiratkan sponsor, dukungan atau persetujuan dari pihak yang menghubungkan dan produk dan / atau layanannya; dan (c) cocok dengan konteks situs pihak yang menautkan. </p>

                         <p> Kami dapat mempertimbangkan dan menyetujui permintaan tautan lain dari jenis organisasi berikut: </p>

                         <li> sumber informasi konsumen dan / atau bisnis yang umum; </li>
                         <li> situs komunitas dot.com; </li>
                         <li> asosiasi atau grup lain yang mewakili badan amal; </li>
                         <li> distributor direktori daring; </li>
                         <li> portal internet; </li>
                         <li> firma akuntansi, hukum dan konsultasi; dan </li>
                         <li> institusi pendidikan dan asosiasi perdagangan. </li>
                         <br>
                         <p> Kami akan menyetujui permintaan tautan dari organisasi-organisasi ini jika kami memutuskan bahwa: (a) tautan tersebut tidak akan membuat kami terlihat tidak menyenangkan bagi diri kami sendiri atau bisnis terakreditasi kami; (b) organisasi tidak memiliki catatan negatif apa pun dengan kami; (c) keuntungan bagi kami dari visibilitas hyperlink mengkompensasi tidak adanya MenuQren; dan (d) tautannya ada dalam konteks informasi sumber daya umum. </p>

                         <p> Organisasi-organisasi ini dapat menautkan ke beranda kami selama tautan tersebut: (a) sama sekali tidak menipu; (b) tidak secara tidak langsung menyiratkan sponsor, dukungan atau persetujuan dari pihak yang menghubungkan dan produk atau layanannya; dan (c) cocok dengan konteks situs pihak yang menautkan. </p>

                         <p> Jika Anda adalah salah satu organisasi yang tercantum dalam paragraf 2 di atas dan tertarik untuk menautkan ke situs web kami, Anda harus memberi tahu kami dengan mengirimkan email ke MenuQren. Harap sertakan nama Anda, nama organisasi Anda, informasi kontak serta URL situs Anda, daftar URL apa pun yang ingin Anda tautkan ke Situs web kami, dan daftar URL di situs kami yang ingin Anda tautkan. tautan. Tunggu 2-3 minggu untuk mendapatkan tanggapan. </p>

                         <p> Organisasi yang disetujui dapat melakukan hyperlink ke Situs web kami sebagai berikut: </p>

                         <li> Dengan menggunakan nama perusahaan kami; atau </li>
                         <li> Dengan menggunakan pencari sumber daya seragam yang ditautkan ke; atau </li>
                         <li> Dengan menggunakan deskripsi lain apa pun dari Situs web kami yang ditautkan yang masuk akal dalam konteks dan format konten di situs pihak yang menautkan. </li>

                         <br>
                         <p> Penggunaan logo MenuQren atau karya seni lain tidak akan diizinkan untuk penautan jika tidak ada perjanjian lisensi merek dagang. </p>

                         <h3>iFrames </h3>

                         <p> Tanpa persetujuan sebelumnya dan izin tertulis, Anda tidak boleh membuat bingkai di sekitar Halaman Web kami yang mengubah presentasi visual atau tampilan Situs Web kami dengan cara apa pun. </p>

                         <h3> <strong> Kewajiban Konten </strong> </h3>

                         <p> Kami tidak akan bertanggung jawab atas konten apa pun yang muncul di Situs Web Anda. Anda setuju untuk melindungi dan membela kami dari semua klaim yang muncul di Situs Web Anda. Tidak ada tautan yang muncul di Situs Web mana pun yang dapat ditafsirkan sebagai fitnah, cabul atau kriminal, atau yang melanggar, jika tidak melanggar, atau mendukung pelanggaran atau pelanggaran lain, hak pihak ketiga mana pun. </p>

                         <h3> <strong> Reservasi Hak </strong> </h3>

                         <p> Kami berhak meminta Anda menghapus semua tautan atau tautan tertentu ke Situs Web kami. Anda setuju untuk segera menghapus semua tautan ke Situs web kami atas permintaan. Kami juga berhak untuk mengubah syarat dan ketentuan ini dan itu menautkan kebijakan kapan saja. Dengan terus menautkan ke Situs web kami, Anda setuju untuk terikat dan mengikuti syarat dan ketentuan penautan ini. </p>

                         <h3> <strong> Penghapusan tautan dari situs web kami </strong> </h3>
                         <p> Jika Anda menemukan tautan apa pun di Situs Web kami yang menyinggung karena alasan apa pun, Anda bebas menghubungi dan memberi tahu kami kapan saja. Kami akan mempertimbangkan permintaan untuk menghapus tautan, tetapi kami tidak berkewajiban atau lebih atau untuk menanggapi Anda secara langsung. </p>

                         <p> Kami tidak memastikan bahwa informasi di situs web ini benar, kami tidak menjamin kelengkapan atau keakuratannya; kami juga tidak berjanji untuk memastikan bahwa situs web tetap tersedia atau bahwa materi di situs web selalu diperbarui. </p>

                         <p> Sejauh diizinkan oleh hukum yang berlaku, kami mengecualikan semua pernyataan, jaminan, dan ketentuan yang berkaitan dengan situs web kami dan penggunaan situs web ini. Tidak ada dalam penafian ini yang akan: </p>

                         <li> batasi atau kecualikan tanggung jawab kami atau Anda atas kematian atau cedera pribadi; </li>
                         <li> batasi atau kecualikan tanggung jawab kami atau Anda atas penipuan atau kesalahan penafsiran yang menipu; </li>
                         <li> batasi kewajiban kami atau Anda dengan cara apa pun yang tidak diizinkan menurut hukum yang berlaku; atau </li>
                         <li> mengecualikan salah satu kewajiban kami atau Anda yang mungkin tidak dikecualikan berdasarkan hukum yang berlaku. </li>
                         <br>

                         <p> Batasan dan larangan tanggung jawab yang ditetapkan dalam Bagian ini dan di tempat lain dalam penafian ini: (a) tunduk pada paragraf sebelumnya; dan (b) mengatur semua kewajiban yang timbul berdasarkan pelepasan tanggung jawab hukum, termasuk kewajiban yang timbul dalam kontrak, dalam wanprestasi dan untuk pelanggaran kewajiban hukum. </p>

                         <p> Selama situs web dan informasi serta layanan di situs web disediakan secara gratis, kami tidak akan bertanggung jawab atas kehilangan atau kerusakan dalam bentuk apa pun. </p>


                     </div>

                 </div>
             </div>
         </div>
     </div>

 </main>
 <!-- /main -->

 <footer id="kontak">
    <div class="wave footer"></div>
    <div class="container margin_60_40 fix_mobile">

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h3 data-target="#collapse_1">Link</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_1">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Tentang</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Syarat & ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 data-target="#collapse_3">Kontak</h3>
                <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                    <ul>
                        <li><i class="icon_house_alt"></i>Jl Telekomunikasi, Bandung Jawa Barat</li>
                        <!-- <li><i class="icon_mobile"></i>+62 22 9123</li> -->
                        <li><i class="icon_mail_alt"></i><a href="#0">menuqren@gmail.com</a></li>
                        <li><i class="icon_chat_alt"></i><a href="#0" style="border-radius: 5px;padding: 5px; background-color: coral;color: white;">Chat dengan cs kami</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="collapse dont-collapse-sm contacts" id="collapse_3">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3290274143988!2d107.6281303142121!3d-6.970454670187552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9ace29fcd5f%3A0xfa6ffa9182123965!2sBandung%20Techno%20Park!5e0!3m2!1sid!2sid!4v1619821484732!5m2!1sid!2sid" width="100%" class="map_contact" style="border:0;" allowfullscreen loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 data-target="#collapse_4">Keep in touch</h3>
                <div class="collapse dont-collapse-sm" id="collapse_4">
                    <div id="newsletter">
                        <div id="message-newsletter"></div>
                        <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                <button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="follow_us">
                        <h5>Follow Us</h5>
                        <ul>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/frontend/img/twitter_icon.svg" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/frontend/img/facebook_icon.svg" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/frontend/img/instagram_icon.svg" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/frontend/img/youtube_icon.svg" alt="" class="lazy"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <hr>
        <div class="row add_bottom_25">
            <div class="col-lg-6">
                <ul class="footer-selector clearfix">
                    <li> © MenuQren</li>

                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Privacy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
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
<!-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/608db6415eb20e09cf38732b/1f4kovsjc';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script> -->
<!--End of Tawk.to Script-->
</body>
</html>