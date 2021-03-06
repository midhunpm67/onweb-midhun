@if(empty($webContent->title))
<div class="row">
	<div class="col-12 text-center">
		<h2>YOUR WEBSITE IS EMPTY, KINDLY ENTER YOUR DATA</h2>
	</div>
</div>
@else
		<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<!--- basic page needs
    ================================================== -->
	<meta charset="utf-8">
	<title>{{$webContent->title}}</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- mobile specific metas
    ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="{{asset('template_files/profile_website/css/base.css')}}">
	<link rel="stylesheet" href="{{asset('template_files/profile_website/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('template_files/profile_website/css/vendor.css')}}">

	<!-- script
    ================================================== -->
	<script src="{{asset('template_files/profile_website/js/modernizr.js')}}"></script>
	<script src="{{asset('template_files/profile_website/js/pace.min.js')}}"></script>

	<!-- favicons
     ================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

<!-- header
================================================== -->
<header>
	<div class="row">

		<div class="top-bar">
			<a class="menu-toggle" href="#"><span>Menu</span></a>

			<div class="logo">
				<a href="">{{$webContent->title}}</a>
			</div>

			<nav id="main-nav-wrap">
				<ul class="main-navigation">
					<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
					<li><a class="smoothscroll"  href="#about" title="">About</a></li>
					{{--						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>--}}
					{{--						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>--}}
					{{--						<li><a class="smoothscroll"  href="#services" title="">Services</a></li>					--}}
					{{--						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	--}}
					{{--						<li><a href="styles.html" title="">Style Demo</a></li>				--}}
				</ul>
			</nav>
		</div> <!-- /top-bar -->

	</div> <!-- /row -->
</header> <!-- /header -->

<!-- intro section
================================================== -->
<section id="intro">

	<div class="intro-overlay"></div>

	<div class="intro-content">
		<div class="row">

			<div class="col-twelve">

				<h5>Hello, World.</h5>
				<h1>I'm {{$webContent->name}}.</h1>

				<p class="intro-position">
					<span>{{$webContent->designation}}</span>
				</p>

				<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

			</div>

		</div>
	</div> <!-- /intro-content -->

	{{--   	<ul class="intro-social">        --}}
	{{--         <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
	{{--         <li><a href="#"><i class="fa fa-behance"></i></a></li>--}}
	{{--         <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
	{{--         <li><a href="#"><i class="fa fa-dribbble"></i></a></li>--}}
	{{--         <li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
	{{--      </ul> <!-- /intro-social -->      	--}}

</section> <!-- /intro -->


<!-- about section
================================================== -->
<section id="about">

	<div class="row section-intro">
		<div class="col-twelve">

			<h5>About</h5>
			<h1>Let me introduce myself.</h1>

			<div class="intro-info">

				{{--   				<img src="images/profile-pic.jpg" alt="Profile Picture">--}}

				{!! $webContent->about !!}
			</div>

		</div>
	</div> <!-- /section-intro -->

	<div class="row button-section">
		<div class="col-twelve">
			<a href="{{$webContent->link_1}}" title="Hire Me" target="_blank" class="button stroke">Hire Me</a>
			<a href="{{$webContent->link_2}}" title="Download CV" target="_blank" class="button button-primary">Download CV</a>
		</div>
	</div>

</section> <!-- /process-->



<!-- Java Script
================================================== -->
<script src="{{asset('template_files/profile_website/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('template_files/profile_website/js/plugins.js')}}"></script>
<script src="{{asset('template_files/profile_website/js/main.js')}}"></script>

</body>

</html>
@endif