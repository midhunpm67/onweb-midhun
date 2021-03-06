

@php
   
   $page_name = Route::currentRouteName();

@endphp



<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin | OnWeb </title>
	
   
	<!-- @include("layouts.admin_header") -->

	<!-- Main Styles -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/styles/style.min.css">

	<!-- Material Design Icon -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/sweet-alert/sweetalert.css">

	<!-- FlexDatalist -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/flexdatalist/jquery.flexdatalist.min.css">

	<!-- Popover -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/popover/jquery.popSelect.min.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/select2/css/select2.min.css">

	<!-- Timepicker -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/timepicker/bootstrap-timepicker.min.css">

	<!-- Touch Spin -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/touchspin/jquery.bootstrap-touchspin.min.css">

	<!-- Colorpicker -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/colorpicker/css/bootstrap-colorpicker.min.css">

	<!-- Datepicker -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/datepicker/css/bootstrap-datepicker.min.css">

	<!-- DateRangepicker -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/plugin/daterangepicker/daterangepicker.css">

	<!-- Dark Themes -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/admin/assets/styles/style-dark.min.css">
	
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="/" class="logo">OnWeb</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="{{ route("template_listing") }}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Template List</span></a>
				</li>		
				<li class="current">
					<a class="waves-effect" href="{{ route("website_listing") }}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Website List</span></a>
				</li>
				@if(Auth::user()->user_type == 'admin')
				<li class="current">
					<a class="waves-effect" href="{{ route("category_listing") }}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Category List</span></a>
				</li>
				<li class="current">
					<a class="waves-effect" href="{{ route("subcategory_listing") }}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Sub Category List</span></a>
				</li>
				{{-- <li class="current">
					<a class="waves-effect" href="{{ route("templatepages_listing") }}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Template Page List</span></a>
				</li> --}}
				@endif
				@if(Auth::user())
				<li class="current">
					<a class="waves-effect" href="/admin/logout"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Log Out</span></a>
				</li>
				@endif
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">Home</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
		<!-- /.ico-item fa fa-fa-arrows-alt -->
		<div class="ico-item toggle-hover js__drop_down ">
			<span class="fa fa-th js__drop_down_button"></span>
			<div class="toggle-content">
				<ul>
					<li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
					<li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
					<li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
					<li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
					<li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
				</ul>
				<a href="#" class="read-more">More</a>
			</div>
			<!-- /.toggle-content -->
		</div>
		<!-- /.ico-item -->
		<a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
		<div class="ico-item">
			<img src="http://placehold.it/80x80" alt="" class="ico-img">
			<ul class="sub-ico-item">
				<li><a href="#">Settings</a></li>
				<li><a href="#">Blog</a></li>
				<li><a class="js__logout" href="#">Log Out</a></li>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
		<!-- /.ico-item -->
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="50">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Like your post: ???Contact Form 7 Multi-Step???</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Anna William</span>
					<span class="desc">Like your post: ???Facebook Messenger???</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
					<span class="name">Update Status</span>
					<span class="desc">Failed to get available update data. To ensure the please contact us.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Like your post: ???Contact Form 7 Multi-Step???</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Michael Zenaty</span>
					<span class="desc">Like your post: ???Contact Form 7 Multi-Step???</span>
					<span class="time">50 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Simon</span>
					<span class="desc">Like your post: ???Facebook Messenger???</span>
					<span class="time">1 hour</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
					<span class="name">Account Contact Change</span>
					<span class="desc">A contact detail associated with your account has been changed.</span>
					<span class="time">2 hours</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Helen 987</span>
					<span class="desc">Like your post: ???Facebook Messenger???</span>
					<span class="time">Yesterday</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Jenny</span>
					<span class="desc">Like your post: ???Contact Form 7 Multi-Step???</span>
					<span class="time">Oct, 28</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Thomas William</span>
					<span class="desc">Like your post: ???Facebook Messenger???</span>
					<span class="time">Oct, 27</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="50">
	<h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Harry Halen</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Thomas Taylor</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Helen Candy</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Anna Cavan</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 hour ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-success"><i class="fa fa-user"></i></span>
					<span class="name">Jenny Betty</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 day ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Peterson</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 year ago</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#message-popup -->


@yield('page_data')



@include("layouts.admin_footer")

</body>
<script>
	$(document).on('click', '.delete-btn-web', function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('website-delete') }}",
                        data: {
                            'id': id,
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
							swal("Deleted!", "", "");
							location.reload();
                        }
                    });
                }

            });

			$(document).on('click', '.delete-btn-category', function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('category-delete') }}",
                        data: {
                            'id': id,
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
							swal("Deleted!", "", "");
							location.reload();
                        }
                    });
                }

            });


			$(document).on('click', '.delete-btn-sub-category', function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        type: 'GET',
                        url: "{{ route('sub-category-delete') }}",
                        data: {
                            'id': id,
                            '_token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
							swal("Deleted!", "", "");
							location.reload();
                        }
                    });
                }

            });
</script>
</html>