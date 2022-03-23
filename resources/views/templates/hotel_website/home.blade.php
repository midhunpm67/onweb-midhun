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
                    <img src="{{ asset("template_files/$template_name/" . $page_data["sliders"][0]["image"]) }}" alt="slide img" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="slide__content">
                                <h2 class="slide__title">
                                    {{ $page_data["sliders"][0]["title"] }}
                                </h2>
                                <p class="slide__desc">
                                    {{ $page_data["sliders"][0]["description"] }}
                                </p>
                                <a href="{{ $page_data["sliders"][0]["button_link"] }}" class="btn btn__primary btn__hover2">{{ $page_data["sliders"][0]["button_text"] }}</a>
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
                        <span class="heading__subtitle">{{ $page_data["about"]["title"] }}</span>
                        <h2 class="heading__title">
                            {{ $page_data["about"]["description"] }}
                        </h2>
                        <div class="heading__icon">
                            <img src="{{ asset("template_files/$template_name/" . $page_data["about"]["image"]) }}" alt="heading img" />
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
                            <img src="{{ asset("template_files/$template_name/" . $page_data["features"][0]["image"]) }}" alt="feature img" />
                        </div>
                        <!-- /.feature__img -->
                        <div class="feature__content">
                            <h4 class="feature__title">{{ $page_data["features"][0]["title"] }}</h4>
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
                            <img src="{{ asset("template_files/$template_name/" . $page_data["features"][1]["image"]) }}" alt="feature img" />
                        </div>
                        <!-- /.feature__img -->
                        <div class="feature__content">
                            <h4 class="feature__title">{{ $page_data["features"][1]["title"] }}</h4>
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
                            <img src="{{ asset("template_files/$template_name/" . $page_data["features"][2]["image"]) }}" alt="feature img" />
                        </div>
                        <!-- /.feature__img -->
                        <div class="feature__content">
                            <h4 class="feature__title">{{ $page_data["features"][2]["title"] }}</h4>
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
                        {{ $page_data["discover"]["description"] }}
                    </p>
                    <a class="btn btn__secondary btn__link" href="{{ $page_data["discover"]["button_link"] }}">{{ $page_data["discover"]["button_text"] }}</a>
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
            <img src="https://onweb.cyberforttech.com/template_files/hotel_website/images/backgrounds/3.jpg" alt="background" />
        </div>
        <div class="divider-shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <span class="cta__subtitle">{{ $page_data["ad_1"]["sub_title"] }}</span>
                    <h2 class="cta__title">
                        {{ $page_data["ad_1"]["title"] }}
                    </h2>
                    <p class="cta__desc">
                        {{ $page_data["ad_1"]["description"] }}
                    </p>
                    <img src="{{ asset("template_files/$template_name/" . $page_data["ad_1"]["image"]) }}" alt="signature" class="mx-1" />
                    <a href="{{ $page_data["ad_1"]["button_link"] }}" class="btn btn__white mx-1">{{ $page_data["ad_1"]["button_text"] }}</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.Call to Action Layout 2 -->

@endsection
