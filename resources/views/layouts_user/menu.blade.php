<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adaptif.id </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('assets/img/favicon.ico') !!}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/ticker-style.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/flaticon.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/slicknav.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/animate.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/magnific-popup.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/fontawesome-all.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/themify-icons.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/slick.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/nice-select.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
</head>

<body>

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li><img src="{!! asset('assets/img/icon/header_icon1.png') !!}"
                                             alt="">{!! date("D, d M Y") !!}</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="/"><img src="{!! asset('assets/img/logo/logo.png') !!}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="{!! asset('bn.jpeg') !!}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="{!! asset('assets/img/logo/logo.png') !!}" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="#">Daerah▼</a>
                                            <ul class="submenu">
                                                @inject('daerah','App\Models\Daerah')
                                                @php $daerahs = $daerah->all();
                                                @endphp
                                                @foreach ($daerahs as $dr )
                                                    <li>
                                                        <a href="{!! route('daerah.index',$dr->id) !!}">{!! $dr->nama !!}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @inject('kategori','App\Models\kategori')
                                        @php $kategoris = $kategori->all();
                                        @endphp
                                        @foreach ($kategoris as $menu )
                                            <li>
                                                <a href="{!! route('kategori.index',$menu->id) !!}">{!! $menu->nama !!}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="{!! route('pencarian') !!}" method="post">
                                        @csrf
                                        <input type="text" name="cari" placeholder="Search">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    @yield('content')
</main>


<footer>
    @inject('about','App\Models\About')

    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                <i>Adaptif.id</i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-menu f-right">
                            @php
                                $tentangs = $about->all()
                            @endphp
                            <ul>
                                @foreach($tentangs as $tentang)
                                    <li>
                                        <a href="{!! route('tentang.index',$tentang->judul) !!}">{!! $tentang->judul !!}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="{!! asset('./assets/js/vendor/modernizr-3.5.0.min.js') !!}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{!! asset('./assets/js/vendor/jquery-1.12.4.min.js') !!}"></script>
<script src="{!! asset('./assets/js/popper.min.js') !!}"></script>
<script src="{!! asset('./assets/js/bootstrap.min.js') !!}"></script>
<!-- Jquery Mobile Menu -->
<script src="{!! asset('./assets/js/jquery.slicknav.min.js') !!}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{!! asset('./assets/js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('./assets/js/slick.min.js') !!}"></script>
<!-- Date Picker -->
<script src="{!! asset('./assets/js/gijgo.min.js') !!}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{!! asset('./assets/js/wow.min.js') !!}"></script>
<script src="{!! asset('./assets/js/animated.headline.js') !!}"></script>
<script src="{!! asset('./assets/js/jquery.magnific-popup.js') !!}"></script>

<!-- Breaking New Pluging -->
<script src="{!! asset('./assets/js/jquery.ticker.js') !!}"></script>
<script src="{!! asset('./assets/js/site.js') !!}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{!! asset('./assets/js/jquery.scrollUp.min.js') !!}"></script>
<script src="{!! asset('./assets/js/jquery.nice-select.min.js') !!}"></script>
<script src="{!! asset('./assets/js/jquery.sticky.js') !!}"></script>

<!-- contact js -->
<script src="{!! asset('./assets/js/contact.js') !!}"></script>
<script src="{!! asset('./assets/js/jquery.form.js') !!}"></script>
<script src="{!! asset('./assets/js/jquery.validate.min.js') !!}"></script>
<script src="{!! asset('./assets/js/mail-script.js') !!}"></script>
<script src="{!! asset('./assets/js/jquery.ajaxchimp.min.js') !!}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{!! asset('./assets/js/plugins.js') !!}"></script>
<script src="{!! asset('./assets/js/main.js') !!}"></script>


</body>
</html>
