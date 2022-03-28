@extends('layouts.admin_layout')


@section('page_data')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			<div class="col-md-12">
				<div class="box-content">
					<h4 class="box-title">Sub Category information</h4>
					<!-- /.box-title -->
                    <div class="row">
					@if (session('success'))
						<div class="alert alert-success text-center fw-bolder">
							<p>{{ session('success') }}</p>
						</div>
					@endif
					@if (session('error'))
						<div class="alert alert-danger text-center fw-bolder">
							<p>{{ session('error') }}</p>
						</div>
					@endif
           			 </div>
					<!-- /.dropdown js__dropdown -->
                    <form class="reply-form" id="subcategoryRegForm" method="POST" action="/admin/update/subcategory-data">
						@csrf
					<div class="row container">
						<div class="col-md-6">
							<select name="category" id="category" class="form-control">
								@foreach($category as $item)
								<option value="{{$item->id}}" @if( $item->id == $subcategory->id){{'selected'}} @endif>{{$item->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" maxlength="25" name="name" id="name" placeholder="Sub Category Name" value="{{$subcategory->name}}" />
						</div>
						<div>
                            <input type="hidden" name="id" id="id" value="{{$id}}">
						</div>
				    </div>
						<div class="col-md-12" style="margin-top:10px;" >
                        	<button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">SUBMIT</button> 
                        </div>
						<!-- /.col-md-6 -->
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