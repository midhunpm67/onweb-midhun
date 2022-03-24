@extends('layouts.admin_layout')


@section('page_data')
<div id="wrapper">
	<div class="main-content">
		<div class="row small-spacing">
			


		
			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Website information</h4>
					<!-- /.box-title -->
				
					<!-- /.dropdown js__dropdown -->
                    <form class="reply-form" id="websiteRegForm" method="POST" action="/create/website-data">
						@csrf
					<div class="row">
                        
						<!--<div class="col-md-6">
							<div class="padding-20">
								<h5><b>website Name</b></h5>
								<input type="text" class="form-control" maxlength="25" name="website_name" id="website_name" />
							</div>
						</div>-->
						<!-- /.col-md-6 -->

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
								<h5><b>Template</b></h5>
								<select class="form-control select-picker valid" data-validation="required" data-validation-error-msg="Choose a tempate" id="template" name="template">
								<option value="0">Select Sub Category</option>
								</select>
                               
							</div>
						</div>
						
                        <div class="col-md-12">
							<div class="padding-20">
								
							
                                <div class="m-t-20">
									<h5><b>website Layout</b></h5>
									<textarea id="web_content"  name="web_content" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
								</div>
							</div>
						</div>
                        <div class="col-md-6">
							<div class="padding-20">
                       
                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light save-btn">SUBMIT</button> 
                    
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