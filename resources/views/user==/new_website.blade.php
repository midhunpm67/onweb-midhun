@extends('layouts.admin_layout')


@section('page_data')
    <div id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">

                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Create Website</h4>
                        <!-- /.box-title -->

                        <!-- /.dropdown js__dropdown -->
                        <form class="reply-form" id="websiteRegForm" method="POST" action="{{ route("createWebsite") }}">
                            @csrf
                            <div class="row">

                                <!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="padding-20">
                                        <h5><b>Category</b></h5>
                                        <!--<input type="text" class="form-control" maxlength="25" name="slug_url" id="slug_url" />-->
                                        <select class="form-control select-picker valid" onchange="subCate(this);"
                                            data-validation="required" data-validation-error-msg="Choose a category"
                                            id="category" name="category">
                                            <option value="0">Select Category</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="padding-20">
                                        <h5><b>Sub Category</b></h5>
                                        <select class="form-control select-picker valid" onchange="Template(this);"
                                            data-validation="required" data-validation-error-msg="Choose a subcategory"
                                            id="subcategory" name="subcategory">
                                            <option value="0">Select Sub Category</option>
                                            @foreach ($subcategory as $scat)
                                                <option value="{{ $scat->id }}">{{ $scat->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="padding-20">
                                        <h5><b>Template</b></h5>
                                        <select class="form-control select-picker valid" data-validation="required"
                                            data-validation-error-msg="Choose a tempate" id="theme_id" name="theme_id">
                                        </select>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="padding-20">
                                        <div class="m-t-20">
                                            <h5><b>Website Name</b></h5>
                                            <input type="text" id="website_name" name="website_name" class="form-control convert-slug">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="padding-20">
                                        <div class="m-t-20">
                                            <h5><b>Website Slug URL</b></h5>
                                            <input type="text" id="website_name_slug" name="website_name_slug" class="form-control">
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
                    $("#theme_id").html(result);
                }
            });
        }
    </script>
@endsection
