<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Advanced Plugins - Zeiss Template</title>

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
	
	<!-- FlexDatalist -->
	<link rel="stylesheet" href="assets/plugin/flexdatalist/jquery.flexdatalist.min.css">

	<!-- Popover -->
	<link rel="stylesheet" href="assets/plugin/popover/jquery.popSelect.min.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="assets/plugin/select2/css/select2.min.css">

	<!-- Timepicker -->
	<link rel="stylesheet" href="assets/plugin/timepicker/bootstrap-timepicker.min.css">

	<!-- Touch Spin -->
	<link rel="stylesheet" href="assets/plugin/touchspin/jquery.bootstrap-touchspin.min.css">

	<!-- Colorpicker -->
	<link rel="stylesheet" href="assets/plugin/colorpicker/css/bootstrap-colorpicker.min.css">

	<!-- Datepicker -->
	<link rel="stylesheet" href="assets/plugin/datepicker/css/bootstrap-datepicker.min.css">

	<!-- DateRangepicker -->
	<link rel="stylesheet" href="assets/plugin/daterangepicker/daterangepicker.css">

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
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-cube-outline"></i><span>Admin UI</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="ui-notification.html">Notification</a></li>
						<li><a href="profile.html">Profile</a></li>
						<li><a href="ui-range-slider.html">Range Slider</a></li>
						<li><a href="ui-sweetalert.html">Sweet Alert</a></li>
						<li><a href="ui-treeview.html">Tree view</a></li>
						<li><a href="widgets.html">Widget</a></li>
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
				<li class="current active">
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-pencil-box"></i><span>Forms</span><span class="notice notice-blue">7</span></a>
					<ul class="sub-menu js__content">
						<li><a href="form-elements.html">General Elements</a></li>
						<li class="current"><a href="form-advanced.html">Advanced Form</a></li>
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
		<h1 class="page-title">Advanced Plugins</h1>
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
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Flex Datalist</h4>
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
					<p>Using data from <code>&lt;datalist&gt;</code> as a suggestion (the standard behavior).</p>
					<input type="text" placeholder="Programming language name" class="form-control flexdatalist" data-min-length="1" list="languages" name="language">
					<datalist id="languages">
						<option value="PHP">PHP</option>
						<option value="JavaScript">JavaScript</option>
						<option value="Cobol">Cobol</option>
						<option value="C#">C#</option>
						<option value="C++">C++</option>
						<option value="Java">Java</option>
						<option value="Pascal">Pascal</option>
						<option value="FORTRAN">FORTRAN</option>
						<option value="Lisp">Lisp</option>
						<option value="Swift">Swift</option>
					</datalist>

					<p class="margin-top-30">Multiple options from <code>&lt;datalist&gt;</code> (Use comma to <strong>set</strong> and <strong>separate</strong> values)</p>
					<input type='text' placeholder='Programming language name' class='flexdatalist' data-min-length='1' multiple='multiple' list='languages' name='language'>

					<p class="margin-top-30">Show all results on focus</p>
					<input type='text' placeholder='Programming language name' class='flexdatalist' data-min-length='1' multiple='multiple' list='languages' name='language'>

					<p class="margin-top-30">Field relative</p>
					<input type='text' placeholder='Programming language name' data-relatives='#relative' id='chained_relative' class='flexdatalist form-control' data-min-length='1' list='languages' name='language'>
					<p class="margin-top-20">The option <code>chainedRelatives</code> disables the input until relative inputs are filled.<br>In the example below, with <code>chainedRelatives</code> set to true, if the input below is disabled, is because it's waiting for <code>input#chained_relative</code> (previous input) to get selected. </p>
					<input type='text' placeholder='Programming language name' data-relatives='#chained_relative' data-chained-relatives='true' id='chained_relative2' class='flexdatalist form-control' data-min-length='1' list='languages' name='language' >
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->

			<div class="col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">&lt;select&gt; Popovers</h4>
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
					<p>Max Allowed upto 2</p>
					<select id="popover-1" class="form-control" multiple>
						<option value="labrador">Labrador</option>
						<option value="german-shepard">German Shepard</option>
						<option value="bulldog">Bulldog</option>
						<option value="poodle">Poodle</option>
						<option value="siberian-husky">Siberian Husky</option>
					</select>
					<p>Popover placed at the bottom</p>
					<select id="popover-2" class="form-control" multiple>
						<option value="game-of-thrones">Game Of Thrones</option>
						<option value="prison-break">Prison Break</option>
						<option value="lost">Lost</option>
						<option value="sherlock-holmes">Sherlock Holmes</option>
						<option value="true-detectives">True Detectives</option>
					</select>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-md-6 -->
			<div class="col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Select2</h4>
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
					<p>Single select boxes</p>
					<select class="form-control select2_1">
						<optgroup label="Alaskan/Hawaiian Time Zone">
							<option value="AK">Alaska</option>
							<option value="HI">Hawaii</option>
						</optgroup>
						<optgroup label="Pacific Time Zone">
							<option value="CA">California</option>
							<option value="NV">Nevada</option>
							<option value="OR">Oregon</option>
							<option value="WA">Washington</option>
						</optgroup>
						<optgroup label="Mountain Time Zone">
							<option value="AZ">Arizona</option>
							<option value="CO">Colorado</option>
							<option value="ID">Idaho</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NM">New Mexico</option>
							<option value="ND">North Dakota</option>
							<option value="UT">Utah</option>
							<option value="WY">Wyoming</option>
						</optgroup>
						<optgroup label="Central Time Zone">
							<option value="AL">Alabama</option>
							<option value="AR">Arkansas</option>
							<option value="IL">Illinois</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="OK">Oklahoma</option>
							<option value="SD">South Dakota</option>
							<option value="TX">Texas</option>
							<option value="TN">Tennessee</option>
							<option value="WI">Wisconsin</option>
						</optgroup>
						<optgroup label="Eastern Time Zone">
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="IN">Indiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="OH">Ohio</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WV">West Virginia</option>
						</optgroup>
					</select>
					<p class="margin-top-20">Multiple select boxes</p>
					<select class="form-control select2_1" multiple="multiple">
						<optgroup label="Alaskan/Hawaiian Time Zone">
							<option value="AK">Alaska</option>
							<option value="HI">Hawaii</option>
						</optgroup>
						<optgroup label="Pacific Time Zone">
							<option value="CA">California</option>
							<option value="NV">Nevada</option>
							<option value="OR">Oregon</option>
							<option value="WA">Washington</option>
						</optgroup>
						<optgroup label="Mountain Time Zone">
							<option value="AZ">Arizona</option>
							<option value="CO">Colorado</option>
							<option value="ID">Idaho</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NM">New Mexico</option>
							<option value="ND">North Dakota</option>
							<option value="UT">Utah</option>
							<option value="WY">Wyoming</option>
						</optgroup>
						<optgroup label="Central Time Zone">
							<option value="AL">Alabama</option>
							<option value="AR">Arkansas</option>
							<option value="IL">Illinois</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="OK">Oklahoma</option>
							<option value="SD">South Dakota</option>
							<option value="TX">Texas</option>
							<option value="TN">Tennessee</option>
							<option value="WI">Wisconsin</option>
						</optgroup>
						<optgroup label="Eastern Time Zone">
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="IN">Indiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="OH">Ohio</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WV">West Virginia</option>
						</optgroup>
					</select>
					<p class="margin-top-20">Tagging support</p>
					<select class="select2_2 form-control" multiple="multiple">
						<option selected="selected">orange</option>
						<option>white</option>
						<option selected="selected">purple</option>
						<option value="red">red</option><option value="blue">blue</option><option value="green">green</option>
					</select>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-md-6 -->

			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Touch Spin</h4>
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
					<p>Example with postfix and prefix:</p>
					<div class="row margin-bottom-10">
						<div class="col-md-6 margin-bottom-20">
							<input id="demo1" type="text" value="55" name="demo1">
						</div>
						<div class="col-md-6 margin-bottom-20">
							<input id="demo2" type="text" value="0" name="demo2" class="col-md-8 form-control">
						</div>
					</div>
					<p>Vertical button</p>
					<div class="row margin-bottom-10">
						<div class="col-md-6 margin-bottom-20">
							<input id="demo_vertical" type="text" value="20" name="demo_vertical">
						</div>
						<div class="col-md-6 margin-bottom-20">
							<input id="demo_vertical2" type="text" value="15" name="demo_vertical2">
						</div>
					</div>
					<p>Button group</p>
					<div class="input-group">
						<input id="demo5" type="text" class="form-control" name="demo5" value="50">
						<div class="input-group-btn">
							<button type="button" class="btn btn-default">Action</button>
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->

			<div class="col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Timepicker</h4>
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
					<label>Default Time Picker</label>
					<div class="input-group margin-bottom-20">
						<div class="bootstrap-timepicker">
							<input id="timepicker" type="text" class="form-control">
						</div>
						<span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
					</div>
					<label>24 Hour Mode Time Picker</label>
					<div class="input-group margin-bottom-20">
						<div class="bootstrap-timepicker">
							<input id="timepicker2" type="text" class="form-control">
						</div>
						<span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
					</div>
					<label>Specify a step for the minute field</label>
					<div class="input-group">
						<div class="bootstrap-timepicker">
							<input id="timepicker3" type="text" class="form-control">
						</div>
						<span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-md-6 col-xs-12 -->
			<div class="col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Colorpicker</h4>
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
					<div class="form-group margin-bottom-20">
						<label>Default</label>
						<input type="text" class="colorpicker-default form-control colorpicker-element" value="#846fe4">
					</div>
					<div class="form-group margin-bottom-20">
						<label>RGBA</label>
						<input type="text" class="colorpicker-rgba form-control colorpicker-element" value="rgb(10,153,22,0.78)" data-color-format="rgba">
					</div>
					<div class="form-group no-margin">
						<label>As Component</label>
						<div data-color-format="rgb" data-color="rgb(255, 214, 125)" class="colorpicker-default input-group colorpicker-element">
							<input type="text" readonly="readonly" value="" class="form-control">
							<span class="input-group-btn add-on">
								<button class="btn btn-white" type="button">
									<i style="background-color: rgb(124, 66, 84);margin-top: 2px;"></i>
								</button>
							</span>
						</div>
					</div>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-md-6 col-xs-12 -->

			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Date Picker</h4>
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
					<div class="row">
						<div class="col-lg-8">
							<form action="#" class="form-horizontal">
								<div class="form-group">
									<label class="control-label col-sm-4">Default Functionality</label>
									<div class="col-sm-8">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
											<span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>
										</div>
										<!-- /.input-group -->
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-sm-4">Auto Close</label>
									<div class="col-sm-8">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
											<span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>
										</div>
										<!-- /.input-group -->
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-sm-4">Multiple Date</label>
									<div class="col-sm-8">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple-date">
											<span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>
										</div>
										<!-- /.input-group -->
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-sm-4">Date Range</label>
									<div class="col-sm-8">
										<div class="input-daterange input-group" id="date-range">
											<input type="text" class="form-control" name="start" />
											<span class="input-group-addon bg-primary text-white">to</span>
											<input type="text" class="form-control" name="end" />
										</div>
									</div>
								</div>

							</form>
						</div>
						<!-- /.col-lg-8 -->

						<div class="col-lg-4">
							<div class="p-20">
								<label>Display Inline</label>
								<div class="input-group">
									<div id="datepicker-inline"></div>
								</div>
								<!-- /.input-group -->
							</div>
						</div>
						<!-- /.col-lg-4 -->

					</div>
					<!-- /.row -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->

			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Date Range Picker</h4>
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
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-lg-4 control-label">With all options</label>
							<div class="col-lg-8">
								<div id="reportrange" class="pull-right form-control">
									<i class="fa fa-calendar"></i>
									<span>August 30, 2016 - September 28, 2016</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-4 control-label">Date Range Pick</label>
							<div class="col-lg-8">
								<input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-4 control-label">Date Range With Time</label>
							<div class="col-lg-8">
								<input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM">
							</div>
						</div>
						<div class="form-group m-b-0">
							<label class="col-lg-4 control-label">Limit Selectable Dates</label>
							<div class="col-lg-8">
								<input class="form-control input-limit-datepicker" type="text" name="daterange" value="06/01/2015 - 06/07/2015">
							</div>
						</div>
					</form>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Bootstrap MaxLength</h4>
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
					<div class="row">
						<div class="col-md-6">
							<div class="padding-20">
								<h5><b>Default usage</b></h5>
								<input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />

								<div class="margin-top-20">
									<input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
								</div>

								<div class="margin-top-20">
									<h5><b>Few options</b></h5>
									<input type="text" class="form-control" maxlength="25" name="moreoptions" id="moreoptions" />
								</div>
							</div>
						</div>
						<!-- /.col-md-6 -->

						<div class="col-md-6">
							<div class="padding-20">
								<h5><b>All the options</b></h5>
								<input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />

								<div class="m-t-20">
									<h5><b>position</b></h5>
									<input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
								</div>
                                <div class="m-t-20">
									<h5><b>textareas</b></h5>
									<textarea id="textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
								</div>
							</div>
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-xs-12 -->
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

	<!-- Flex Datalist -->
	<script src="assets/plugin/flexdatalist/jquery.flexdatalist.min.js"></script>

	<!-- Popover -->
	<script src="assets/plugin/popover/jquery.popSelect.min.js"></script>

	<!-- Select2 -->
	<script src="assets/plugin/select2/js/select2.min.js"></script>

	<!-- Multi Select -->
	<script src="assets/plugin/multiselect/multiselect.min.js"></script>

	<!-- Touch Spin -->
	<script src="assets/plugin/touchspin/jquery.bootstrap-touchspin.min.js"></script>

	<!-- Timepicker -->
	<script src="assets/plugin/timepicker/bootstrap-timepicker.min.js"></script>

	<!-- Colorpicker -->
	<script src="assets/plugin/colorpicker/js/bootstrap-colorpicker.min.js"></script>

	<!-- Datepicker -->
	<script src="assets/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>

	<!-- Moment -->
	<script src="assets/plugin/moment/moment.js"></script>

	<!-- DateRangepicker -->
	<script src="assets/plugin/daterangepicker/daterangepicker.js"></script>

	<!-- Maxlength -->
	<script src="assets/plugin/maxlength/bootstrap-maxlength.min.js"></script>

	<!-- Demo Scripts -->
	<script src="assets/scripts/form.demo.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>