<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home One || Nonid || SEO & Software Landing Page HTML Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset("user/images/favicon//apple-icon-57x57.png") }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset("user/images/favicon//apple-icon-60x60.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset("user/images/favicon//apple-icon-72x72.png")}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("user/images/favicon//apple-icon-76x76.png")}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset("user/images/favicon//apple-icon-114x114.png")}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset("user/images/favicon//apple-icon-120x120.png")}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset("user/images/favicon//apple-icon-144x144.png")}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset("user/images/favicon//apple-icon-152x152.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("user/images/favicon//apple-icon-180x180.png")}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset("user/images/favicon//android-icon-192x192.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("user/images/favicon//favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset("user/images/favicon//favicon-96x96.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("user/images/favicon//favicon-16x16.png")}}">
    <link rel="manifest" href="{{asset("user/images/favicon/manifest.json")}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset("user/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("user/css/responsive.css")}}">
</head>

<body>
    <div class="preloader"></div><!-- /.preloader -->
    <div class="page-wrapper">

    	<header class="site-header header-one">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="index.html">
                            <img src="user/images/logo-1-1.png" class="main-logo" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".header-one .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box one-page-scroll-menu ">
                            <li class="current scrollToLink">
                                <a href="#home">Home</a>
                            </li>
{{--                            <li class="scrollToLink">--}}
{{--                                <a href="#services">Features</a>--}}
{{--                            </li>--}}
{{--                            <li class="scrollToLink">--}}
{{--                                <a href="#screens">App Screens</a>--}}

{{--                            </li>--}}
                            <li class="scrollToLink">
                                <a href="#pricing">Pricing</a>
                            </li>
                            @if(Auth::user())
                            <li class="scrollToLink">
                            @if(Auth::user()->user_type != 'admin')
                                <a href="{{route('indexView')}}">{{ Auth::user()->name}}</a>
                            @else
                            <a href="{{route('indexView')}}">Admin</a>
                            @endif
                            </li>
                            <li class="scrollToLink">
                                <a href="/admin/logout">Logout</a>
                            </li>
                            @endif
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                    @if(!Auth::user())
                        <a href="/login" class="header-one__btn">Login</a>
                        <a href="/register" class="header-one__btn">Register</a>
                    @endif
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.header-one -->


        <section class="banner-one" id="home">

        	<img src="user/images/banner-icon-1-1.png" alt="Awesome Image" class="bubble-1" />
            <img src="user/images/banner-icon-1-3.png" alt="Awesome Image" class="bubble-2" />
            <img src="user/images/banner-icon-1-2.png" alt="Awesome Image" class="bubble-3" />
            <img src="user/images/banner-icon-1-4.png" alt="Awesome Image" class="bubble-4" />
            <img src="user/images/banner-icon-1-5.png" alt="Awesome Image" class="bubble-5" />
            <img src="user/images/banner-icon-1-6.png" alt="Awesome Image" class="bubble-6" />


        	<img src="user/images/banner-moc-1.png" class="banner-one__moc" alt="Awesome Image"/>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-one__content">
                            <div class="block-title">
                                <div class="block-title__text"><span>Start your website</span> <br> <span>get traffic & rank</span> <br> <span>with nonid</span></div><!-- /.block-title__text -->
                            </div><!-- /.block-title -->
                            <p class="banner-one__text">Excepteur sint occaecat cupidatat non proident sunt in <br> culpa qui officia deserunt mollit lorem ipsum anim id est <br> laborum perspiciatis unde.</p><!-- /.banner-one__text -->
                            <a href="#" class="banner-one__btn">Get Started</a>
                        </div><!-- /.banner-one__content -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-one -->


        <section class="pricing-one" id="pricing">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__text"><span>Choose pricing plans which</span> <br> <span>suits your needs</span></div><!-- /.block-title__text -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__top">
                                <h3 class="pricing-one__title">$20.00</h3>
                                <p class="pricing-one__pack">basic pack</p><!-- /.pricing-one__pack -->
                            </div><!-- /.pricing-one__top -->
                            <ul class="pricing-one__feature">
                                <li class="pricing-one__feature-item">Extra features</li>
                                <li class="pricing-one__feature-item">Lifetime free support</li>
                                <li class="pricing-one__feature-item">Upgrate options</li>
                                <li class="pricing-one__feature-item">Full access</li>
                            </ul><!-- /.pricing-one__feature -->
                            <a href="#" class="pricing-one__btn">Choose Plan</a>
                            <p class="pricing-one__note">No hidden charges!</p><!-- /.pricing-one__note -->
                        </div><!-- /.pricing-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__top">
                                <h3 class="pricing-one__title">$30.00</h3>
                                <p class="pricing-one__pack">medium pack</p><!-- /.pricing-one__pack -->
                            </div><!-- /.pricing-one__top -->
                            <ul class="pricing-one__feature">
                                <li class="pricing-one__feature-item">Extra features</li>
                                <li class="pricing-one__feature-item">Lifetime free support</li>
                                <li class="pricing-one__feature-item">Upgrate options</li>
                                <li class="pricing-one__feature-item">Full access</li>
                            </ul><!-- /.pricing-one__feature -->
                            <a href="#" class="pricing-one__btn">Choose Plan</a>
                            <p class="pricing-one__note">No hidden charges!</p><!-- /.pricing-one__note -->
                        </div><!-- /.pricing-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="pricing-one__single">
                            <div class="pricing-one__top">
                                <h3 class="pricing-one__title">$40.00</h3>
                                <p class="pricing-one__pack">premium pack</p><!-- /.pricing-one__pack -->
                            </div><!-- /.pricing-one__top -->
                            <ul class="pricing-one__feature">
                                <li class="pricing-one__feature-item">Extra features</li>
                                <li class="pricing-one__feature-item">Lifetime free support</li>
                                <li class="pricing-one__feature-item">Upgrate options</li>
                                <li class="pricing-one__feature-item">Full access</li>
                            </ul><!-- /.pricing-one__feature -->
                            <a href="#" class="pricing-one__btn">Choose Plan</a>
                            <p class="pricing-one__note">No hidden charges!</p><!-- /.pricing-one__note -->
                        </div><!-- /.pricing-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.pricing-one -->

    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->
    <script src="{{asset("user/js/jquery.js")}}"></script>
    <script src="{{asset("user/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("user/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("user/js/waypoints.min.js")}}"></script>
    <script src="{{asset("user/js/jquery.counterup.min.js")}}"></script>
    <script src="{{asset("user/js/jquery.bxslider.min.js")}}"></script>
    <script src="{{asset("user/js/jquery.easing.min.js")}}"></script>
    <script src="{{asset("user/js/theme.js")}}"></script>
</body>

</html>
