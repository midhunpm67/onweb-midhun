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
                            <li class="scrollToLink">
                                <a href="#services">Features</a>
                            </li>
                            <li class="scrollToLink">
                                <a href="#screens">App Screens</a>

                            </li>
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
                                <div class="block-title__text"><span>Boost your web</span> <br> <span>traffic & rank</span> <br> <span>with nonid</span></div><!-- /.block-title__text -->
                            </div><!-- /.block-title -->
                            <p class="banner-one__text">Excepteur sint occaecat cupidatat non proident sunt in <br> culpa qui officia deserunt mollit lorem ipsum anim id est <br> laborum perspiciatis unde.</p><!-- /.banner-one__text -->
                            <a href="#" class="banner-one__btn">Get Started</a>
                        </div><!-- /.banner-one__content -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-one -->
		
        <section class="service-one" id="services">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__text"><span>Nodin agency can boost</span> <br> <span>up your web traffic</span></div><!-- /.block-title__text -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="service-one__single">
                            <i class="service-one__icon nonid-icon-laptop"></i>
                            <h3 class="service-one__title"><a href="#">Speed <br> Optimization</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Lorem ipsum is are <br> many variations of <br> pass of majority.</p><!-- /.service-one__text -->
                            <a href="#" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="service-one__single">
                            <i class="service-one__icon nonid-icon-presentation"></i>
                            <h3 class="service-one__title"><a href="#">Marketing <br> Analysis</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Lorem ipsum is are <br> many variations of <br> pass of majority.</p><!-- /.service-one__text -->
                            <a href="#" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="service-one__single">
                            <i class="service-one__icon nonid-icon-target"></i>
                            <h3 class="service-one__title"><a href="#">SEO and <br> Backlinks</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Lorem ipsum is are <br> many variations of <br> pass of majority.</p><!-- /.service-one__text -->
                            <a href="#" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="service-one__single">
                            <i class="service-one__icon nonid-icon-visualization"></i>
                            <h3 class="service-one__title"><a href="#">Content <br> Marketing</a></h3><!-- /.service-one__title -->
                            <p class="service-one__text">Lorem ipsum is are <br> many variations of <br> pass of majority.</p><!-- /.service-one__text -->
                            <a href="#" class="service-one__link"><i class="nonid-icon-left-arrow"></i></a>
                        </div><!-- /.service-one__single -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->
		
        <section class="cta-three">
            <img src="user/images/banner-icon-1-6.png" alt="Awesome Image" class="bubble-1" />
            <img src="user/images/banner-icon-1-4.png" alt="Awesome Image" class="bubble-2" />
            <img src="user/images/banner-icon-1-5.png" alt="Awesome Image" class="bubble-3" />
            <div class="container">
                <img src="user/images/cta-moc-1-1.png" alt="Awesome Image" class="cta-three__moc" />
                <div class="row no-gutters justify-content-end">
                    <div class="col-lg-6 col-md-12 col-sm-12 d-flex">
                        <div class="cta-three__content my-auto">
                            <div class="block-title">
                                <div class="block-title__text"><span>Powerful tools for your</span> <br> <span>customers</span></div><!-- /.block-title__text -->
                            </div><!-- /.block-title -->
                            <p class="cta-three__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><!-- /.cta-three__text -->
                            <ul class="cta-three__list">
                                <li class="cta-three__list-item"><i class="fa fa-check"></i>Refresing to get such a personal touch. </li>
                                <li class="cta-three__list-item"><i class="fa fa-check"></i>Duis aute irure dolor in reprehenderit in voluptate.</li>
                                <li class="cta-three__list-item"><i class="fa fa-check"></i>Velit esse cillum dolore eu fugiat nulla pariatur.</li>
                            </ul><!-- /.cta-three__list -->
                            <a href="#" class="cta-three__btn">Learn More</a>
                        </div><!-- /.cta-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-three -->
		
        <section class="cta-two" id="screens">
            <img src="user/images/banner-icon-1-2.png" alt="Awesome Image" class="bubble-1" />
            <img src="user/images/banner-icon-1-6.png" alt="Awesome Image" class="bubble-2" />
            <img src="user/images/banner-icon-1-3.png" alt="Awesome Image" class="bubble-3" />
            <img src="user/images/cta-moc-1-2.png" alt="Awesome Image" class="cta-two__moc" />
            <div class="container">
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-two__content">
                            <div class="block-title">
                                <div class="block-title__text"><span>Discover more new</span> <br> <span>features</span></div><!-- /.block-title__text -->
                            </div><!-- /.block-title -->
                            <div class="cta-two__feature">
                                <div class="cta-two__feature-single">
                                    <i class="nonid-icon-strategy cta-two__feature-icon"></i>
                                    <h3 class="cta-two__feature-title"><a href="#">Business <br> Strategy</a></h3><!-- /.cta-two__feature-title -->
                                </div><!-- /.cta-two__feature-single -->
                                <div class="cta-two__feature-single">
                                    <i class="nonid-icon-presentation cta-two__feature-icon"></i>
                                    <h3 class="cta-two__feature-title"><a href="#">Online <br> Marketing</a></h3><!-- /.cta-two__feature-title -->
                                </div><!-- /.cta-two__feature-single -->
                                <div class="cta-two__feature-single">
                                    <i class="nonid-icon-human-resources cta-two__feature-icon"></i>
                                    <h3 class="cta-two__feature-title"><a href="#">Consumer <br> Products</a></h3><!-- /.cta-two__feature-title -->
                                </div><!-- /.cta-two__feature-single -->
                            </div><!-- /.cta-two__feature -->
                            <p class="cta-two__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p><!-- /.cta-two__text -->
                            <a href="#" class="cta-two__btn">Learn More</a>
                        </div><!-- /.cta-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-two -->
		
        <section class="cta-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cta-one__image-wrap">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="cta-one__image">
                                        <img src="user/images/cta-1-1.png" alt="Awesome Image" />
                                    </div><!-- /.cta-one__image -->
                                    <div class="cta-one__color-box cta-one__color-box-1"></div><!-- /.cta-one__color-box -->
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <div class="cta-one__color-box cta-one__color-box-2"></div><!-- /.cta-one__color-box -->
                                    <div class="cta-one__image">
                                        <img src="user/images/cta-1-2.png" alt="Awesome Image" />
                                    </div><!-- /.cta-one__image -->
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row no-gutters -->
                        </div><!-- /.cta-one__image-wrap -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 d-flex">
                        <div class="cta-one__content my-auto">
                            <div class="block-title">
                                <div class="block-title__text"><span>Marketing experts are</span> <br> <span>ready to help you</span></div><!-- /.block-title__text -->
                            </div><!-- /.block-title -->
                            <p class="cta-one__text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p><!-- /.cta-one__text -->
                            <ul class="cta-one__list">
                                <li class="cta-one__list-item"><i class="fa fa-check"></i>Refresing to get such a personal touch. </li>
                                <li class="cta-one__list-item"><i class="fa fa-check"></i>Duis aute irure dolor in reprehenderit in voluptate.</li>
                                <li class="cta-one__list-item"><i class="fa fa-check"></i>Velit esse cillum dolore eu fugiat nulla pariatur.</li>
                            </ul><!-- /.cta-one__list -->
                            <a href="#" class="cta-one__btn">Get Started</a>
                        </div><!-- /.cta-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->
		
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
		
        <section class="testimonials-style-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="my-auto">
                            <div id="testimonials-slider-pager">
                                <div class="testi-icon">
                                    <img src="user/images/testi-qoute-1-1.png" alt="Awesome Image" />
                                </div><!-- /.testi-icon -->
                                <div class="testimonials-slider-pager-one">
                                    <a href="#" class="pager-item active" data-slide-index="0"><img src="user/images/testi-1-1.png" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="1"><img src="user/images/testi-1-2.png" alt="Awesome Image" /></a>
                                    <a href="#" class="pager-item" data-slide-index="2"><img src="user/images/testi-1-3.png" alt="Awesome Image" /></a>
                                </div><!-- /.testimonials-slider-pager-one -->
                            </div><!-- /#testimonials-slider-pager -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="block-title">
                            <div class="block-title__text"><span>What our clients are</span> <br> <span>saying</span></div><!-- /.block-title__text -->
                        </div><!-- /.block-title -->
                        <ul class="slider testimonials-slider">
                            <li class="slide-item">
                                <div class="single-testi-one">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <h3>Delila Rayam</h3>
                                </div><!-- /.single-testi-one -->
                            </li>
                            <li class="slide-item">
                                <div class="single-testi-one">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <h3>Terrilyn Werme</h3>
                                </div><!-- /.single-testi-one -->
                            </li>
                            <li class="slide-item">
                                <div class="single-testi-one">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <h3>Kyle Demayo</h3>
                                </div><!-- /.single-testi-one -->
                            </li>
                        </ul>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-style-one -->
		
        <section class="fun-fact-one">
            <img src="user/images/banner-icon-1-4.png" alt="Awesome Image" class="bubble-1" />
            <img src="user/images/banner-icon-1-2.png" alt="Awesome Image" class="bubble-2" />
            <img src="user/images/banner-icon-1-1.png" alt="Awesome Image" class="bubble-3" />
            <img src="user/images/banner-icon-1-6.png" alt="Awesome Image" class="bubble-4" />
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__text"><span>Over 2200 projects</span> <br> <span>completed</span></div><!-- /.block-title__text -->
                </div><!-- /.block-title -->
                <div class="fun-fact-one__box-wrapper">
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                                4789
                            </h3><!-- /.fun-fact-one__title -->
                            <p class="fun-fact-one__text">
                                projects
                            </p><!-- /.fun-fact-one__text -->
                        </div><!-- /.inner-block -->
                    </div><!-- /.fun-fact-one__single -->
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                                6400
                            </h3><!-- /.fun-fact-one__title -->
                            <p class="fun-fact-one__text">
                                customers
                            </p><!-- /.fun-fact-one__text -->
                        </div><!-- /.inner-block -->
                    </div><!-- /.fun-fact-one__single -->
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                                960
                            </h3><!-- /.fun-fact-one__title -->
                            <p class="fun-fact-one__text">
                                success
                            </p><!-- /.fun-fact-one__text -->
                        </div><!-- /.inner-block -->
                    </div><!-- /.fun-fact-one__single -->
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                                448
                            </h3><!-- /.fun-fact-one__title -->
                            <p class="fun-fact-one__text">
                                awards
                            </p><!-- /.fun-fact-one__text -->
                        </div><!-- /.inner-block -->
                    </div><!-- /.fun-fact-one__single -->
                </div><!-- /.fun-fact-one_box-wrapper -->
            </div><!-- /.container -->
        </section><!-- /.fun-fact-one -->
		
        <footer class="site-footer">
            <img src="user/images/banner-icon-1-1.png" alt="Awesome Image" class="bubble-1" />
            <img src="user/images/banner-icon-1-3.png" alt="Awesome Image" class="bubble-2" />
            <img src="user/images/banner-icon-1-2.png" alt="Awesome Image" class="bubble-3" />
            <img src="user/images/banner-icon-1-4.png" alt="Awesome Image" class="bubble-4" />
            <div class="site-footer__subscribe">
                <div class="container">
                    <div class="block-title text-center">
                        <div class="block-title__text"><span>Subscribe our newsletter</span> <br> <span>to get new updates</span></div><!-- /.block-title__text -->
                    </div><!-- /.block-title -->
                    <form action="#" class="site-footer__subscribe-form">
                        <input type="text" name="email" placeholder="Enter your email">
                        <button type="submit">Get Started</button>
                    </form><!-- /.subscribe-form -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__subscribe -->
            <div class="site-footer__main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget--about-widget">
                                <a href="index.html" class="footer-widget__footer-logo"><img src="user/images/logo-1-1.png" alt="Awesome Image" /></a>
                                <p>888 999 0000</p>
                                <p>needhelp@nonid.com</p>
                                <p>855 road, broklyn street <br>
                                    new york 600</p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">
                                    Explore
                                </h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__link-list">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">How It Works</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">
                                    Services
                                </h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__link-list">
                                    <li><a href="#">Speed Optimization</a></li>
                                    <li><a href="#">Marketing Analysis</a></li>
                                    <li><a href="#">SEO and Backlinks</a></li>
                                    <li><a href="#">Content Marketing</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">
                                    Links
                                </h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__link-list">
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-2 col-md-6 col-sm-12 d-flex">
                            <div class="footer-widget my-auto">
                                <div class="social-block">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div><!-- /.social-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__main-footer -->
            <div class="site-footer__bottom-footer text-center">
                <div class="container">
                    <p>&copy; copyright 2019 by <a href="#">Layerdrops.com</a></p>
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom-footer -->
        </footer><!-- /.site-footer -->
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
