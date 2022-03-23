@extends('layouts.admin_layout')


@section('page_data')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			


		
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Template information</h4>
					<!-- /.box-title -->
				
					<!-- /.dropdown js__dropdown -->
                    <form class="reply-form" id="templateRegForm" method="POST" action="/create/template-data">
					<div class="row">
                        
						<div class="col-md-6">
							<div class="padding-20">
								<h5><b>Template Name</b></h5>
								<input type="text" class="form-control" maxlength="25" name="template_name" id="template_name" />

								
							
							</div>
						</div>
						<!-- /.col-md-6 -->

						<div class="col-md-6">
							<div class="padding-20">
								<h5><b>Slug Url</b></h5>
								<input type="text" class="form-control" maxlength="25" name="slug_url" id="slug_url" />

								
                               
							</div>
						</div>
                        <div class="col-md-12">
							<div class="padding-20">
								
							
                                <div class="m-t-20">
									<h5><b>Template Layout</b></h5>
									<textarea id="template_layout"  name="template_layout" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
								</div>
							</div>
						</div>
                        <div class="col-md-6">
							<div class="padding-20">
                       
                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">SUBMIT</button> 
                    
                    </div>
                        </div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
                </form>
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
@endsection