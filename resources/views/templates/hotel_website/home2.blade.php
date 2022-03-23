@extends("templates/$template_name/layouts/main_layout")

@section('page_data')
    <!-- ========================
    Slider
    ============================== -->
    <section id="slider" class="slider slider-layout1">
        <div class="carousel owl-carousel carousel-arrows carousel-dots carousel-dots-light" data-slide="1" data-slide-md="1"
            data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true"
            data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
            <div class="slide-item align-v-h text-center bg-overlay">
                <div class="bg-img">
                    <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/backgrounds/16.jpg"
                        alt="slide img" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="slide__content">
                                <h2 class="slide__title">
                                    Offering The Best Tasting Experience!
                                </h2>
                                <p class="slide__desc">
                                    Fresh Ingredient, Tasty Meals, And Creative Chefs
                                </p>
                                <a href="menu-classic.html" class="btn btn__primary btn__hover2">view Menu</a>
                            </div>
                            <!-- /.slide-content -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.slide-item -->
            <div class="slide-item align-v-h text-center bg-overlay">
                <div class="bg-img">
                    <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/backgrounds/14.jpg"
                        alt="slide img" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="slide__content">
                                <h2 class="slide__title">
                                    Creative Chefs, <br />
                                    Fresh & Tasty Meals
                                </h2>
                                <p class="slide__desc">
                                    Offering The Best Tasting Experience!
                                </p>
                                <a href="menu-mixed.html" class="btn btn__primary mx-2">View Menu</a>
                                <a href="reservation.html" class="btn btn__white btn__bordered mx-2">Book A Table</a>
                            </div>
                            <!-- /.slide-content -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.slide-item -->
        </div>
        <!-- /.carousel -->
    </section>
    <!-- /.slider -->

    <!-- ===========================
        features
        ============================= -->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <div class="heading heading-layout1 text-center mb-50">
                        <span class="heading__subtitle">Welcome To The El Royale</span>
                        <h2 class="heading__title">
                            Delicious Food, Friendly Staff, Cozy Atmosphere & Positive
                            Emotions!
                        </h2>
                        <div class="heading__icon">
                            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/shapes/shape2.png"
                                alt="heading img" />
                        </div>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- feature item #1 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/features/1.jpg"
                                alt="feature img" />
                        </div>
                        <!-- /.feature__img -->
                        <div class="feature__content">
                            <h4 class="feature__title">Start Eating Better</h4>
                        </div>
                        <!-- /.feature__content-->
                    </div>
                    <!-- /.feature-item -->
                </div>
                <!-- /.col-lg-4 -->
                <!-- feature item #2 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/features/3.jpg"
                                alt="feature img" /">
                        </div>
                        <!-- /.feature__img -->
                        <div class="feature__content">
                            <h4 class="feature__title">Quality Is The Heart</h4>
                        </div>
                        <!-- /.feature__content-->
                    </div>
                    <!-- /.feature-item -->
                </div>
                <!-- /.col-lg-4 -->
                <!-- feature item #3 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-item">
                        <div class="feature__img">
                            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/features/2.jpg"
                                alt="feature img" />
                        </div>
                        <!-- /.feature__img -->
                        <div class="feature__content">
                            <h4 class="feature__title">Hot & Ready To Serve</h4>
                        </div>
                        <!-- /.feature__content-->
                    </div>
                    <!-- /.feature-item -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 text-center">
                    <p>
                        El Royale was the first restaurant to open in Egypt, the
                        resturant designed with the history in mind we have created a
                        soft industrial dining room.
                    </p>
                    <a class="btn btn__secondary btn__link" href="our-story.html">Discover Our Story</a>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.features -->

    <!-- ========================
        Call to Action Layout2
        =========================== -->
    <section class="cta-layout2 text-center bg-overlay bg-parallax">
        <div class="bg-img">
            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/backgrounds/3.jpg"
                alt="background" />
        </div>
        <div class="divider-shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <span class="cta__subtitle">We Create Delicious Memories</span>
                    <h2 class="cta__title">
                        Pull Up A Chair. Take A Taste & Come Join Us
                    </h2>
                    <p class="cta__desc">
                        We have awesome recipes and the most talented chefs in town!
                    </p>
                    <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/about/signature2.png"
                        alt="signature" class="mx-1" />
                    <a href="reservation.html" class="btn btn__white mx-1">Book A Table</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.Call to Action Layout 2 -->

    <!-- ========================
        Menu layout layout 5
        =========================== -->
    <section class="menu-layout1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-layout1 text-center mb-50">
                        <span class="heading__subtitle">Our Favourites</span>
                        <h2 class="heading__title">Discover Our Menu</h2>
                        <div class="heading__icon">
                            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/shapes/shape2.png"
                                alt="heading img" />
                        </div>
                        <p class="heading__desc">
                            Since our grand opening in May 1995, El Royale has won great
                            awards from food critics and organizations all over the world.
                        </p>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav class="nav nav-tabs justify-content-center border-0">
                        <a class="nav__link active" data-toggle="tab" href="#tab1">Lunch</a>
                        <a class="nav__link" data-toggle="tab" href="#tab2">Dinner</a>
                        <a class="nav__link" data-toggle="tab" href="#tab3">Dessert</a>
                        <a class="nav__link" data-toggle="tab" href="#tab4">Drinks</a>
                    </nav>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="menu-wrapper">
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
                                            <span class="menu__item-price">$12.95</span>
                                            <p class="menu__item-desc">
                                                Baguette, basil, arugula, olives, cherry-tomatoes.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Sandwich</h4>
                                            <span class="menu__item-price">$15.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Pan of Fried Eggs</h4>
                                            <span class="pricing__tag">Recommended</span>
                                            <span class="menu__item-price">$13.95</span>
                                            <p class="menu__item-desc">
                                                Eggs, bacon and cherry-tomatoes with bread.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Breakfast Set</h4>
                                            <span class="menu__item-price">$20.95</span>
                                            <p class="menu__item-desc">
                                                Croissants with strawberries, mascarpone, honey.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Healthy Breakfast</h4>
                                            <span class="menu__item-price">$18.95</span>
                                            <p class="menu__item-desc">
                                                Oat granola with fresh blueberries, almond, yogurt.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                    </div>
                                    <!-- /.menu-wrapper -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="menu-wrapper">
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Chicken Breast</h4>
                                            <span class="menu__item-price">$33.95</span>
                                            <p class="menu__item-desc">
                                                Paupiette of chicken, blue cheese, rosemary beans.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Steak</h4>
                                            <span class="menu__item-price">$41.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Chicken Crispy</h4>
                                            <span class="menu__item-price">$33.95</span>
                                            <p class="menu__item-desc">
                                                Smoked quail, crispy egg, spelt, girolles, parsley.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Grilled Fillet</h4>
                                            <span class="menu__item-price">$26.95</span>
                                            <p class="menu__item-desc">
                                                Pork fillet, ginger, garlic, honey, pepper & canola
                                                oil.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Steak</h4>
                                            <span class="menu__item-price">$27.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                    </div>
                                    <!-- /.menu-wrapper -->
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.tab -->
                        <div class="tab-pane fade" id="tab2">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="menu-wrapper">
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Pan of Fried Eggs</h4>
                                            <span class="pricing__tag">Recommended</span>
                                            <span class="menu__item-price">$13.95</span>
                                            <p class="menu__item-desc">
                                                Eggs, bacon and cherry-tomatoes with bread.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Breakfast Set</h4>
                                            <span class="menu__item-price">$20.95</span>
                                            <p class="menu__item-desc">
                                                Croissants with strawberries, mascarpone, honey.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Healthy Breakfast</h4>
                                            <span class="menu__item-price">$18.95</span>
                                            <p class="menu__item-desc">
                                                Oat granola with fresh blueberries, almond, yogurt.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
                                            <span class="menu__item-price">$12.95</span>
                                            <p class="menu__item-desc">
                                                Baguette, basil, arugula, olives, cherry-tomatoes.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Sandwich</h4>
                                            <span class="menu__item-price">$15.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                    </div>
                                    <!-- /.menu-wrapper -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="menu-wrapper">
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Grilled Fillet</h4>
                                            <span class="menu__item-price">$26.95</span>
                                            <p class="menu__item-desc">
                                                Pork fillet, ginger, garlic, honey, pepper & canola
                                                oil.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Steak</h4>
                                            <span class="menu__item-price">$27.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Chicken Breast</h4>
                                            <span class="menu__item-price">$33.95</span>
                                            <p class="menu__item-desc">
                                                Paupiette of chicken, blue cheese, rosemary beans.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Steak</h4>
                                            <span class="menu__item-price">$41.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Chicken Crispy</h4>
                                            <span class="menu__item-price">$33.95</span>
                                            <p class="menu__item-desc">
                                                Smoked quail, crispy egg, spelt, girolles, parsley.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                    </div>
                                    <!-- /.menu-wrapper -->
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.tab -->
                        <div class="tab-pane fade" id="tab3">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="menu-wrapper">
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Chicken Breast</h4>
                                            <span class="menu__item-price">$33.95</span>
                                            <p class="menu__item-desc">
                                                Paupiette of chicken, blue cheese, rosemary beans.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Steak</h4>
                                            <span class="menu__item-price">$41.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Chicken Crispy</h4>
                                            <span class="menu__item-price">$33.95</span>
                                            <p class="menu__item-desc">
                                                Smoked quail, crispy egg, spelt, girolles, parsley.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Grilled Fillet</h4>
                                            <span class="menu__item-price">$26.95</span>
                                            <p class="menu__item-desc">
                                                Pork fillet, ginger, garlic, honey, pepper & canola
                                                oil.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Steak</h4>
                                            <span class="menu__item-price">$27.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                    </div>
                                    <!-- /.menu-wrapper -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="menu-wrapper">
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
                                            <span class="menu__item-price">$12.95</span>
                                            <p class="menu__item-desc">
                                                Baguette, basil, arugula, olives, cherry-tomatoes.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Sandwich</h4>
                                            <span class="menu__item-price">$15.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Pan of Fried Eggs</h4>
                                            <span class="pricing__tag">Recommended</span>
                                            <span class="menu__item-price">$13.95</span>
                                            <p class="menu__item-desc">
                                                Eggs, bacon and cherry-tomatoes with bread.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Breakfast Set</h4>
                                            <span class="menu__item-price">$20.95</span>
                                            <p class="menu__item-desc">
                                                Croissants with strawberries, mascarpone, honey.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Healthy Breakfast</h4>
                                            <span class="menu__item-price">$18.95</span>
                                            <p class="menu__item-desc">
                                                Oat granola with fresh blueberries, almond, yogurt.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                    </div>
                                    <!-- /.menu-wrapper -->
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.tab -->
                        <div class="tab-pane fade" id="tab4">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="menu-wrapper">
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Sandwich</h4>
                                            <span class="menu__item-price">$15.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Pan of Fried Eggs</h4>
                                            <span class="pricing__tag">Recommended</span>
                                            <span class="menu__item-price">$13.95</span>
                                            <p class="menu__item-desc">
                                                Eggs, bacon and cherry-tomatoes with bread.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Smoked Meat Sandwich</h4>
                                            <span class="menu__item-price">$12.95</span>
                                            <p class="menu__item-desc">
                                                Baguette, basil, arugula, olives, cherry-tomatoes.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Breakfast Set</h4>
                                            <span class="menu__item-price">$20.95</span>
                                            <p class="menu__item-desc">
                                                Croissants with strawberries, mascarpone, honey.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Healthy Breakfast</h4>
                                            <span class="menu__item-price">$18.95</span>
                                            <p class="menu__item-desc">
                                                Oat granola with fresh blueberries, almond, yogurt.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                    </div>
                                    <!-- /.menu-wrapper -->
                                </div>
                                <!-- /.col-lg-6 -->
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="menu-wrapper">
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Grilled Fillet</h4>
                                            <span class="menu__item-price">$26.95</span>
                                            <p class="menu__item-desc">
                                                Pork fillet, ginger, garlic, honey, pepper & canola
                                                oil.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Chicken Breast</h4>
                                            <span class="menu__item-price">$33.95</span>
                                            <p class="menu__item-desc">
                                                Paupiette of chicken, blue cheese, rosemary beans.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Steak</h4>
                                            <span class="menu__item-price">$41.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Chicken Crispy</h4>
                                            <span class="menu__item-price">$33.95</span>
                                            <p class="menu__item-desc">
                                                Smoked quail, crispy egg, spelt, girolles, parsley.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                        <div class="menu-item">
                                            <h4 class="menu__item-title">Salmon Steak</h4>
                                            <span class="menu__item-price">$27.95</span>
                                            <p class="menu__item-desc">
                                                Salmon, butter, lemon juice, onion, garlic & salad.
                                            </p>
                                        </div>
                                        <!-- /.menu-item -->
                                    </div>
                                    <!-- /.menu-wrapper -->
                                </div>
                                <!-- /.col-lg-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.tab -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <a href="menu-classic.html" class="btn btn__link btn__secondary">Explore Full Menu</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.menu layout 5 -->

    <!-- =========================
        Testimonial Layout 1
        ========================= -->
    <section class="testimonials testimonials-layout1 bg-overlay">
        <div class="bg-img">
            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/backgrounds/1.jpg"
                alt="background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-layout1 text-center mb-50">
                        <span class="heading__subtitle">People Talk</span>
                        <h2 class="heading__title color-white">Our Guestbook</h2>
                        <div class="heading__icon">
                            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/shapes/shape2.png"
                                alt="heading img" />
                        </div>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel carousel-dots carousel-dots-light" data-slide="3" data-slide-md="2"
                        data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30"
                        data-loop="true" data-speed="800">
                        <!-- Testimonial Item #1 -->
                        <div class="testimonial-item">
                            <div class="testimonial__content">
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- /.testimonial-rating -->
                                <p class="testimonial__desc">
                                    “Lovely atmosphere staff were excellent, very attentive
                                    and polite. We felt taken care of! Food came out quickly
                                    and was hot and delicious.”
                                </p>
                            </div>
                            <!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/testimonials/thumbs/1.png"
                                        alt="author thumb" />
                                </div>
                                <!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">John Peter</h5>
                                <p class="testimonial__meta-desc">Guest</p>
                            </div>
                            <!-- /.testimonial-meta -->
                        </div>
                        <!-- /. testimonial-item -->
                        <!-- Testimonial Item #2 -->
                        <div class="testimonial-item">
                            <div class="testimonial__content">
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- /.testimonial-rating -->
                                <p class="testimonial__desc">
                                    “Been to this stunning place many times over the last
                                    years. Tonight I have to say, it was good as it ever was.
                                    Superb food, exceedingly good staff.”
                                </p>
                            </div>
                            <!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/testimonials/thumbs/2.png"
                                        alt="author thumb" />
                                </div>
                                <!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">Sami Wade</h5>
                                <p class="testimonial__meta-desc">Guest</p>
                            </div>
                            <!-- /.testimonial-meta -->
                        </div>
                        <!-- /. testimonial-item -->
                        <!-- Testimonial Item #3 -->
                        <div class="testimonial-item">
                            <div class="testimonial__content">
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- /.testimonial-rating -->
                                <p class="testimonial__desc">
                                    “Once again, I feel compelled to write about our wonderful
                                    dining experience. We have shared meals or conversations
                                    about our meals at your restaurant.”
                                </p>
                            </div>
                            <!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/testimonials/thumbs/3.png"
                                        alt="author thumb" />
                                </div>
                                <!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">Martin Hope</h5>
                                <p class="testimonial__meta-desc">ProMov</p>
                            </div>
                            <!-- /.testimonial-meta -->
                        </div>
                        <!-- /. testimonial-item -->
                        <!-- Testimonial Item #4 -->
                        <div class="testimonial-item">
                            <div class="testimonial__content">
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- /.testimonial-rating -->
                                <p class="testimonial__desc">
                                    “Lovely atmosphere staff were excellent, very attentive
                                    and polite. We felt taken care of! Food came out quickly
                                    and was hot and delicious.”
                                </p>
                            </div>
                            <!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/testimonials/thumbs/1.png"
                                        alt="author thumb" />
                                </div>
                                <!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">John Peter</h5>
                                <p class="testimonial__meta-desc">Guest</p>
                            </div>
                            <!-- /.testimonial-meta -->
                        </div>
                        <!-- /. testimonial-item -->
                        <!-- Testimonial Item #5 -->
                        <div class="testimonial-item">
                            <div class="testimonial__content">
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- /.testimonial-rating -->
                                <p class="testimonial__desc">
                                    “Been to this stunning place many times over the last
                                    years. Tonight I have to say, it was good as it ever was.
                                    Superb food, exceedingly good staff.”
                                </p>
                            </div>
                            <!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/testimonials/thumbs/2.png"
                                        alt="author thumb" />
                                </div>
                                <!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">Sami Wade</h5>
                                <p class="testimonial__meta-desc">Guest</p>
                            </div>
                            <!-- /.testimonial-meta -->
                        </div>
                        <!-- /. testimonial-item -->
                        <!-- Testimonial Item #6 -->
                        <div class="testimonial-item">
                            <div class="testimonial__content">
                                <div class="testimonial__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <!-- /.testimonial-rating -->
                                <p class="testimonial__desc">
                                    “Once again, I feel compelled to write about our wonderful
                                    dining experience. We have shared meals or conversations
                                    about our meals at your restaurant.”
                                </p>
                            </div>
                            <!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <div class="testimonial__thumb">
                                    <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/testimonials/thumbs/3.png"
                                        alt="author thumb" />
                                </div>
                                <!-- /.testimonial-thumb -->
                                <h5 class="testimonial__meta-title">Martin Hope</h5>
                                <p class="testimonial__meta-desc">ProMov</p>
                            </div>
                            <!-- /.testimonial-meta -->
                        </div>
                        <!-- /. testimonial-item -->
                    </div>
                    <!-- /.carousel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.Testimonials Layout 1 -->

    <!-- =====================
        Banner layout1
        ======================== -->
    <section class="banner banner-layout1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-sm-6 col-md-3 col-lg-4">
                    <div class="banner__img" data-aos="fade-right">
                        <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/banners/1.jpg"
                            alt="banner" class="img-fluid" />
                    </div>
                    <!-- /.banner__img -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-6 col-sm-6 col-md-3 col-lg-4">
                    <div class="banner__img mt-30" data-aos="fade-right" data-aos-delay=".5s">
                        <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/banners/2.jpg"
                            alt="banner" class="img-fluid" />
                    </div>
                    <!-- /.banner__img -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="banner__text text-center mt-30" data-aos="fade-left">
                        <div class="heading heading-layout1 mb-30">
                            <span class="heading__subtitle">Host Your Event</span>
                            <h2 class="heading__title">A warm & Friendly Atmosphere</h2>
                            <div class="heading__icon">
                                <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/shapes/shape2.png"
                                    alt="heading img" />
                            </div>
                            <p class="heading__desc">
                                Allow us to make your next special event extra special. We
                                cater for all sized functions, ideal for your intimate
                                gathering, our team can curate a menu to suit your taste.
                            </p>
                        </div>
                        <!-- /.heading -->
                        <a href="events.html" class="btn btn__secondary btn__link">Explore Events</a>
                    </div>
                    <!-- /.banner__text -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.Banner layout1 -->

    <!-- ========================
        Reservation
        =========================== -->
    <section class="reservation-layout2 bg-overlay bg-parallax">
        <div class="bg-img">
            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/backgrounds/8.jpg"
                alt="background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="reservation-container">
                        <div class="reservation__banner" data-aos="fade-right">
                            <img class="reservation__banner-img"
                                src="https://onweb.cyberforttech.com/template_files/hotel_website/images/backgrounds/pattern/3.jpg"
                                alt="background" />
                            <div class="reservation__banner-inner">
                                <span class="reservation__banner-inner-subtitle">Check Availability</span>
                                <h5 class="reservation__banner-inner-title">
                                    Opening Times
                                </h5>
                                <ul class="list-unstyled">
                                    <li><span>Week days</span><span>09.00 – 24:00</span></li>
                                    <li><span>Saturday</span><span>08:00 – 03.00</span></li>
                                    <li><span>Saturday</span><span>Day off</span></li>
                                </ul>
                                <div class="reservation__banner-contact">
                                    <span class="reservation__banner-contact-label">Call Us Now</span>
                                    <a class="reservation__banner-contact-phone" href="tel:0201023456789">0201023456789</a>
                                </div>
                                <!-- /.reservation__banner-contact -->
                            </div>
                            <!-- /.reservation__banner-inner -->
                        </div>
                        <!-- /.reservation__banner -->
                        <form class="reservation__form" data-aos="fade-left">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <p>
                                        You can book your table online easily in just a couple
                                        of minutes. We take reservations for lunch, just check
                                        the availability of your table.
                                    </p>
                                </div>
                                <!-- /.col-lg-12 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="2">2 people</option>
                                            <option value="3">3 people</option>
                                            <option value="4">4 people</option>
                                            <option value="5">5 people</option>
                                            <option value="6">6 people</option>
                                            <option value="7">7 people</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="23">March 23, 2020</option>
                                            <option value="24">March 24, 2020</option>
                                            <option value="25">March 25, 2020</option>
                                            <option value="26">March 26, 2020</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="8">8:00 PM</option>
                                            <option value="9">9:00 PM</option>
                                            <option value="10">10:00 PM</option>
                                            <option value="11">11:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email" />
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number" />
                                    </div>
                                </div>
                                <!-- /.col-lg-4 -->
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn__secondary btn__block">
                                        Find A Table
                                    </button>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /.reservation__form -->
                    </div>
                    <!-- /.reservation-container -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.Reservation -->

    <!-- ======================
        Blog Grid
        ========================= -->
    <section class="blog blog-grid pb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-latout1 text-center mb-50">
                        <span class="heading__subtitle">Don’t Miss</span>
                        <h2 class="heading__title">Our News & Events</h2>
                        <div class="heading__icon">
                            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/shapes/shape2.png"
                                alt="heading img" />
                        </div>
                        <p class="heading__desc">
                            Since our grand opening in May 1995, El Royale has won great
                            awards from food critics and organizations all over the world.
                        </p>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- Post Item #1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="#">
                                <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/blog/grid/1.jpg"
                                    alt="post image" />
                            </a>
                        </div>
                        <!-- /.post__img -->
                        <div class="post__content">
                            <div class="post__meta">
                                <div class="post__meta-cat">
                                    <a href="#">Food</a><a href="#">Recipe</a>
                                </div>
                                <!-- /.post-meta-cat -->
                            </div>
                            <!-- /.post-meta -->
                            <h4 class="post__title">
                                <a href="#">Healthy & Simple Recipes That Are Perfect for Spring</a>
                            </h4>
                            <span class="post__meta-date">Jan 20, 2020</span>
                            <p class="post__desc">
                                My favorite form of cold weather exercise is snow-shoeing,
                                but by chance I haven’t been able to go this year. Busy
                                working at the computer when fresh snow fell...
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">Read More</a>
                        </div>
                        <!-- /.post__content -->
                    </div>
                    <!-- /.post-item -->
                </div>
                <!-- /.col-lg-4 -->
                <!-- Post Item #2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="#">
                                <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/blog/grid/2.jpg"
                                    alt="post image" />
                            </a>
                        </div>
                        <!-- /.post__img -->
                        <div class="post__content">
                            <div class="post__meta">
                                <div class="post__meta-cat">
                                    <a href="#">Chef</a><a href="#">Dinner</a>
                                </div>
                                <!-- /.post-meta-cat -->
                            </div>
                            <!-- /.post-meta -->
                            <h4 class="post__title">
                                <a href="#">What do chefs cook when they have friends over for
                                    dinner?</a>
                            </h4>
                            <span class="post__meta-date">Jan 20, 2020</span>
                            <p class="post__desc">
                                I began my career as a recipe tester for cookbooks, and I
                                did that work for years. We loved cookbooks and loved
                                browsing for them at thrift stores...
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">Read More</a>
                        </div>
                        <!-- /.post__content -->
                    </div>
                    <!-- /.post-item -->
                </div>
                <!-- /.col-lg-4 -->
                <!-- Post Item #3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="post-item">
                        <div class="post__img">
                            <a href="#">
                                <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/blog/grid/3.jpg"
                                    alt="post image" />
                            </a>
                        </div>
                        <!-- /.post__img -->
                        <div class="post__content">
                            <div class="post__meta">
                                <div class="post__meta-cat">
                                    <a href="#">Chef</a><a href="#">Dinner</a>
                                </div>
                                <!-- /.post-meta-cat -->
                            </div>
                            <!-- /.post-meta -->
                            <h4 class="post__title">
                                <a href="#">Desserts With Cream Cheese Frosting Taste of Home</a>
                            </h4>
                            <span class="post__meta-date">Jan 17, 2020</span>
                            <p class="post__desc">
                                I’ve been baking cake for many years, and have experimented
                                with making it into cupcakes, as a layer cake, serving it
                                dusted with confectioner’s sugar...
                            </p>
                            <a href="#" class="btn btn__secondary btn__link">Read More</a>
                        </div>
                        <!-- /.post__content -->
                    </div>
                    <!-- /.post-item -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.blog Grid -->
@endsection
