@include('admin.layouts.app')

<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10 mt-30">
            @if ($errors->any())
                <div class="alert alert-danger">
                     <ul>
                       @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                       @endforeach
                      </ul>
                </div>
                @endif
                <!-- Page Heading Start-->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h6>Blog <span>/ New Blog Post</span></h6>
                    </div>
                </div>
                <!--Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="allform-page addblog">

                <h2>Blog Information</h2>

                <div class="row">
                    <div class="col-md-12">
                        <form action="{{asset('admin/create_blog')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-3">
                                <label for="title" class="col-sm-2 col-form-label" >Blog Title <span>*</span> </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Blog Title" name="title">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="category" class="col-sm-2 col-form-label">Category <span>*</span> </label>
                                <div class="col-sm-10">
                                    <select class="form-control select2" name="category">
                                        <option>---</option>
                                        <option value="1">Car</option>
                                        <option value="2">Bike</option>
                                        <option value="3">Scooter</option>
                                        <option value="3">Cycle</option>
                                        <option value="4">Horse</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="slug" class="col-sm-2 col-form-label">Slug <span>*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="slug" placeholder="Slug" name="slug">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="banner" class="col-sm-2 col-form-label">Banner</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control file-upload-text" disabled=""
                                        placeholder="Choose file" >
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default file-upload-btn">
                                            Browse...
                                            <input type="file" class="file-upload" name ="banner_1">
                                        </button>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="desc" class="col-sm-2 col-form-label">Short Description <span>*</span>
                                </label>
                                <div class="col-sm-10">
                                    <textarea rows="6" cols="150" name="short_description"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="desc" class="col-sm-2 col-form-label">Description <span>*</span></label>
                                <div class="col-sm-10">
                                <textarea rows="6" cols="150" name="full_description"></textarea>
                                </div>
                            </div>

           
                            <div class="form-group row">
                                <label for="banner" class="col-sm-2 col-form-label">Banner </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control file-upload-text" disabled=""
                                        placeholder="Choose file">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default file-upload-btn">
                                            Browse...
                                            <input type="file" class="file-upload" name="banner_2">
                                        </button>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="desc" class="col-sm-2 col-form-label">Meta Description * </label>
                                <div class="col-sm-10">
                                    <textarea rows="6" cols="150" name="meta_description"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="keyword" class="col-sm-2 col-form-label">Meta Keywords </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Meta Keywords" name="meta_keywords">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Save">
                            </div>

                    </div>

                </div>

            </div>

        </div>



    </div>
    <!-- END MAIN CONTAINER -->



    @include('admin.layouts.footer')
