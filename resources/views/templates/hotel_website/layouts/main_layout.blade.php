<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Babette" />
    <link href="/template_files/hotel_website/images/favicon/favicon.png" rel="icon" />
    <title>{{ $page_data["page_title"] }}</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Kristi%7cPoppins:400,500,600,700%7cYeseva+One&display=swap" />
    <link rel="stylesheet" href="/template_files/hotel_website/css/libraries.css" />
    <link rel="stylesheet" href="/template_files/hotel_website/css/style.css" />
</head>

<body>
    <div class="wrapper">
        <!-- =========================
 Header
 =========================== -->
        <header class="header header-transparent header-layout1">
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="/template_files/hotel_website/images/logo/logo-light.png"
                            class="logo-light" alt="logo" />
                        <img src="/template_files/hotel_website/images/logo/logo-dark.png"
                            class="logo-dark" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item with-dropdown">
                                <a href="#" data-toggle="dropdown"
                                    class="dropdown-toggle nav__item-link active">Home</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="index.html" class="nav__item-link">Home page 1</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="home-2.html" class="nav__item-link">Home page 2</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="home-3.html" class="nav__item-link">Home page 3</a>
                                    </li>
                                    <!-- /.nav-item -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">About</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="our-story.html" class="nav__item-link">our story</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="our-chefs.html" class="nav__item-link">Our chefs</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="our-guestbook.html" class="nav__item-link">Our Guestbook</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="contacts.html" class="nav__item-link">Contact Us</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="events.html" class="nav__item-link">Events</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="event-single.html" class="nav__item-link">Event Single</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="faqs.html" class="nav__item-link">FAQs</a>
                                    </li>
                                    <!-- /.nav-item -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Menu</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="menu-classic.html" class="nav__item-link">Menu Classic</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="menu-mixed.html" class="nav__item-link">Menu Mixed</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="menu-board.html" class="nav__item-link">Menu Board</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="menu-gallery.html" class="nav__item-link">Menu Gallery</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="menu-cards.html" class="nav__item-link">Menu Card</a>
                                    </li>
                                    <!-- /.nav-item -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Gallery</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="gallery-grid.html" class="nav__item-link">Gallery grid</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="gallery-fullwidth.html" class="nav__item-link">Gallery Fullwidth</a>
                                    </li>
                                    <!-- /.nav-item -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="blog-carousel.html" class="nav__item-link">blog carousel</a>
                                    </li>
                                    <li class="nav__item dropdown-submenu">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Blog
                                            Grid</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav__item">
                                                <a href="blog-grid-sidebar.html" class="nav__item-link">Grid Sidebar</a>
                                            </li>
                                            <!-- /.nav-item -->
                                            <li class="nav__item">
                                                <a href="blog-grid.html" class="nav__item-link">No Sidebar</a>
                                            </li>
                                            <!-- /.nav-item -->
                                        </ul>
                                        <!-- /.dropdown-menu -->
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="blog-standard.html" class="nav__item-link">blog standard</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="blog-single-post.html" class="nav__item-link">single post</a>
                                    </li>
                                    <!-- /.nav-item -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Shop</a>
                                <ul class="dropdown-menu">
                                    <li class="nav__item">
                                        <a href="shop.html" class="nav__item-link">our Shop</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="shop-sidebar.html" class="nav__item-link">Shop with Sidebar</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="shop-single-product.html" class="nav__item-link">Single Product</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item">
                                        <a href="shopping-cart.html" class="nav__item-link">cart</a>
                                    </li>
                                    <!-- /.nav-item -->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.nav-item -->
                            <!-- /.nav-item -->
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-actions-wrap">
                        <div class="navbar-actions d-flex align-items-center">
                            <a href="reservation.html"
                                class="navbar__action-btn navbar__action-btn-reserve btn">Reservation</a>
                            <a href="#" class="navbar__action-btn hamburger-menu-trigger"><i
                                    class="fa fa-bars"></i></a>
                        </div>
                        <!-- /.navbar-actions -->
                    </div>
                    <!-- /.navbar-actions-wrap -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navabr -->
        </header>
        <!-- /.Header -->

        @yield("page_data")

        <!-- ========================
		Footer
		========================== -->
        <footer class="footer footer-layout1 text-center bg-dark">
            <div class="footer-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-box">
                                <h6 class="contact__box-title">Our Address</h6>
                                <ul class="contact__box-list list-unstyled">
                                    <li>
                                        22 Alnahas Building, 2 AlBahr St, Tanta <br />
                                        Al-Gharbia Governorate, Egypt
                                    </li>
                                </ul>
                                <a href="contacts.html" class="btn btn__primary btn__hover2 btn__link">View On Map</a>
                            </div>
                            <!-- /.contact-box -->
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <img src="/template_files/hotel_website/images/logo/footer-logo.png"
                                alt="logo" class="footer__logo mb-20" />
                            <p class="mx-2 mb-20">
                                El Royale was the first restaurant to open in Egypt, the
                                resturant was designed with the history in mind we have
                                created a soft industrial dining room.
                            </p>
                            <form class="footer__newsletter-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subscribe Our Newsletter" />
                                    <button type="submit" class="form__submit">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                            <ul class="social__icons social__icons-white justify-content-center">
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                            <!-- /.social__icons -->
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-sm-12 col-md-12 col-lg-4">
                            <div class="contact-box">
                                <h6 class="contact__box-title">Private Dinning</h6>
                                <ul class="contact__box-list list-unstyled">
                                    <li>
                                        <span>Main Email:</span>
                                        <a href="mailto:Elroyale@7oroof.com">Elroyale@7oroof.com</a>
                                    </li>
                                    <li>
                                        <span>Phone:</span>
                                        <a href="tel:020101236547">02 0101236547</a>
                                    </li>
                                </ul>
                                <a href="reservation.html"
                                    class="btn btn__primary btn__hover2 btn__link">Reservations</a>
                            </div>
                            <!-- /.contact-box -->
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.footer-top -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <nav class="footer__links">
                                <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Menu</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Shop</a></li>
                                </ul>
                            </nav>
                            <div class="footer__copyright">
                                <span>&copy; Babette, With Love by </span>
                                <a href="http://themeforest.net/user/7oroof" class="color-theme">7oroof.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.Footer-bottom -->
        </footer>
        <!-- /.Footer -->
        <button id="scrollTopBtn"><i class="fa fa-angle-up"></i></button>

        <div class="hamburger-menu">
            <i class="close__hamburger-menu fa fa-long-arrow-right"></i>
            <div class="hamburger-menu__header text-center">
                <img src="/template_files/hotel_website/images/logo/footer-logo.png"
                    alt=" logo" class="mb-20" />
                <p>
                    El Royale was the first restaurant to open in Egypt, the resturant
                    was designed with the history in mind we have created a soft
                    industrial dining room.
                </p>
                <ul class="social__icons social__icons-white justify-content-center">
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tripadvisor"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                </ul>
                <!-- /.social__icons -->
            </div>
            <!-- /.hamburger-menu-header -->
            <div class="hamburger-menu__footer">
                <ul class="contact__list list-unstyled mb-20">
                    <li>
                        <span>Main Email:</span>
                        <a href="mailto:Elroyale@7oroof.com">Elroyale@7oroof.com</a>
                    </li>
                    <li>
                        <span>Phone:</span> <a href="tel:010123456789">02 010123456789</a>
                    </li>
                </ul>
                <!-- /.contact-list -->
                <a href="reservation.html" class="btn btn__primary btn__hover2 btn__block">Make A Reservation</a>
            </div>
            <!-- /.hamburger-menu-footer -->
        </div>
        <!-- /.hamburger-menu -->
    </div>
    <!-- /.wrapper -->

    <script src="/template_files/hotel_website/js/jquery-3.3.1.min.js"></script>
    <script src="/template_files/hotel_website/js/plugins.js"></script>
    <script src="/template_files/hotel_website/js/main.js"></script>
</body>

</html>
