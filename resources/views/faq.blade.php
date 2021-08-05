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
		<div class="hero_single inner_pages background-image" data-background="url()">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>FAQ</h1>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="wave hero gray"></div>
		</div>
		<!-- /hero_single -->

		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10">
				<div class="main_title center">
					<h3 style="margin-bottom: 0;">Frequently ask questions</h3>
				</div>

				<div role="tablist" class="add_bottom_15 accordion_2" id="accordion_group">
					<div class="card">
						<div class="card-header" role="tab">
							<h5>
								<a data-toggle="collapse" href="#collapseOne" aria-expanded="true"><i class="indicator icon_minus-06"></i>Apa itu MenuQren</a>
							</h5>
						</div>

						<div id="collapseOne" class="collapse show" role="tabpanel" data-parent="#accordion_group">
							<div class="card-body">
								<p>Aplikasi yang membantu owner untuk memgatur menu, monitoring pesanan dan laporan penjualan dan membantu pelanggan dalam memilih menu dan bayar tanpa harus antri.</p>
							</div>
						</div>
					</div>
					<!-- /card -->
					<div class="card">
						<div class="card-header" role="tab">
							<h5>
								<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
									<i class="indicator icon_plus"></i>Bagaimana cara menjadi premium?
								</a>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" role="tabpanel" data-parent="#accordion_group">
							<div class="card-body">
								<p>Kamu tinggal klik tombol premium dan kami akan bantu kamu. Kamu bisa juga tanya-tanya ke kami lewat fitur chat yang sudah tersedia.</p>
							</div>
						</div>
					</div>
					<!-- /card -->
					<div class="card">
						<div class="card-header" role="tab">
							<h5>
								<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
									<i class="indicator icon_plus"></i>Apa keuntungan menjadi premium?
								</a>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" role="tabpanel" data-parent="#accordion_group">
							<div class="card-body">
								<p>Selain mendapatkan fitur yang gratis, akun premium lebih lengkap dan punya fitur yang sangat menarik dan sayang buat kamu lewatkan.</p>
							</div>
						</div>
					</div>
					<!-- /card -->
				</div>
				<!-- /accordion group -->
			</div>
			<!-- /col -->
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