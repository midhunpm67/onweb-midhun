<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Home</title>
	<link rel="stylesheet" href="{{asset("/admin/assets/styles/style.min.css")}}">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{asset("/admin/assets/plugin/waves/waves.min.css")}}">

</head>

<body>

<div id="single-wrapper">
	<form action="{{route('login_check')}}" method="POST" class="frm-single">
        @csrf
		<div class="inside">
			<div class="title"><strong>Ninja</strong>Admin</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>
			<!-- /.frm-title -->
			<div class="frm-input"><input type="text" placeholder="Your Email" class="frm-inp" name="email" id="email"><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" placeholder="Password" class="frm-inp" name="password" id="password"><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div>
					<!-- /.checkbox -->
				</div>
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>

			<!-- /.row -->
			<a href="/register" class="a-link"><i class="fa fa-key"></i>New to NinjaAdmin? Register.</a>
			<div class="frm-footer">NinjaAdmin © 2016.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="/admin/assets/script/html5shiv.min.js"></script>
		<script src="/admin/assets/script/respond.min.js"></script>
	<![endif]-->
	<!--
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset("/admin/assets/scripts/jquery.min.js")}}"></script>
	<script src="{{asset("/admin/assets/scripts/modernizr.min.js")}}"></script>
	<script src="{{asset("/admin/assets/plugin/bootstrap/js/bootstrap.min.js")}}"></script>
	<script src="{{asset("/admin/assets/plugin/nprogress/nprogress.js")}}"></script>
	<script src="{{asset("/admin/assets/plugin/waves/waves.min.js")}}"></script>

	<script src="{{asset("/admin/assets/scripts/main.min.js")}}"></script>
</body>
</html>
