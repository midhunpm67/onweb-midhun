
@extends('layouts.admin_header')
@extends('layouts.admin_footer')

@section('page_data')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-md-12">
				<div class="box-content">
					<h4 class="box-title">Verify Email</h4>
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
					<iframe src="email-template-verify.html" style="width:100%;height:500px" frameborder="0"></iframe>
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-md-12 -->
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

</body>
</html>
