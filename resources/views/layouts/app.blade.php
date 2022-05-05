<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Career</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="front/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="front/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="front/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="front/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="front/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="front/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="front/css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="front/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="front/css/style.css" />
    <link rel="stylesheet" type="text/css" href="front/css/responsive.css" />


    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="front/images/header/favicon.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<style>
    /* login_section start */

    .login_section{
        width:100%;
        float:left;
    }
    .login_form_wrapper{
        float:left;
        width: 100%;
        padding-top:100px;
        padding-bottom:100px;
    }
    .login_form_wrapper h1{
        font-size:30px;
        text-align:center;
        font-weight:600;
        text-transform:uppercase;
        margin-bottom:30px;
    }
    .login_wrapper{
        float:left;
        width: 100%;
        background:#f7f7f7;
        padding:50px;
        margin-bottom:20px;
    }
    .login_wrapper a.btn {
        color: #fff;
        width: 100%;
        height: 50px;
        padding: 6px 25px;
        line-height: 36px;
        margin-bottom:20px;
        text-align:left;
        border-radius:8px;
        background: #23c0e9;
        font-size: 16px;
        border: 1px solid #23c0e9;
    }
    .login_wrapper a.btn:hover {
        background-color: #00b5e4;
        border-color: #00b5e4;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }
    .login_wrapper button.btn {
        color: #fff;
        width: 100%;
        height: 50px;
        padding: 6px 25px;
        line-height: 36px;
        margin-bottom:20px;
        text-align:left;
        border-radius:8px;
        background: #23c0e9;
        font-size: 16px;
        border: 1px solid #23c0e9;
    }
    .login_wrapper button.btn:hover {
        background-color: #00b5e4;
        border-color: #00b5e4;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }
    .login_wrapper a span{
        float:left;
    }
    .login_wrapper a i {
        float: right;
        margin: 0;
        line-height: 35px;
    }
    .login_wrapper a.google-plus{
        background: #db4c3e;
        border: 1px solid #db4c3e;
    }
    .login_wrapper a.google-plus:hover{
        background: #bd4033;
        border-color:#bd4033;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }
    .login_wrapper h2 {
        font-size: 18px;
        font-weight:500;
        margin-bottom:20px;
        color:#111;
        line-height: 20px;
        text-transform: uppercase;
        text-align:center;
        position: relative;
    }
    .login_wrapper h2::before, .login_wrapper h2::after {
        content: "";
        background: #e4e4e4;
        width: 100px;
        height: 1px;
        position: absolute;
        top: 50%;
    }
    .login_wrapper h2::before {
        right: 60%;
    }
    .login_wrapper h2::after {
        left: 60%;
    }
    .login_wrapper .form-control {
        height: 53px;
        padding: 15px 20px;
        font-size: 14px;
        line-height: 24px;
        border: 1px solid #f1f1f1;
        border-radius: 8px;
        box-shadow: none;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        background-color: #fff;
    }
    .login_wrapper textarea.form-control{
        height:auto;
        resize:none;
    }
    .login_wrapper input::placeholder, .login_wrapper textarea::placeholder {
        color: #999;
    }
    .login_wrapper .form-control:focus {
        color: #999;
        background-color: fafafa;
        border: 1px solid #23c0e9 !important;
    }
    .login_wrapper  .formsix-pos,.formsix-e{
        position: relative;
    }
    .login_wrapper .form-group.i-password:after, .form-group.i-email:after{
        position: absolute;
        top: 13px;
        font-size: 16px;
        font-family: "FontAwesome";
        color: #c0c0c0;
    }
    .form-group .field-icon{
        float: right;
        left: -15px;
        margin-top: -50px;
        position: relative;
        z-index: 2;
    }
    .login_wrapper .form-group.i-email:after{
        content: "\f0e0";
        right: 25px;
    }
    .login_wrapper .form-group.i-password:after{
        content: "\f09c";
        right: 25px;
    }
    .login_remember_box{
        margin-top:30px;
        margin-bottom:30px;
        color:#999;
    }
    .login_remember_box .control {
        position: relative;
        padding-left:20px;
        cursor: pointer;
        font-size: 14px;
        line-height:14px;
        font-weight: 500;
        margin:0;
    }
    .login_remember_box .control input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }
    .login_remember_box .control__indicator {
        position: absolute;
        top: 0;
        left: 0;
        width: 13px;
        height: 13px;
        background: #fff;
        border: 1px solid #999;
    }
    .login_remember_box .control__indicator:after {
        content: '';
        position: absolute;
        display: none;
    }
    .login_remember_box .control input:checked ~ .control__indicator:after {
        display: block;
    }
    .login_remember_box .control--checkbox .control__indicator:after {
        left: 4px;
        top: 0;
        width: 5px;
        height: 10px;
        border: solid #111;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }
    .login_remember_box .forget_password{
        float:right;
        color:#db4c3e;
        font-size:14px;
        text-decoration:underline;
    }
    .login_btn_wrapper{
        padding-bottom:20px;
        margin-bottom:30px;
        border-bottom:1px solid #e4e4e4;
    }
    .login_btn_wrapper a.login_btn {
        text-align:center;
        text-transform:uppercase;
    }
    .login_btn_wrapper a.login_btn:hover {
        background-color: #00b5e4;
        border-color: #00b5e4;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }
    .login_btn_wrapper button.login_btn {
        text-align:center;
        text-transform:uppercase;
        width: 100%;
    }
    .login_btn_wrapper button:focus{
        box-shadow: none;
        border: none;
        border-color: transparent;
    }
    .login_btn_wrapper button.login_btn:hover{
        background-color: #00b5e4;
        border-color: #00b5e4;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
    }
    .login_message p{
        text-align:center;
        font-size:16px !important;
        margin:0;
    }
    .login_message a{
        color:#23c0e9;
    }
    .login_form_wrapper p{
        width:70%;
        text-align:center;
        margin:0px auto;
        font-size:14px;
    }

    /* login_section end */
</style>
</head>
<body>
    <div id="app">


        <main class="py-4">
            <!-- preloader Start -->

            <!-- Top Scroll End -->
            <!-- Header Wrapper Start -->
            <div class="jp_top_header_img_wrapper">
                <div class="jp_slide_img_overlay"></div>
                <div class="gc_main_menu_wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                                <div class="gc_header_wrapper">
                                    <div class="gc_logo">
                                        <a href="index.html"><img src="front/images/header/logo.png" alt="Logo" title="Job Pro" class="img-responsive"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 center_responsive">
                                <div class="header-area hidden-menu-bar stick" id="sticker">
                                    <!-- mainmenu start -->
                                    <div class="mainmenu">
                                        <div class="gc_right_menu">
                                            <ul>
                                                <li id="search_button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g><path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#23c0e9"/></g></svg>
                                                </li>
                                                <li>
                                                    <div id="search_open" class="gc_search_box">
                                                        <input type="text" placeholder="Search here">
                                                        <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="float_left">
                                            <li class="gc_main_navigation"><a href="/" class="gc_main_navigation">  {{ __('app.home') }}&nbsp;</a>
                                                <!-- mega menu start -->

                                            </li>
                                            <li class="gc_main_navigation"><a href="/jobs" class="gc_main_navigation"> {{ __('app.jobs') }}  </a>
                                            </li>
                                            <li class="parent gc_main_navigation"><a href="#" class="gc_main_navigation"> {{ __('app.company') }}  &nbsp;</a></li>
                                            <li class="parent gc_main_navigation"><a href="#" class="gc_main_navigation">{{ __('app.candidate') }} </a></li>
                                            <li class="gc_main_navigation"><a href="#" class="gc_main_navigation">  {{ __('app.about_us') }}</a></li>
                                            <li class="gc_main_navigation parent"><a href="contact.html" class="gc_main_navigation">{{ __('app.contact_us')}}</a></li>

                                            <li class="has-mega gc_main_navigation">
                                                <a class="gc_main_navigation" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ Config::get('languages')[App::getLocale()] }} <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul  aria-labelledby="navbarDropdownMenuLink">
                                                    @foreach (Config::get('languages') as $lang => $language)
                                                        @if ($lang != App::getLocale())
                                                            <li class="parent">  <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- mainmenu end -->
                                    <!-- mobile menu area start -->
                                    <header class="mobail_menu">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6">
                                                    <div class="gc_logo">
                                                        <a href="index.html"><img src="front/images/header/logo.png" alt="Logo" title="Grace Church"></a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6">
                                                    <div class="cd-dropdown-wrapper">
                                                        <a class="house_toggle" href="#0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#ffffff"/></g></g></svg>
                                                        </a>
                                                        <nav class="cd-dropdown">
                                                            <h2><a href="#">Job<span>Pro</span></a></h2>
                                                            <a href="#0" class="cd-close">Close</a>
                                                            <ul class="cd-dropdown-content">
                                                                <li>
                                                                    <form class="cd-search">
                                                                        <input type="search" placeholder="Search...">
                                                                    </form>
                                                                </li>
                                                                <li class="">
                                                                    <a href="/">Home</a>
                                                                </li>


                                                                <li class="has-children">
                                                                    <a href="#">Listing</a>

                                                                    <ul class="cd-secondary-dropdown is-hidden">
                                                                        <li class="go-back"><a href="#0">Menu</a></li>
                                                                        <li>
                                                                            <a href="listing_left.html">listing-Left</a>
                                                                        </li>
                                                                        <!-- .has-children -->

                                                                        <li>
                                                                            <a href="listing_right.html">listing-Right</a>
                                                                        </li>
                                                                        <!-- .has-children -->

                                                                        <li>
                                                                            <a href="listing_single.html">listing-Single</a>
                                                                        </li>
                                                                        <!-- .has-children -->

                                                                    </ul>
                                                                    <!-- .cd-secondary-dropdown -->
                                                                </li>
                                                                <!-- .has-children -->
                                                                <li class="has-children">
                                                                    <a href="#">candidates</a>

                                                                    <ul class="cd-secondary-dropdown is-hidden">
                                                                        <li class="go-back"><a href="#0">Menu</a></li>
                                                                        <li><a href="company_listing.html">Company-Listing</a></li>
                                                                        <li><a href="company_listing_single.html">Company-Single</a></li>
                                                                        <li><a href="candidate_listing.html">candidate-Listing</a></li>
                                                                        <li><a href="candidate_profile.html">candidate-Profile</a></li>
                                                                        <!-- .has-children -->

                                                                    </ul>
                                                                    <!-- .cd-secondary-dropdown -->
                                                                </li>
                                                                <li class="has-children">
                                                                    <a href="#">Pages</a>

                                                                    <ul class="cd-secondary-dropdown is-hidden">
                                                                        <li class="go-back"><a href="#0">Menu</a></li>
                                                                        <li><a href="about.html">About-Us</a></li>
                                                                        <li><a href="add_postin.html">Add-Posting</a></li>
                                                                        <!-- .has-children -->

                                                                    </ul>
                                                                    <!-- .cd-secondary-dropdown -->
                                                                </li>
                                                                <!-- .has-children -->
                                                                <li class="has-children">
                                                                    <a href="#">Blog</a>

                                                                    <ul class="cd-secondary-dropdown is-hidden">
                                                                        <li class="go-back"><a href="#0">Menu</a></li>
                                                                        <li>
                                                                            <a href="blog_left.html">Blog-Left</a>
                                                                        </li>
                                                                        <!-- .has-children -->

                                                                        <li>
                                                                            <a href="blog_right.html">Blog-Right</a>
                                                                        </li>
                                                                        <!-- .has-children -->

                                                                        <li>
                                                                            <a href="blog_single_left.html">Blog-Single-Left</a>
                                                                        </li>
                                                                        <!-- .has-children -->

                                                                        <li>
                                                                            <a href="blog_single_right.html">Blog-Single-Left</a>
                                                                        </li>
                                                                        <!-- .has-children -->

                                                                    </ul>
                                                                    <!-- .cd-secondary-dropdown -->
                                                                </li>
                                                                <!-- .has-children -->
                                                                <li>
                                                                    <a href="contact.html">Contact</a>
                                                                </li>
                                                                <li>
                                                                    <a href="register.html">Sign Up</a>
                                                                </li>
                                                                <li>
                                                                    <a href="login.html">Login</a>
                                                                </li>

                                                            </ul>
                                                            <!-- .cd-dropdown-content -->



                                                        </nav>
                                                        <!-- .cd-dropdown -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .cd-dropdown-wrapper -->
                                    </header>
                                </div>
                            </div>
                            <!-- mobile menu area end -->
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                <div class="jp_navi_right_btn_wrapper">


                                    @guest

                                    <ul>
                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}"><i class="fa fa-user"></i>&nbsp; {{ __('app.register') }}</a></li>
                                        @endif
                                        @if (Route::has('login'))
                                        <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i>&nbsp; {{ __('app.login') }}</a></li>
                                        @endif
                                    </ul>
                                    @else
                                        <ul>
                                            <li><a style="background:#23C0E9;">{{ Auth::user()->name }}</a></li>
                                            <li> <a  href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('app.logout') }}
                                                </a></li>
                                        </ul>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @endguest
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Header Wrapper End -->
            @yield('content')
            <!-- jp Newsletter Wrapper Start -->
                <div class="jp_main_footer_img_wrapper">
                    <div class="jp_newsletter_img_overlay_wrapper"></div>
                    <div class="jp_newsletter_wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="jp_newsletter_text">
                                        <img src="front/images/content/news_logo.png" class="img-responsive" alt="news_logo" />
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="jp_newsletter_field">
                                        <i class="fa fa-envelope-o"></i><input type="text" placeholder="Enter Your Email"><button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- jp Newsletter Wrapper End -->
                    <!-- jp footer Wrapper Start -->
                    <div class="jp_footer_main_wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="jp_footer_logo_wrapper">
                                        <div class="jp_footer_logo">
                                            <a href="#"><img src="front/images/header/logo.png" alt="footer_logo"/></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="jp_footer_three_sec_main_wrapper">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="jp_footer_first_cont_wrapper">
                                            <div class="jp_footer_first_cont">
                                                <h2>Who We Are</h2>
                                                <p>This is Photoshop's version of Lom Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum.<br><br> Proin akshay handge vel velit auctor aliquet. Aenean sollicitudin,</p>
                                                <ul>
                                                    <li><i class="fa fa-plus-circle"></i> <a href="#">READ MORE</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper2">
                                            <div class="jp_footer_candidate">
                                                <h2>For candidate</h2>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Add a Resume</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> candidate Dashboard</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Past Applications</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My Account</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Your Jobs</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">
                                            <div class="jp_footer_candidate">
                                                <h2>For Employers</h2>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Browse candidates</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Employer Dashboard</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Add Job</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Work Process</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> My Account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">
                                            <div class="jp_footer_candidate">
                                                <h2>Information</h2>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Terms & Conditions</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Policy</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Careers with Us</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="jp_bottom_footer_Wrapper">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="jp_bottom_footer_left_cont">
                                                    <p>© 2022 Career. All Rights Reserved.</p>
                                                </div>
                                                <div class="jp_bottom_top_scrollbar_wrapper">
                                                    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="jp_bottom_footer_right_cont">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- jp footer Wrapper End -->
        </main>
    </div>
</body>
</html>
