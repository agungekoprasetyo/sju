<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>MenuQren | {{ $merchant->nama }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/frontend/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/frontend/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
        href="/frontend/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="/frontend/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="/frontend/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="/frontend/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="/frontend/css/detail-page.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/frontend/css/custom.css" rel="stylesheet">

    <style>
        .img-resto {
            width: 120px;
            height: 120px;
            border-radius: 100%;
            border: 3px solid white;
        }

        @media (max-width: 768px) {
            .banner-resto {
                text-align: center;
            }

			
        }

		#logo {
				
				text-align: left !important;
			}
		a.menu_item figure {
                width: 100px;
                height: 100px;
                overflow: hidden;
                position: absolute;
                margin: 0;
                right: 2px;
                top: 2px;
                border: 1px solid #fff;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                -ms-border-radius: 3px;
                border-radius: 3px;
            }
        a.menu_item figure img {
            width: 100px;
            height: auto;
        }

    </style>

</head>

<body data-spy="scroll" data-target="#secondary_nav" data-offset="75">

    <header class="header_in clearfix">
        <div class="container">
            <div id="logo">
                <a href="{{ url('/') }}">
                    <img src="/frontend/img/logoqren.png" width="162" height="35" alt="">
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
            <ul id="top_menu">
                {{-- <li><a href="{{ route('login') }}" class="btn btn_1 gradient small"
                        style="color: white !important">List Order</a></li> --}}
                <!-- <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li> -->
            </ul>
           
          
        </div>
    </header>
    <!-- /header -->

    <main>

        <div class="hero_in detail_page background-image" data-background="url({{ Storage::url($merchant->banner) }})">
            <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">

                <div class="container">
                    <div class="main_info">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="d-md-flex align-items-center banner-resto">
                                    <div class="mb-4">
                                        <img src="{{ Storage::url($merchant->logo) }}" class="img-resto" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <h1>{{ $merchant->nama }}</h1>
                                        {{ $merchant->alamat }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /main_info -->
                </div>
            </div>
        </div>
        <!--/hero_in-->

        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul id="secondary_nav">
                    @foreach ($merchant->category as $cat)
                        <li><a class="list-group-item list-group-item-action"
                                href="#section-{{ $cat->id }}">{{ $cat->nama }}</a></li>
                    @endforeach
                  
                    <li></li>
                </ul>
            </div>
            <span></span>
        </nav>
        <!-- /secondary_nav -->

        <div class="bg_gray">
            <div class="container margin_detail">
                <div class="row">
                    <div class="col-lg-8 list_menu">
                        @foreach ($merchant->category as $category)
                            <section id="section-{{ $category->id }}">
                                <h4>{{ $category->nama }}</h4>
                                <div class="row">
                                    @foreach ($category->menu as $menu)

                                    @endforeach
                                    <div class="col-md-6">
                                        <a class="menu_item modal_dialog" href="#modal-dialog">
                                            <figure><img src="/frontend/img/menu-thumb-placeholder.jpg"
                                                    data-src="{{ Storage::url($menu->image) }}" alt="thumb"
                                                    class="lazy"></figure>
                                            <h3>{{ $menu->nama }}</h3>
                                            <p>{{ $menu->deskripsi }}</p>
                                            <strong>Rp. {{ $menu->harga }}</strong>
                                        </a>
                                    </div>

                                </div>
                                <!-- /row -->
                            </section>
                        @endforeach


                    </div>
                    <!-- /col -->
                    <div class="col-lg-4" id="sidebar_fixed">
                        <div class="box_order mobile_fixed">
                            <div class="head">
                                <h3>Pesanan Kamu</h3>
                                <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
                            </div>
                            <!-- /head -->
                            <div class="main">
                                {{-- <ul class="clearfix">
                                    <li><a href="#0">1x Enchiladas</a><span>$11</span></li>
                                    <li><a href="#0">2x Burrito</a><span>$14</span></li>
                                    <li><a href="#0">1x Chicken</a><span>$18</span></li>
                                    <li><a href="#0">2x Corona Beer</a><span>$9</span></li>
                                    <li><a href="#0">2x Cheese Cake</a><span>$11</span></li>
                                </ul>
                                <ul class="clearfix">
                                    <li>Subtotal<span>$56</span></li>
                                    <li>Delivery fee<span>$10</span></li>
                                    <li class="total">Total<span>$66</span></li>
                                </ul>
                                <div class="row opt_order">
                                    <div class="col-6">
										<div class="form-group">
											<label>Nomor Meja
												<input type="text" placeholder="isi nomor meja" name="opt_order" class="form-control w-full">
												<span class="checkmark"></span>
											</label>
										</div>
                                        
                                    </div>
                                   
                                </div> --}}
								<div class="clearfix">
                                    <div class="text-center"><small>Sorry, Merchant Belum mengaktifkan fitur pesan langsung via aplikasi</small></div>

								</div>
                                {{-- <div class="dropdown day">
                                    <a href="#" data-toggle="dropdown">Day <span id="selected_day"></span></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-content">
                                            <h4>Which day delivered?</h4>
                                            <div class="radio_select chose_day">
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="day_1" name="day" value="Today">
                                                        <label for="day_1">Today<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="day_2" name="day" value="Tomorrow">
                                                        <label for="day_2">Tomorrow<em>-40%</em></label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /people_select -->
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- /dropdown -->
                                {{-- <div class="dropdown time">
                                    <a href="#" data-toggle="dropdown">Time <span id="selected_time"></span></a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-content">
                                            <h4>Lunch</h4>
                                            <div class="radio_select add_bottom_15">
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="time_1" name="time" value="12.00am">
                                                        <label for="time_1">12.00<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_2" name="time" value="08.30pm">
                                                        <label for="time_2">12.30<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_3" name="time" value="09.00pm">
                                                        <label for="time_3">1.00<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_4" name="time" value="09.30pm">
                                                        <label for="time_4">1.30<em>-40%</em></label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /time_select -->
                                            <h4>Dinner</h4>
                                            <div class="radio_select">
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="time_5" name="time" value="08.00pm">
                                                        <label for="time_1">20.00<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_6" name="time" value="08.30pm">
                                                        <label for="time_2">20.30<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_7" name="time" value="09.00pm">
                                                        <label for="time_3">21.00<em>-40%</em></label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="time_8" name="time" value="09.30pm">
                                                        <label for="time_4">21.30<em>-40%</em></label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- /time_select -->
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- /dropdown -->
                                {{-- <div class="btn_1_mobile">
                                    <a href="#" class="btn_1 gradient full-width mb_5">Order Now</a>
                                    <div class="text-center"><small>Sorry, Merchant Belum mengaktifkan fitur pesan langsung via aplikasi</small></div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- /box_order -->
                        <div class="btn_reserve_fixed"><a href="#0" class="btn_1 gradient full-width">View Basket</a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_gray -->


    </main>
    <!-- /main -->
{{-- <x-footer/> --}}

    <div id="toTop" class="detail_page"></div><!-- Back to top button -->



    <!-- Modal item order -->
    <div id="modal-dialog" class="zoom-anim-dialog mfp-hide">
        <div class="small-dialog-header">
            <h3>Cheese Quesadilla</h3>
        </div>
        <div class="content">
            <h5>Quantity</h5>
            <div class="numbers-row">
                <input type="text" value="1" id="qty_1" class="qty2 form-control" name="quantity">
            </div>
            <h5>Size</h5>
            <ul class="clearfix">
                <li>
                    <label class="container_radio">Medium<span>+ $3.30</span>
                        <input type="radio" value="option1" name="options_1">
                        <span class="checkmark"></span>
                    </label>
                </li>
                <li>
                    <label class="container_radio">Large<span>+ $5.30</span>
                        <input type="radio" value="option2" name="options_1">
                        <span class="checkmark"></span>
                    </label>
                </li>
                <li>
                    <label class="container_radio">Extra Large<span>+ $8.30</span>
                        <input type="radio" value="option3" name="options_1">
                        <span class="checkmark"></span>
                    </label>
                </li>
            </ul>
            <h5>Extra Ingredients</h5>
            <ul class="clearfix">
                <li>
                    <label class="container_check">Extra Tomato<span>+ $4.30</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </li>
                <li>
                    <label class="container_check">Extra Peppers<span>+ $2.50</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </li>
                <li>
                    <label class="container_check">Extra Ham<span>+ $4.30</span>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </li>
            </ul>
        </div>
        <div class="footer">
            <div class="row small-gutters">
                <div class="col-md-4">
                    <button type="reset" class="btn_1 outline full-width mb-mobile">Cancel</button>
                </div>
                <div class="col-md-8">
                    <button type="reset" class="btn_1 full-width">Add to cart</button>
                </div>
            </div>
            <!-- /Row -->
        </div>
    </div>
    <!-- /Modal item order -->

    <!-- COMMON SCRIPTS -->
    <script src="/frontend/js/common_scripts.min.js"></script>
    <script src="/frontend/js/common_func.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="/frontend/js/sticky_sidebar.min.js"></script>
    <script src="/frontend/js/sticky-kit.min.js"></script>
    <script src="/frontend/js/specific_detail.js"></script>

</body>

</html>
