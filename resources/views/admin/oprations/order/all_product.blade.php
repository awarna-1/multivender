@include('admin.layouts.app')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')
    <div id="content" class="main-content wallet">

        <div class="allpdt">
            <h2 class="pb-4"> Order / All Products</h2>
            <div class="container-fluid">
                <!-- <hr> -->
                <div class="head d-flex">
                     <h3 style="width: 65%;">Listings Management</h3>
                     <form style="width: 35%;">
                        <input type="text" placeholder="Search for FSN, Title or SKU ID" name="search">
                        <button type="submit" class="srch"><i class="fa fa-search"></i></button>
                        <a href="#" class="btn btn-primary add">Add New Listing</a>
                    </form>
                </div><!-- 1st sec-->
                <div class="headdown d-flex">
                    <h6 class="active">24<br><span> Active Listings</span></h6>
                    <h6>0<br> <span>Ready for Activation</span> </h6>
                    <h6>4<br><span> Blocked Listings</span></h6>
                    <h6>0<br><span> Inactive Listings</span></h6>
                </div><!-- 2nd sec-->
                <div class="headbtm d-flex pt-3 pb-3">
                    <button type="submit" class="active">All Listings 24</button>
                    <button type="submit" >Catalog Recommendation 2</button>
                    <button type="submit" >Price Recommendation 4</button>
                </div><!-- 3rd sec-->
                <div class="tabletop d-flex pt-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                            Bulk Action 
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Request Download 
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;border-color: #007bff;">
                            Upload 
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;margin-right: 550px;">
                            Download Ready
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                            Sort By 
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                            Customize Colums 
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div><!-- 4th sec-->
                <div class="filterbtn d-flex mt-3">
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                        Category 
                    </button>
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                            Brand
                    </button>
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                            Listing Price
                    </button>
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                           Fassured
                    </button>
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                            Fulfillment
                    </button>
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                            Stock
                    </button>
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                            Size Chart
                    </button>
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                           Procurement Type
                    </button>
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                        Procurement SLA 
                    </button>
                    <button class="btn btn-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #fff;color: #545b62;">
                        Flipkart Plus
                    </button>
                    <button class="btn btn-secondary mr-2" type="button" style="background: #fff;color: #545b62;">
                        Apply
                    </button>
                    
                </div><!-- 5th sec-->
                <div class="list-table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"><i class="fa fa-caret-down" aria-hidden="true"></i></label>
                                </div>
                            </th>
                            <th>Product Details</th>
                            <th>Listing Price</th>
                            <th>Sort</th>
                            <th>Category</th>
                            <th>Fullfilment</th>
                            <th>Additional Info</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"></label>
                                </div>
                            </th>
                            <td><img src="{{asset('admin-assets/images/products.jpg')}}" style="width: 50px;"> Product Name<br><span style="padding-left: 55px;font-size: 12px;">SKU ID: 8757</span></td>
                            <td>₹ 1234.79
                            <a href="#" class="view rounded-pill"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </td>
                            <td>111<a href="#" class="sort-add rounded-pill"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </td>
                            <td>Category 1</td>
                            <td>Seller only</td>
                            <td><i class="fa fa-mobile mr-3" aria-hidden="true"></i><i class="fa fa-desktop" aria-hidden="true"></i></td>
                            <td>
                                <div class="dropdown">
                                    <button class="dropbtn">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M10 10h4v4h-4zm0-6h4v4h-4zm0 12h4v4h-4z"/></svg>
                                    </button>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div><!-- 6th sec-->
            </div>
        </div>
    </div>
</div>


    <div class="view-popup">
        <form>
            <h6>Heading</h6>
           <p> Apply you code here</p>
            <input type="text" id="fname" name="fname"><br>
            <a href="#" class="btn btn-primary view-permission mt-2">Apply</a>
        </form>
      </div><!-- for listing price-->

      <div class="sort-popup">
        <form>
            <h6>Heading</h6>
           <p> Apply you code here</p>
            <input type="text" id="fname" name="fname"><br>
            <a href="#" class="btn btn-primary sort-permission mt-2">Apply</a>
        </form>
      </div><!-- for sort-->


</div>


<script>
  
  $('.view').click(function(){
    $('.view-popup').addClass('show');
  })
  $('.view-permission').click(function(){
    $('.view-popup').removeClass('show');
  })
 
</script> 

<script>
  $('.sort-add').click(function(){
    $('.sort-popup').addClass('show');
  })
  $('.sort-permission').click(function(){
    $('.sort-popup').removeClass('show');
  })
</script> 

<style>
    .view-popup.show {
    transform: translate(308%,-112%) scale(1);
}
.view-popup {
   
    position: absolute;
    border: 1px solid #eaeaea;
    background: #f4f4f4;
    border-radius: 10px;
    padding: 15px;
    display: block;
    /* justify-content: center; */
    z-index: 50;
    transform: translate(-50%,-50%) scale(0);
    /* left: 48%; */
    /* top: 9px; */
}
.sort-popup.show {
    transform: translate(380%,-112%) scale(1);
}
.sort-popup {
    position: absolute;
    border: 1px solid #eaeaea;
    background: #f4f4f4;
    border-radius: 10px;
    padding: 15px;
    display: block;
    /* justify-content: center; */
    z-index: 50;
    transform: translate(-50%,-50%) scale(0);
    /* left: 48%; */
    /* top: 9px; */
}
.list-table i.fa.fa-pencil {
    visibility: hidden;
    background: #fff;
    color: #000;
}
.list-table .table tr td a:hover i.fa.fa-pencil {
    visibility: visible;
}

</style>

@include('admin.layouts.footer')
