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
                        <h6>Support <span>/ Conversations</span></h6>
                    </div>
                </div>
                <!--Page Heading End -->

            </div><!-- Page Headings End -->

            <div class="allstd-page blog" id="navbarscroll">

                <div class="textbtn">
                    <h2>Conversations</h2>

                </div>

                <table class="table table-striped custab">
                    <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th> Date</th>
                            <th>Title</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">1</td>
                            <td>dd/mm/yyyy</td>
                            <td>Loreum</td>
                            <td>abc</td>
                            <td>pqr</td>
                            <td class="text-right"><a href="conversations.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">2</td>
                            <td>dd/mm/yyyy</td>
                            <td>Loreum</td>
                            <td>abc</td>
                            <td>pqr</td>
                            <td class="text-right"><a href="conversations.php"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                
                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>

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
    <!-- END MAIN CONTAINER -->

    @include('admin.layouts.footer')
