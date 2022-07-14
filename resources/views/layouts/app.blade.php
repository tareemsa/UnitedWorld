<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Archive</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="/front/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/front/css/responsive.css" />


    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="/front/images/header/favicon.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<style>
    .hide{
        display: none!important;
    }
    /* register_section start */

    .register_section{
        float:left;
        width:100%;
        padding-top:100px;
        padding-bottom:100px;
    }
    .register_form_wrapper{
        float:left;
        width:100%;
    }
    .register-tabs.nav-justified>.active>a,
    .register-tabs.nav-justified>.active>a:focus,
    .register-tabs.nav-justified>.active>a:hover {
        border-bottom-color: #f1f1f1;
        background-color: #fff;
        color: #4285f4;
    }
    .register_tab_wrapper .register-tabs {
        font-size: 10px;
        border-bottom: none;
        padding-top:0;
        padding-bottom:0;
        text-transform: uppercase;
    }
    .register_tab_wrapper .register-tabs>li.active {
        position: relative;
    }
    .register_tab_wrapper .register-tabs>li.active::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -5px;
        margin-left: -10px;
        border-top: 5px solid #23c0e9;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
    }
    .register_tab_wrapper .register-tabs>li>a {
        line-height: 20px;
        padding: 15px 30px;
        border: 0;
        border-radius: 0px;
        background-color: #f3f3f3;
        color: #6d6d6d;
        font-size:20px;
        text-transform:capitalize;
        transition: inherit;
        width:300px;
    }
    .register_tab_wrapper .register-tabs>li>a>span {
        font-size:14px;
        text-transform:capitalize;
        font-weight:400 !important;
    }
    .custom_input p{
        font-size:14px;
    }
    .custom_input input{
        margin: 20px 0;
    }
    .register_tab_wrapper .register-tabs>li.active>a,
    .register_tab_wrapper .register-tabs>li.active>a:focus,
    .register_tab_wrapper .register-tabs>li.active>a:hover {
        color: #fff;
        background-color: #23c0e9;
        border: 0;
    }
    .register_tab_wrapper .tab-content{
        background-color: #f9f9f9;
        padding: 30px;
        float:left;
        border:1px solid #e4e4e4;
        margin-bottom:30px;
        width:100%;
    }
    .register_tab_wrapper .nav > li{
        float:left;
    }
    .register_left_form{
        float:left;
        width:100%;
    }
    .register_left_form .column {
        padding-right: 30px;
    }
    .register_left_form .form-group {
        position: relative;
        margin-bottom: 5px;
    }

    .register_left_form .field-label i {
        float: right;
        font-size: 16px;
        color: #666;
    }

    .register_left_form .form-group .text {
        position: relative;
        color: #bbbbbb;
        font-size: 15px;
        line-height: 24px;
        margin-bottom: 5px;
    }
    .register_left_form input[type="text"],
    .register_left_form input[type="email"],
    .register_left_form input[type="password"],
    .register_left_form input[type="tel"],
    .register_left_form input[type="number"],
    .register_left_form input[type="url"],
    .register_left_form select,
    .register_left_form textarea {
        position: relative;
        display: block;
        width: 100%;
        background: #ffffff;
        text-transform:capitalize;
        font-size: 15px;
        line-height: 26px;
        color: #888888;
        padding: 12px 15px;
        border-radius:7px;
        height: 50px;
        margin-bottom: 15px;
        border: 1px solid #e0e0e0;
        transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
    }

    .register_left_form textarea {
        resize: none;
        height: 60px !important;
        padding-left: 30px;
    }
    .register_left_form .img-upload img{
        width: 180px;
        height: 180px;
    }

    .register_left_form input:focus,
    .register_left_form select:focus,
    .register_left_form textarea:focus {
        border-color: #23c0e9;
    }
    .jp_regiter_top_heading p{
        font-size:16px;
        text-transform:capitalize;
        margin-bottom:20px;
        margin-top:10px;
    }
    .check-box{
        margin-top:35px;
    }
    .checkout-page .check-box {
        line-height: 24px;
        font-size: 14px;
        font-weight: normal;
        padding-top: 5px;
    }
    .check_box_anchr{
        color:#23c0e9 !important;;
    }
    .checkout-page .check-box label {
        position: relative;
        top: -1px;
        font-weight: normal;
        padding: 0px;
        font-size: 18px;
        cursor: pointer;
        color: #333333;
    }
    .register_left_form input[type="checkbox"] + label:before{
        display:none;
    }
    .register_btn_wrapper{
        padding-top:15px;
    }
    .btm_txt_register_form{
        width: 70%;
        text-align: center;
        margin: 0px auto;
        font-size: 14px;
    }
    /* register_section end */

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
            <div class="">
                <div class=""></div>
                <div class="">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm text-center">
                                <div>

                                        <a class="text-center" href="/"><img  style="width: 12%;" src="/front/images/logo.png" alt="Logo" title="Job Pro" class="text-center img-responsive"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Header Wrapper End -->
            @yield('content')
            <!-- jp Newsletter Wrapper Start -->

                <!-- jp footer Wrapper End -->
        </main>
    </div>
    <script src="/front/js/jquery_min.js"></script>
    <script src="/front/js/bootstrap.js"></script>
    <script src="/front/js/jquery.menu-aim.js"></script>
    <script src="/front/js/jquery.countTo.js"></script>
    <script src="/front/js/jquery.inview.min.js"></script>

    <script src="/front/js/modernizr.js"></script>
    <script src="/front/js/jquery.magnific-popup.js"></script>
    <script src="/front/js/custom_II.js"></script>
</body>
</html>
