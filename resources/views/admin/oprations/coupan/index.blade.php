@include('admin.layouts.app')
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10 mt-30">

                <!-- Page Heading Start-->
                <div class="col-12 col-lg-auto mb-2 pt-4 ">
                    <div class="page-heading">
                        <h6>Coupon</h6>
                    </div>
                </div>
                <!--Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="allstd-page blog" id="navbarscroll">

                <div class="textbtn">
                    <h2>All Coupons</h2>
                    <a href="add_coupon.php"> <input type="submit" value="Add Coupon"></a>
                </div>

                <table class="table table-striped custab">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Type</th>
                            <th>Start Date</th>
                            <th class="text-center">End Date</th>
                            <th>Status</th>
                            <th class="text-center">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>CODE100</td>
                            <td>coupon Type</td>
                            <td>12 July 2022</td>
                            <td>15 July 2022</td>
                            <td class="text-center">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label><br>
                                <span class="pr-2"><a href="#">Deactive</a></span><span><a href="#">Active</a></span>
                            </td>
                            <td class="text-center">
                                <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>CODE100</td>
                            <td>coupon Type</td>
                            <td>12 July 2022</td>
                            <td>15 July 2022</td>
                            <td class="text-center">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label><br>
                                <span class="pr-2"><a href="#">Deactive</a></span><span><a href="#">Active</a></span>
                            </td>
                            <td class="text-center">
                                <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>


            </div>




        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    @include('admin.layouts.footer')
