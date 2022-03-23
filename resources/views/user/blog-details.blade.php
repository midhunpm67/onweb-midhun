@extends('layouts.user_header')

@section('page_data')

<section class="inner-banner">
    <div class="container text-center">
        <ul class="thm-breadcrumb">
            <li class="thm-breadcrumb__item"><a href="#">Home</a></li>
            <li class="thm-breadcrumb__item"><span>Blog</span></li>
        </ul><!-- /.thm-breadcrumb -->
        <h2 class="inner-banner__title"><span>Blog Details</span></h2><!-- /.inner-banner__title -->
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details__content">
                    <div class="blog-details__image">
                        <img src="images/blog-single-1-1.jpg" alt="Awesome Image" />
                        <div class="blog-details__date">30 April, 2019</div><!-- /.blog-details__date -->
                    </div><!-- /.blog-details__image -->
                    <div class="blog-details__meta">
                        <a href="#" class="blog-details__meta-link">By Admin</a>
                        <span class="blog-details__meta-sep">.</span>
                        <a href="#" class="blog-details__meta-link">2 Comments</a>
                    </div><!-- /.blog-details__meta -->
                    <h3 class="blog-details__title">Pre launch mobile app marketing pitfalls</h3><!-- /.blog-details__title -->
                    <p class="blog-details__text">There are many variations of passages of available but majority have alteration in some by inject humour or random words. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><!-- /.blog-details__text -->
                    <p class="blog-details__text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like.</p><!-- /.blog-details__text -->
                </div><!-- /.blog-details__content -->
                <div class="blog-details__author">
                    <div class="blog-details__author-image">
                        <img src="images/author-1-1.jpg" alt="Awesome Image" />
                    </div><!-- /.blog-details__image -->
                    <div class="blog-details__author-content">
                        <h3>Christine Eve</h3>
                        <p>Lorem Ipsum is simply dummy text of the rinting and typesetting been the industry standard dummy text ever sincer condimentum purus. In non ex at ligula fringilla lobortis et not the aliquet.</p>
                    </div><!-- /.blog-details__content -->
                </div><!-- /.blog-details__author -->
                <h2 class="blog-details__content-title">2 Comments</h2><!-- /.blog-details__content-title -->
                <div class="comment-one">
                    <div class="comment-one__single">
                        <div class="comment-one__image">
                            <div class="inner-block">
                                <img src="images/comment-1-1.jpg" alt="Awesome Image" />
                            </div><!-- /.inner-block -->
                        </div><!-- /.comment-one__image -->
                        <div class="comment-one__content">
                            <div class="comment-one__content-top">
                                <div class="comment-one__top-left">
                                    <h3 class="comment-one__author">Laquanda Bachmeier</h3><!-- /.comment-one__author -->
                                    <p class="comment-one__date">20 April, 2019 <span class="comment-one__date-sep">.</span> 4:00 pm</p><!-- /.comment-one__date -->
                                    <p class="comment-one__text">Lorem Ipsum is simply dummy text of the rinting and typesetting been the industry standard dummy text ever sincer condimentum purus. In non ex at ligula fringilla lobortis et not the aliquet.</p><!-- /.comment-one__text -->
                                </div><!-- /.comment-one__top-left -->
                                <div class="comment-one__top-right">
                                    <a href="#" class="comment-one__reply">Reply</a>
                                </div><!-- /.comment-one__top-right -->
                            </div><!-- /.comment-one__content-top -->                                    
                        </div><!-- /.comment-one__content -->
                    </div><!-- /.comment-one__single -->
                    <div class="comment-one__single">
                        <div class="comment-one__image">
                            <div class="inner-block">
                                <img src="images/comment-1-2.jpg" alt="Awesome Image" />
                            </div><!-- /.inner-block -->
                        </div><!-- /.comment-one__image -->
                        <div class="comment-one__content">
                            <div class="comment-one__content-top">
                                <div class="comment-one__top-left">
                                    <h3 class="comment-one__author">Vicente Elmore</h3><!-- /.comment-one__author -->
                                    <p class="comment-one__date">20 April, 2019 <span class="comment-one__date-sep">.</span> 4:00 pm</p><!-- /.comment-one__date -->
                                    <p class="comment-one__text">Lorem Ipsum is simply dummy text of the rinting and typesetting been the industry standard dummy text ever sincer condimentum purus. In non ex at ligula fringilla lobortis et not the aliquet.</p><!-- /.comment-one__text -->
                                </div><!-- /.comment-one__top-left -->
                                <div class="comment-one__top-right">
                                    <a href="#" class="comment-one__reply">Reply</a>
                                </div><!-- /.comment-one__top-right -->
                            </div><!-- /.comment-one__content-top -->                                    
                        </div><!-- /.comment-one__content -->
                    </div><!-- /.comment-one__single -->
                </div><!-- /.comment-one -->
                <h2 class="blog-details__content-title">Leave a Comment</h2><!-- /.blog-details__content-title -->
                <form action="#" class="reply-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" placeholder="Your name" class="reply-form__field">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" placeholder="Enter email" class="reply-form__field">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <textarea placeholder="Write message" class="reply-form__field"></textarea>
                            <button class="reply-form__btn" type="submit">Submit Comment</button>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form><!-- /.reply-form -->
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="text" name="search" placeholder="Search here...">
                        </form>
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest Posts</h3><!-- /.sidebar__title -->
                        <div class="sidebar__post-wrap">
                            <div class="sidebar__post__single">
                                <div class="sidebar__post-image">
                                    <div class="inner-block"><img src="images/lp-1-1.jpg" alt="Awesome Image" /></div><!-- /.inner-block -->
                                </div><!-- /.sidebar__post-image -->
                                <div class="sidebar__post-content">
                                    <h4 class="sidebar__post-title"><a href="#">Basic rules of running web agency</a></h4><!-- /.sidebar__post-title -->
                                </div><!-- /.sidebar__post-content -->
                            </div><!-- /.sidebar__post__single -->
                            <div class="sidebar__post__single">
                                <div class="sidebar__post-image">
                                    <div class="inner-block"><img src="images/lp-1-2.jpg" alt="Awesome Image" /></div><!-- /.inner-block -->
                                </div><!-- /.sidebar__post-image -->
                                <div class="sidebar__post-content">
                                    <h4 class="sidebar__post-title"><a href="#">Basic rules of running web agency</a></h4><!-- /.sidebar__post-title -->
                                </div><!-- /.sidebar__post-content -->
                            </div><!-- /.sidebar__post__single -->
                            <div class="sidebar__post__single">
                                <div class="sidebar__post-image">
                                    <div class="inner-block"><img src="images/lp-1-3.jpg" alt="Awesome Image" /></div><!-- /.inner-block -->
                                </div><!-- /.sidebar__post-image -->
                                <div class="sidebar__post-content">
                                    <h4 class="sidebar__post-title"><a href="#">Basic rules of running web agency</a></h4><!-- /.sidebar__post-title -->
                                </div><!-- /.sidebar__post-content -->
                            </div><!-- /.sidebar__post__single -->
                        </div><!-- /.sidebar__post-wrap -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                        <ul class="sidebar__category-list">
                            <li class="sidebar__category-list-item"><a href="#">Business</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Introductions</a></li>
                            <li class="sidebar__category-list-item"><a href="#">One Page Template</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Parallax Effects</a></li>
                            <li class="sidebar__category-list-item"><a href="#">New Technologies</a></li>
                            <li class="sidebar__category-list-item"><a href="#">Video Backgrounds</a></li>
                        </ul><!-- /.sidebar__category-list -->
                    </div><!-- /.sidebar__single -->
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
                        <ul class="sidebar__tags-list">
                            <li class="sidebar__tags-list-item"><a href="#">Business,</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Agency,</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Technology,</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Parallax,</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Innovative,</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Professional,</a></li>
                            <li class="sidebar__tags-list-item"><a href="#">Experience,</a></li>
                        </ul><!-- /.sidebar__category-list -->
                    </div><!-- /.sidebar__single -->
                </div><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.blog-details -->

@endsection