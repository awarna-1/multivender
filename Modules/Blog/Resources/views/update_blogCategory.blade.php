@include('admin.layouts.app')

<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content" style="height:600px;">



            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10 mt-30">

                <!-- Page Heading Start-->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h6>Blog <span>/ New Category</span></h6>
                    </div>
                </div>
                <!--Page Heading End -->

            </div>

            <div class="allform-page addblog">

                <h2>Blog Category Information</h2>

                <div class="row">
                    <div class="col-md-12">
                        <form action="{{url('admin/blog/update')}}" method="POST">
                             @csrf
                          
                            <div class="form-group row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Name </label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="title" placeholder="Name" value="{{$value['name']}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Updatae">
                            </div>
                        </form>
                    </div>




                </div>

            </div>

        </div>
        <!--  END CONTENT AREA  -->


        <!-- Footer Section Start -->
        <div class="footer-section" style="width:100%;">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">
                        2022 &copy;
                        <a href="#">Multivendors</a>
                    </p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>
    <!-- END MAIN CONTAINER -->

    @include('admin.layouts.footer')