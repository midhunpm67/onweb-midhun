<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Widgets - Zeiss Template</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="assets/styles/style.min.css">
	
	<!-- Material Design Icon -->
	<link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
	
	<!-- FullCalendar -->
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

	<!-- Dark Themes -->
	<link rel="stylesheet" href="assets/styles/style-dark.min.css">
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="index.html" class="logo">Zeiss</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<ul class="menu js__accordion">
				<li>
					<a class="waves-effect" href="index.html"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-flower"></i><span>Icons</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="icons-font-awesome-icons.html">Font Awesome</a></li>
						<li><a href="icons-fontello.html">Fontello</a></li>
						<li><a href="icons-material-icons.html">Material Design Icons</a></li>
						<li><a href="icons-material-design-iconic.html">Material Design Iconic Font</a></li>
						<li><a href="icons-themify-icons.html">Themify Icons</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect" href="calendar.html"><i class="menu-icon mdi mdi-calendar-multiple"></i><span>Calendar</span><span class="notice notice-danger">New</span></a>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-chart-bar"></i><span>Charts</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="chart-3d.html">3D Charts</a></li>
						<li><a href="chart-chartist.html">Chartist Charts</a></li>
						<li><a href="chart-chartjs.html">Chartjs Chart</a></li>
						<li><a href="chart-dynamic.html">Dynamic Chart</a></li>
						<li><a href="chart-flot.html">Flot Chart</a></li>
						<li><a href="chart-knob.html">Knob Chart</a></li>
						<li><a href="chart-morris.html">Morris Chart</a></li>
						<li><a href="chart-sparkline.html">Sparkline Chart</a></li>
						<li><a href="chart-other.html">Other Chart</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li class="current active">
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-cube-outline"></i><span>Admin UI</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="ui-notification.html">Notification</a></li>
						<li><a href="profile.html">Profile</a></li>
						<li><a href="ui-range-slider.html">Range Slider</a></li>
						<li><a href="ui-sweetalert.html">Sweet Alert</a></li>
						<li><a href="ui-treeview.html">Tree view</a></li>
						<li class="current"><a href="widgets.html">Widget</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-buffer"></i><span>User Interface</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="ui-buttons.html">Buttons</a></li>
						<li><a href="ui-cards.html">Cards</a></li>
						<li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
						<li><a href="ui-components.html">Components</a></li>
						<li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
						<li><a href="ui-modals.html">Modals</a></li>
						<li><a href="ui-typography.html">Typography</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect" href="inbox.html"><i class="menu-icon mdi mdi-email-outline"></i><span>Mail</span></a>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-pencil-box"></i><span>Forms</span><span class="notice notice-blue">7</span></a>
					<ul class="sub-menu js__content">
						<li><a href="form-elements.html">General Elements</a></li>
						<li><a href="form-advanced.html">Advanced Form</a></li>
						<li><a href="form-fileupload.html">Form Uploads</a></li>
						<li><a href="form-validation.html">Form Validation</a></li>
						<li><a href="form-wizard.html">Form Wizard</a></li>
						<li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
						<li><a href="form-xeditable.html">X-editable</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-table"></i><span>Tables</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="tables-basic.html">Basic Tables</a></li>
						<li><a href="tables-datatable.html">Data Tables</a></li>
						<li><a href="tables-responsive.html">Responsive Tables</a></li>
						<li><a href="tables-editable.html">Editable Tables</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-book-multiple-variant"></i><span>Page</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="page-starter.html">Starter Page</a></li>
						<li><a href="page-login.html">Login</a></li>
						<li><a href="page-register.html">Register</a></li>
						<li><a href="page-recoverpw.html">Recover Password</a></li>
						<li><a href="page-lock-screen.html">Lock Screen</a></li>
						<li><a href="page-confirm-mail.html">Confirm Mail</a></li>
						<li><a href="page-404.html">Error 404</a></li>
						<li><a href="page-500.html">Error 500</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-folder-multiple"></i><span>Extra Pages</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="extras-contact.html">Contact list</a></li>
						<li><a href="extras-email-template.html">Email template</a></li>
						<li><a href="extras-faq.html">FAQ</a></li>
						<li><a href="extras-gallery.html">Gallery</a></li>
						<li><a href="extras-invoice.html">Invoice</a></li>
						<li><a href="extras-maps.html">Maps</a></li>
						<li><a href="extras-pricing.html">Pricing</a></li>
						<li><a href="extras-projects.html">Projects</a></li>
						<li><a href="extras-taskboard.html">Taskboard</a></li>
						<li><a href="extras-timeline.html">Timeline</a></li>
						<li><a href="extras-tour.html">Tour</a></li>
					</ul>
					<!-- /.sub-menu js__content -->
				</li>
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
		<h1 class="page-title">Widgets</h1>
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
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Anna William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
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
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Michael Zenaty</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">50 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Simon</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
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
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Yesterday</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Jenny</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">Oct, 28</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Thomas William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
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
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-lg-3 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Percent Circle</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="text-center">
						<div class="knob-wrap">
							<input class="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#304ffe" data-readOnly=true data-thickness=".4" value="45"  />
						</div>
						<!-- .knob-wrap -->
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-xs-12 -->

			<div class="col-lg-3 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Percent Circle</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="text-center">
						<div class="knob-wrap">
							<input class="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#00bf4f" data-readOnly=true data-thickness=".4" value="87"  />
						</div>
						<!-- .knob-wrap -->
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-xs-12 -->

			<div class="col-lg-3 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Percent Circle</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="text-center">
						<div class="knob-wrap">
							<input class="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#ffa000" data-readOnly=true data-thickness=".4" value="12"  />
						</div>
						<!-- .knob-wrap -->
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-xs-12 -->

			<div class="col-lg-3 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Percent Circle</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="text-center">
						<div class="knob-wrap">
							<input class="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#f60e0e" data-readOnly=true data-thickness=".4" value="36"  />
						</div>
						<!-- .knob-wrap -->
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-xs-12 -->

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-info">Site Traffic</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-1" class="left-content margin-top-15"></div>
						<!-- /#traffic-sparkline-chart-1 -->
						<div class="right-content">
							<h2 class="counter text-info">278</h2>
							<!-- /.counter -->
							<p class="text text-info">Some text here</p>
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-success">Site Traffic</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-2" class="left-content margin-top-10"></div>
						<!-- /#traffic-sparkline-chart-2 -->
						<div class="right-content">
							<h2 class="counter text-success">36%</h2>
							<!-- /.counter -->
							<p class="text text-success">Some text here</p>
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->

			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title text-success">Site Traffic</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="content widget-stat">
						<div id="traffic-sparkline-chart-3" class="left-content"></div>
						<!-- /#traffic-sparkline-chart-3 -->
						<div class="right-content">
							<h2 class="counter text-danger">849 <i class="fa fa-angle-double-up"></i></h2>
							<!-- /.counter -->
							<p class="text text-danger">Some text here</p>
							<!-- /.text -->
						</div>
						<!-- .right-content -->
					</div>
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->

		<div class="row small-spacing">
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico fa fa-apple text-inverse"></i>
						<h2 class="counter text-inverse">2561</h2>
						<p class="text">Some text here</p>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico fa fa-android text-success"></i>
						<h2 class="counter text-success">3562</h2>
						<p class="text">Some text here</p>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico fa fa-users text-primary"></i>
						<h2 class="counter text-primary">283</h2>
						<p class="text">Some text here</p>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<div class="statistics-box with-icon">
						<i class="ico fa fa-area-chart text-info"></i>
						<h2 class="counter text-info">241</h2>
						<p class="text">Some text here</p>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
		</div>
		<!-- .row -->

		<div class="row small-spacing">
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-success text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-diamond"></i>
						<p class="text text-white">SUCCESS</p>
						<h2 class="counter">72943</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-info text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-download"></i>
						<p class="text text-white">DOWNLOAD</p>
						<h2 class="counter">6382</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-danger text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-bug"></i>
						<p class="text text-white">FIXED BUG</p>
						<h2 class="counter">12564</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content bg-warning text-white">
					<div class="statistics-box with-icon">
						<i class="ico small fa fa-usd"></i>
						<p class="text text-white">SALES</p>
						<h2 class="counter">2,637</h2>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
		</div>
		<!-- .row -->

		<div class="row small-spacing">
			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Last Reviews</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="review-list">
						<div class="review-item">
							<div class="top">
								<div class="name">John Doe</div>
								<!-- /.name -->
								<div class="date">10 min</div>
								<!-- /.date -->
								<div class="star-rating text-warning">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<!-- /.star-rating -->
							</div>
							<!-- /.top -->
							<div class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere.</div>
							<!-- /.desc -->
						</div>
						<!-- /.review-item -->
						<div class="review-item">
							<div class="top">
								<div class="name">Harry Halen</div>
								<!-- /.name -->
								<div class="date">15 min</div>
								<!-- /.date -->
								<div class="star-rating text-warning">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<!-- /.star-rating -->
							</div>
							<!-- /.top -->
							<div class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere.</div>
							<!-- /.desc -->
						</div>
						<!-- /.review-item -->
						<div class="review-item">
							<div class="top">
								<div class="name">Thomas Taylor</div>
								<!-- /.name -->
								<div class="date">30 min</div>
								<!-- /.date -->
								<div class="star-rating text-warning">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<!-- /.star-rating -->
							</div>
							<!-- /.top -->
							<div class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere.</div>
							<!-- /.desc -->
						</div>
						<!-- /.review-item -->
						<div class="review-item">
							<div class="top">
								<div class="name">Helen Candy</div>
								<!-- /.name -->
								<div class="date">1 hour ago</div>
								<!-- /.date -->
								<div class="star-rating text-warning">
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<!-- /.star-rating -->
							</div>
							<!-- /.top -->
							<div class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere.</div>
							<!-- /.desc -->
						</div>
						<!-- /.review-item -->
						<div class="review-item">
							<div class="top">
								<div class="name">Henny Betty</div>
								<!-- /.name -->
								<div class="date">1 day ago</div>
								<!-- /.date -->
								<div class="star-rating text-warning">
									<i class="fa fa-star-half-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<!-- /.star-rating -->
							</div>
							<!-- /.top -->
							<div class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere.</div>
							<!-- /.desc -->
						</div>
						<!-- /.review-item -->
					</div>
					<!-- /.review-list -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->
			<div class="col-lg-4 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Activity</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="activity-list">
						<div class="activity-item">
							<div class="bar bg-primary">
								<div class="dot bg-primary"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">10 min</div>
								<!-- /.date -->
								<div class="text">
									Harry has finished "Amaza HTML" task
								</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-danger">
								<div class="dot bg-danger"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">15 min</div>
								<!-- /.date -->
								<div class="text">
									You completed your task
								</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-success">
								<div class="dot bg-success"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">30 min</div>
								<!-- /.date -->
								<div class="text">
									New updated has been installed
								</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-violet">
								<div class="dot bg-violet"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">1 hour ago</div>
								<!-- /.date -->
								<div class="text">Write some comments</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-warning">
								<div class="dot bg-warning"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">1 day ago</div>
								<!-- /.date -->
								<div class="text">4 friends request accepted</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-orange">
								<div class="dot bg-orange"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">6 days ago</div>
								<!-- /.date -->
								<div class="text">Betty has joined your team</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
						<div class="activity-item">
							<div class="bar bg-orange">
								<div class="dot bg-orange"></div>
								<div class="last-dot bg-orange"></div>
								<!-- /.dot -->
							</div>
							<!-- /.bar -->
							<div class="content">
								<div class="date">12 days ago</div>
								<!-- /.date -->
								<div class="text">Daisy has joined your team</div>
								<!-- /.text -->
							</div>
							<!-- /.content -->
						</div>
						<!-- /.activity-item -->
					</div>
					<!-- /.activity-list -->
					<a href="#" class="activity-link">View all activity <i class="fa fa-angle-down"></i></a>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->
			<div class="col-lg-4 col-xs-12">
				<div class="box-content js__todo_widget">
					<h4 class="box-title">Todo</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<div class="todo-list js__todo_list">
						<div class="todo-item">
							<div class="checkbox"><input type="checkbox" id="todo-1"><label for="todo-1">Task To Do 1</label></div>
							<!-- /.checkbox -->
						</div>
						<!-- /.todo-item -->
						<div class="todo-item">
							<div class="checkbox primary"><input type="checkbox" id="todo-2"><label for="todo-2">Task To Do 2</label></div>
							<!-- /.checkbox -->
						</div>
						<!-- /.todo-item -->
						<div class="todo-item">
							<div class="checkbox info"><input type="checkbox" checked id="todo-3"><label for="todo-3">Task To Do 3</label></div>
							<!-- /.checkbox -->
						</div>
						<!-- /.todo-item -->
						<div class="todo-item">
							<div class="checkbox success"><input type="checkbox" id="todo-4"><label for="todo-4">Task To Do 4</label></div>
							<!-- /.checkbox -->
						</div>
						<!-- /.todo-item -->
						<div class="todo-item">
							<div class="checkbox danger"><input type="checkbox" checked id="todo-5"><label for="todo-5">Task To Do 5</label></div>
							<!-- /.checkbox -->
						</div>
						<!-- /.todo-item -->
						<div class="todo-item">
							<div class="checkbox success"><input type="checkbox" id="todo-6"><label for="todo-6">Task To Do 6</label></div>
							<!-- /.checkbox -->
						</div>
						<!-- /.todo-item -->
						<div class="todo-item">
							<div class="checkbox success"><input type="checkbox" id="todo-7"><label for="todo-7">Task To Do 7</label></div>
							<!-- /.checkbox -->
						</div>
						<!-- /.todo-item -->
						<div class="todo-item">
							<div class="checkbox success"><input type="checkbox" id="todo-8"><label for="todo-8">Task To Do 8</label></div>
							<!-- /.checkbox -->
						</div>
						<!-- /.todo-item -->
						<div class="todo-item">
							<div class="checkbox success"><input type="checkbox" id="todo-9"><label for="todo-9">Task To Do 9</label></div>
							<!-- /.checkbox -->
						</div>
						<!-- /.todo-item -->
					</div>
					<!-- /.todo-list -->
					<div class="todo-form">
						<div class="input-group">
							<input type="text" placeholder="Add new task" class="form-control js__todo_value">
							<div class="input-group-btn"><button type="button" class="btn btn-success no-border text-white js__todo_button waves-effect waves-light"><i class="fa fa-plus"></i></button></div>
							<!-- /.input-group-btn -->
						</div>
						<!-- /.input-group -->
					</div>
					<!-- /.todo-form -->
				</div>
				<!-- /.box-content .js__todo_form -->
			</div>
			<!-- /.col-lg-4 col-xs-12 -->
		</div>
		<!-- /.row -->

		<div class="row">			
			<div class="col-lg-6 col-xs-12">
				<div class="box-content">
					<div id="calendar-widget"></div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
			<div class="col-lg-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Purchases</h4>
					<!-- /.box-title -->
					<div class="dropdown js__drop_down">
						<a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
						<ul class="sub-menu">
							<li><a href="#">Product</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else there</a></li>
							<li class="split"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						<!-- /.sub-menu -->
					</div>
					<!-- /.dropdown js__dropdown -->
					<table class="table table-striped margin-bottom-10">
						<thead>
							<tr>
								<th style="width:40%;">Product</th>
								<th>Price</th>
								<th>Date</th>
								<th>State</th>
								<th style="width:5%;"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Amaza Themes</td>
								<td>$71</td>
								<td>Nov 12,2016</td>
								<td class="text-success">Completed</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Macbook</td>
								<td>$142</td>
								<td>Nov 10,2016</td>
								<td class="text-danger">Cancelled</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Samsung TV</td>
								<td>$200</td>
								<td>Nov 01,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Ninja Admin</td>
								<td>$200</td>
								<td>Oct 28,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Galaxy Note 5</td>
								<td>$200</td>
								<td>Oct 28,2016</td>
								<td class="text-success">Completed</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>CleanUp Themes</td>
								<td>$71</td>
								<td>Oct 22,2016</td>
								<td class="text-success">Completed</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Facebook WP Plugin</td>
								<td>$10</td>
								<td>Oct 15,2016</td>
								<td class="text-success">Completed</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Iphone 7</td>
								<td>$100</td>
								<td>Oct 12,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Nova House</td>
								<td>$100</td>
								<td>Oct 12,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
							<tr>
								<td>Repair Cars</td>
								<td>$35</td>
								<td>Oct 12,2016</td>
								<td class="text-warning">Pending</td>
								<td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
							</tr>
						</tbody>
					</table>
					<!-- /.table -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->
		</div>
		<!-- /.row small-spacing -->		
		<footer class="footer">
			<ul class="list-inline">
				<li>2016 © NinjaAdmin.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<!-- FullCalendar -->
	<script src="assets/plugin/moment/moment.js"></script>
	<script src="assets/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/scripts/fullcalendar.init.js"></script>

	<!-- Jquery Knob -->
	<script src="assets/plugin/knob/jquery.knob.min.js"></script>
	<script src="assets/scripts/jquery.knob.init.min.js"></script>

	<!-- Sparkline Chart -->
	<script src="assets/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/scripts/chart.sparkline.init.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>