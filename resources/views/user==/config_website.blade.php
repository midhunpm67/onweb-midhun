@extends('layouts.admin_layout')


@section('page_data')
    <div id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">

                <div class="col-xs-12">
                    <div class="box-content">
                        <h3 class="box-title">Create Website</h3>
                        <!-- /.box-title -->

                        <!-- /.dropdown js__dropdown -->
                        <form class="reply-form" id="websiteRegForm" method="POST" action="{{ route("createWebsite") }}">
                            <div class="row">

								<?php

								foreach($page_fields as $section_key => $section_val) {
									if(is_array($section_val)) {
										?>
										<h4 class="box-title">Create Website</h4>
										<?php
										
										foreach($section_val as $group_key => $group_val) {
											// foreach($group_val as $field_key => $field_val) {
												?>
												<div class="col-md-12">
													<div class="padding-20">
														<div class="m-t-20">
															<h5><b><?= $group_key ?></b></h5>
															<input type="text" id="<?= $group_val ?>" name="<?= $group_val ?>" class="form-control convert-slug">
														</div>
													</div>
												</div>
												<?php
												
											// }
										}
									}
									else {
										?>
										<div class="col-md-12">
											<div class="padding-20">
												<div class="m-t-20">
													<h5><b><?= $section_key ?></b></h5>
													<input type="text" id="<?= $section_val ?>" name="<?= $section_val ?>" class="form-control convert-slug">
												</div>
											</div>
										</div>
										<?php
									}
								}

									
								?>

                                <div class="col-md-12">
                                    <div class="padding-20">
                                        <div class="m-t-20">
                                            <h5><b>Website Name</b></h5>
                                            <input type="text" id="website_name" name="website_name" class="form-control convert-slug">
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
    </div>
    <!--/#wrapper -->
    <script>
        function subCate(sel) {
            var catId = sel.value;
            jQuery.ajax({
                url: "{{ url('/admin/get/subcat') }}",
                method: 'get',
                data: {
                    catId: catId,
                },
                success: function(result) {
                    $("#subcategory").html(result);
                }
            });
        }

        function Template(subcat) {
            var subcatId = subcat.value;
            var catId = $("#category").val();
            jQuery.ajax({
                url: "{{ url('/admin/get/template') }}",
                method: 'get',
                data: {
                    catId: catId,
                    subcatId: subcatId,
                },
                success: function(result) {
                    $("#template").html(result);
                }
            });
        }
    </script>
@endsection
