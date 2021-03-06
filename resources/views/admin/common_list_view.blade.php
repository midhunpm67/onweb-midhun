@extends('layouts.admin_layout')


@section('page_data')
<div id="wrapper">
	<div class="main-content">




			<div class="row small-spacing">
				<div class="col-xs-12">
					<div class="box-content">


<h4 class="box-title"> {{$page_title}}</h4>
@if(Auth::user()->user_type == 'admin' && ($page_name !== 'website_listing'))
<a href="{!! $add_url !!}" class="btn btn-primary btn-sm waves-effect waves-light">Add</a><br><br>
@endif
@if(Auth::user()->user_type == 'user' && ($page_name !== 'template_listing'))
<a href="{!! $add_url !!}" class="btn btn-primary btn-sm waves-effect waves-light">Add</a><br><br>
@endif

						@if(count($page_data["list"]))


						<table id="example" class="table table-striped table-bordered display" style="width:100%">
							<thead>
								<tr>
									@foreach($page_data["list_title"] as $title_val)
									<th>{!! $title_val !!}</th>
									@endforeach
								</tr>
							</thead>
							<tfoot>
								<tr>
									@foreach($page_data["list_title"] as $title_val)
									<th>{!! $title_val !!}</th>
									@endforeach
								</tr>
							</tfoot>

							<tbody>

								@foreach($page_data["list"] as $row_key => $row_val)

									@php
									$col_count = count($row_val);

									// $list_href = "";
									// if(
									// 	isset($val["link"])
									// 	&& $val["link"] != ""
									// )
									// $link = $val["link"];
									// $list_href = "href=$link";
									@endphp

									<tr>
										@foreach($row_val as $col_key => $col_val)
										<td>{!! $col_val !!}</td>
										@endforeach
									</tr>


									@endforeach

							</tbody>
						</table>
					</div>
					<!-- /.box-content -->
				</div>

			</div>


		@endif
		


		<!-- /.row small-spacing -->
		<!-- <footer class="footer">
			<ul class="list-inline">
				<li>2016 © NinjaAdmin.</li>
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Terms</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</footer> -->


		
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
@endsection
