@include('admin.layouts.app')
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">

            

            <div class="allstd-page addblog pt-4">


                <div class="row">
                    
                    <div class="col-sm-8">
                        <ul class="nav nav-pills mb-3 ecom-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Installed Addon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Available Addon</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <a href="Install-Update-Addon.php"><button class="btn add-btn btn-primary mb-3">install/Update Addon</button></a>
                    </div>

                </div>

                <div class="row">
                    


                    <div class="col-12">
                        
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                
                                <div id="all-intalled-addon" class="col-sm-8 offset-sm-2">
                                    <div class="all-intalled-addon pdt-infor">
                                        <div class="addon-container">
                                            <div class="col-3">
                                                <img class="w-100" src="admin-assets/images/brand.jpg">
                                            </div>
                                            <div class="col-7">
                                                <p>Offline Payment <span>Version 13.0</span></p>
                                            </div>
                                            <div class="col-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="addon-container">
                                            <div class="col-3">
                                                <img class="w-100" src="admin-assets/images/brand.jpg">
                                            </div>
                                            <div class="col-7">
                                                <p>Offline Payment <span>Version 13.0</span></p>
                                            </div>
                                            <div class="col-2">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end of all-intalled-addon-->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="card-deck">
                                    <div class="card">
                                        <img class="card-img-top" src="admin-assets/images/products.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Title goes here</h5>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="card-footer" style="display: flex;">
                                            <div class="w-40">
                                                <h4 class="mt-2">Rs.1800</h4>
                                            </div>
                                            <div class="w-30"><button class="btn btn-secondary">Preview</button></div>
                                            <div class="w-30"><button class="btn btn-primary pull-right">Purchase</button></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top" src="admin-assets/images/products.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Title goes here</h5>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="card-footer" style="display: flex;">
                                            <div class="w-40">
                                                <h4 class="mt-2">Rs.1800</h4>
                                            </div>
                                            <div class="w-30"><button class="btn btn-secondary">Preview</button></div>
                                            <div class="w-30"><button class="btn btn-primary pull-right">Purchase</button></div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top" src="admin-assets/images/products.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Title goes here</h5>
                                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="card-footer" style="display: flex;">
                                            <div class="w-40">
                                                <h4 class="mt-2">Rs.1800</h4>
                                            </div>
                                            <div class="w-30"><button class="btn btn-secondary">Preview</button></div>
                                            <div class="w-30"><button class="btn btn-primary pull-right">Purchase</button></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>


            </div>




        </div>
        <!--  END CONTENT AREA  -->




    </div>
    <!-- END MAIN CONTAINER -->

    @include('admin.layouts.footer')
