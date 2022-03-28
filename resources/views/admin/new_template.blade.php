@extends('layouts.admin_layout')


@section('page_data')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			


		
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Website information</h4>
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
                    <form class="reply-form" id="websiteRegForm" method="POST" action="{{route('createTemplate')}}">
						@csrf
					<div class="row">
                        
						<div class="col-md-6">
							<div class="padding-20">
								<h5><b>Template Name</b></h5>
								<input type="text" class="form-control" maxlength="25" name="template_name" id="template_name" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="padding-20">
								<h5><b>Slug URL</b></h5>
								<input type="text" class="form-control" maxlength="25" name="slug_url" id="slug_url" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="padding-20">
								<h5><b>Category</b></h5>
								<!--<input type="text" class="form-control" maxlength="25" name="slug_url" id="slug_url" />-->
								<select class="form-control select-picker valid" onchange="subCate(this);" data-validation="required" data-validation-error-msg="Choose a category" id="category" name="category">
								    <option value="0">Select Category</option>
									@foreach($category as $cat)
									<option value="{{ $cat->id }}">{{ $cat->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="padding-20">
								<h5><b>Sub Category</b></h5>
								<select class="form-control select-picker valid" onchange="Template(this);" data-validation="required" data-validation-error-msg="Choose a subcategory" id="subcategory" name="subcategory" >
								    <option value="0">Select Sub Category</option>
								</select>
							</div>
						</div>
                        <div class="col-md-6">
							<div class="padding-20">
                       
                        <button type="submit" class="btn btn-primary btn-sm">SUBMIT</button>
                    
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
			
			</ul>
		</footer>
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
<script>
	function subCate(sel)
	{
		var catId = sel.value;
		jQuery.ajax({
			url: "{{ url('/admin/get/subcat') }}",
			method: 'get',
			data: {
				catId: catId,
			},
			success: function(result){
				$("#subcategory").html(result);
			}});
	}
	function Template(subcat)
	{
		var subcatId = subcat.value;
		var catId = $("#category").val();
		jQuery.ajax({
			url: "{{ url('/admin/get/template') }}",
			method: 'get',
			data: {
				catId: catId,
				subcatId: subcatId,
			},
			success: function(result){
				$("#template").html(result);
			}});
	}
	// $(document).on('click', '.save-btn', function() {
	// 	      alert('template');
    //             var Category = document.getElementById('category').value;
	// 			var subCat = document.getElementById('subCat').value;
	// 			var template = document.getElementById('template').value;
		
    //             if (id) {
    //                 $.ajax({
    //                     type: 'GET',
    //                     url: "{{ route('category-delete') }}",
    //                     data: {
    //                         'id': id,
    //                         '_token': $('meta[name="csrf-token"]').attr('content')
    //                     },
    //                     success: function(response) {
	// 						swal("Deleted!", "", "");
	// 						location.reload();
    //                     }
    //                 });
    //             }

    //         });
</script>
@endsection