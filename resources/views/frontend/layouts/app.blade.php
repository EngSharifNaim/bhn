<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>بلدية بيت حانون | الصفحة الرئيسية</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('assets/css/flexslider.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <![endif]-->
    <style>
        *, .btn{
            font-family: "STC Light";
        }
        p{
            text-align: right;
        }
        html {
            scroll-behavior: smooth;
        }
        .colorlib-logo{
            margin-bottom: 0px;
        }

    </style>
</head>
<body style="direction: rtl">
<div id="colorlib-page" style="direction: rtl">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

    @yield('content')
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight navbar-fixed-top">
        <h1 id="colorlib-logo"><a href="index.html">
                <img src="{{url('assets/images/logo.png')}}" style="width: 150px">
            </a></h1>

        <h1 id="colorlib-logo"><a href="index.html">بلدية بيت حانون</a></h1>
        <div class="colorlib-social">
            <ul>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
            </ul>
        </div>



        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="menu_link colorlib-active"><a href="{{url('/')}}">الرئيسية</a></li>
                <li><a class="menu_link" href="#news">أخبار البلدية</a></li>
                <li><a class="menu_link" href="#mayor">رئيس البلدية</a></li>
                <li><a class="menu_link" href="#majles">المجلس البلدي</a></li>
                <li><a class="menu_link" href="#departments">أقسام البلدية</a></li>
                <li><a class="menu_link" href="#projects">مشاريع البلدية</a></li>
                <li><a class="menu_link" href="blog.html">الخدمات الإلكترونية</a></li>
                <li><a class="menu_link" href="#contact">اتصل بنا</a></li>
            </ul>
        </nav>

        <div class="colorlib-footer">
            <p><small>
                <script>document.write(new Date().getFullYear());</script> جميع الحقوق محفوظة لدى بلدية بيت حانون </i>
                </p>
        </div>

    </aside>

</div>

<!-- jQuery -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>
<!-- Sticky Kit -->
<script src="{{asset('assets/js/sticky-kit.min.js')}}"></script>
<!-- Owl carousel -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Counters -->
<script src="{{asset('assets/js/jquery.countTo.js')}}"></script>


<!-- MAIN JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.menu_link').on('click', function () {
            $(this).addClass('colorlib-active')
        })
    }
</script>
</body>
</html>

