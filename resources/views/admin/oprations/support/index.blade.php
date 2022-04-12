@include('admin.layouts.app')
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10 mt-30">

                <!-- Page Heading Start-->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h6>Support <span>/ Support Desk</span></h6>
                    </div>
                </div>
                <!--Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="allstd-page blog" id="navbarscroll">

                <div class="textbtn">
                    <h2>Support Desk</h2>
                </div>

                <table class="table table-striped custab">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sending Date</th>
                            <th>Subject</th>
                            <th>User</th>
                            <th>Status</th>
                            <th>Last reply</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>dd/mm/yyyy</td>
                            <td>Subject</td>
                            <td>User</td>
                            <td>Pending</td>
                            <td>dd/mm/yyyy</td>
                            <td class="text-center"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>dd/mm/yyyy</td>
                            <td>Subject</td>
                            <td>User</td>
                            <td>Pending</td>
                            <td>dd/mm/yyyy</td>
                            <td class="text-center"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
