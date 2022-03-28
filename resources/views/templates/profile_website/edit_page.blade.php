@extends('layouts.admin_layout')


@section('page_data')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <div id="wrapper">
        <div class="main-content">
            <div class="row small-spacing">

                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Edit Page</h4>
                        <!-- /.box-title -->

                        <!-- /.dropdown js__dropdown -->
                        @if(empty($websiteData))
                        <form class="reply-form" id="websiteDataForm" method="POST" action="{{ route("personal_website.insert") }}">
                            @csrf
                            <div class="row">

                                <!-- /.col-md-6 -->
                                <input type="hidden" id="web_id" name="web_id" value="{{$id}}" class="form-control convert-slug">

                                <div class="col-md-6">
                                    <div class="padding-20">
                                        <div class="m-t-20">
                                            <h5><b>Title</b></h5>
                                            <input type="text" id="title" name="title" class="form-control convert-slug">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="padding-20">
                                        <div class="m-t-20">
                                            <h5><b>Name</b></h5>
                                            <input type="text" id="name" name="name" class="form-control convert-slug">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="padding-20">
                                        <div class="m-t-20">
                                            <h5><b>Designation</b></h5>
                                            <input type="text" id="designation" name="designation" class="form-control convert-slug">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="padding-20">
                                        <div class="m-t-20">
                                            <h5><b>About</b></h5>
                                            <textarea name="about"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'about' );
                                            </script>
{{--                                            <input type="text" id="website_name" name="website_name" class="form-control convert-slug">--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="padding-20">
                                        <div class="m-t-20">
                                            <h5><b>Link #1</b></h5>
                                            <input type="text" id="link_1" name="link_1" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="padding-20">
                                        <div class="m-t-20">
                                            <h5><b>Link #2</b></h5>
                                            <input type="text" id="link_2" name="link_2" class="form-control">
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
                        @else
                        <form class="reply-form" id="websiteDataForm" method="POST" action="{{ route("personal_website.update") }}">
                                @csrf
                                <div class="row">

                                    <!-- /.col-md-6 -->
                                    <input type="hidden" id="id" name="id" value="{{$websiteData->id}}" class="form-control convert-slug">

                                    <div class="col-md-6">
                                        <div class="padding-20">
                                            <div class="m-t-20">
                                                <h5><b>Title</b></h5>
                                                <input type="text" id="title" name="title" value="{{$websiteData->title}}" class="form-control convert-slug">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="padding-20">
                                            <div class="m-t-20">
                                                <h5><b>Name</b></h5>
                                                <input type="text" id="name" name="name" value="{{$websiteData->name}}" class="form-control convert-slug">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="padding-20">
                                            <div class="m-t-20">
                                                <h5><b>Designation</b></h5>
                                                <input type="text" id="designation" name="designation" value="{{$websiteData->designation}}" class="form-control convert-slug">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="padding-20">
                                            <div class="m-t-20">
                                                <h5><b>About</b></h5>
                                                <textarea name="about">{{$websiteData->designation}}</textarea>
                                                <script>
                                                    CKEDITOR.replace( 'about' );
                                                </script>
                                                {{--                                            <input type="text" id="website_name" name="website_name" class="form-control convert-slug">--}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="padding-20">
                                            <div class="m-t-20">
                                                <h5><b>Link #1</b></h5>
                                                <input type="text" id="link_1" name="link_1" value="{{$websiteData->link_1}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="padding-20">
                                            <div class="m-t-20">
                                                <h5><b>Link #2</b></h5>
                                                <input type="text" id="link_2" name="link_2" value="{{$websiteData->link_2}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="padding-20">
                                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">UPDATE</button>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->
                            </form>
                        @endif
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
