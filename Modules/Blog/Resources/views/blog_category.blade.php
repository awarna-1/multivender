@include('admin.layouts.app')

<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            <div class="row justify-content-between align-items-center mb-10 mt-30">

                <!-- Page Heading Start-->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h6>Blog <span>/ Blog Category</span></h6>
                    </div>
                </div>
                <!--Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="allstd-page blog" id="navbarscroll">

                <div class="textbtn">
                    <h2>All Blog Categories</h2>
                    <a href="{{asset('admin/new_category')}}"><input type="submit" value="Add New Categories"></a>
                </div>

                <table class="table table-striped custab">
                    <thead>
               
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th class="text-right">Action</th>
                        </tr>
                      
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                    @foreach($data as $val)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$val->name}}</td>
                            <td class="text-right"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="{{asset('admin/Blog/edit/'.$val->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="{{asset('admin/Blog/Delete/'.$val->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                        @endforeach
                            
                    </tbody>
                </table>


            </div>



            <!-- Footer Section Start -->
            <!-- <div class="footer-section">
                <div class="container-fluid">

                    <div class="footer-copyright text-center">
                        <p class="text-body-light">
                            2022 &copy;
                            <a href="#">Multivendors</a>
                        </p>
                    </div>

                </div>
            </div> -->
            <!-- Footer Section End -->




        </div>
        <!--  END CONTENT AREA  -->

    </div>
</div>
    <!-- END MAIN CONTAINER -->
    @include('admin.layouts.footer')