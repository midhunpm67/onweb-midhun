@extends('layouts.user_layout')

@section('page_data')



        <section class="inner-banner">
            <div class="container text-center">
                <ul class="thm-breadcrumb">
                    {{-- <li class="thm-breadcrumb__item"><a href="#">Home</a></li>
                    <li class="thm-breadcrumb__item"><span>Blog</span></li> --}}
                </ul><!-- /.thm-breadcrumb -->
                <h2 class="inner-banner__title"><span>User Registration </span></h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        {{-- <h2 class="blog-details__content-title">User Registration</h2> --}}
                        <!-- /.blog-details__content-title -->
                        <form class="reply-form" id="userRegForm" method="POST" action="/user-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder=" Name" class="reply-form__field" name="name">
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-6">
                                    <input type="email" placeholder=" Email" class="reply-form__field" name="email">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="number" placeholder=" Mobile Number" class="reply-form__field" name="mobile">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="text" placeholder=" Username" class="reply-form__field" name="username">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="password" placeholder="Password" class="reply-form__field" name="password" id="password">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-6">
                                    <input type="password" placeholder="Confirm Password" class="reply-form__field" name="password_1" id="password_1">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">

                                    <button class="reply-form__btn" type="submit">SUBMIT</button>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form><!-- /.reply-form -->
                    </div><!-- /.col-lg-8 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->

@endsection
