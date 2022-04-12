@include('admin.layouts.app')

<style>
    .form-group input {
    border: 1px solid #ced4da;
    padding: 7px 10px;
    width: 100%;
    color: #818588;
}
</style>

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">

        <div class="order_details">
            <h2 class="pb-2">Order Details</h2>
            <div class="row" style="width: 100%;display: block;">
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-hold-tab" data-toggle="tab" href="#nav-hold" role="tab" aria-controls="nav-hold" aria-selected="true" onclick="getOrderCard(1)">On Hold </a>
                            <a class="nav-item nav-link" id="nav-pending-tab" data-toggle="tab" href="#nav-pending" role="tab" aria-controls="nav-pending" aria-selected="false" onclick="getOrderCard(2)">Pending</a>
                            <!-- <a class="nav-item nav-link" id="nav-ready-tab" data-toggle="tab" href="#nav-ready"
                                role="tab" aria-controls="nav-ready" aria-selected="false">Ready to Ship</a>                                     -->
                            <a class="nav-item nav-link" id="nav-ship-tab" data-toggle="tab" href="#nav-ship" role="tab" aria-controls="nav-ship" aria-selected="false" onclick="getOrderCard(3)">Shipped</a>
                            <a class="nav-item nav-link" id="nav-trans-tab" data-toggle="tab" href="#nav-trans" role="tab" aria-controls="nav-trans" aria-selected="false" onclick="getOrderCard(4)">Shipped by In-Transit</a>
                            <a class="nav-item nav-link" id="nav-deli-tab" data-toggle="tab" href="#nav-deli" role="tab" aria-controls="nav-deli" aria-selected="false" onclick="getOrderCard(5)">Deliver</a>
                            <a class="nav-item nav-link" id="nav-rto-tab" data-toggle="tab" href="#nav-rto" role="tab" aria-controls="nav-rto" aria-selected="false" onclick="getOrderCard(6)">RTO</a>
                            <a class="nav-item nav-link" id="nav-cancel-tab" data-toggle="tab" href="#nav-cancel" role="tab" aria-controls="nav-cancel" aria-selected="false" onclick="getOrderCard(7)">Cancelled</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-hold" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="border">
                                <div class="filter d-flex pb-2">

                                    <h5 style="width: 75%;">Filter</h5>
                                    <form action="/action_page.php">
                                        <input type="text" placeholder="Search SKU, Product ID" name="search"
                                            style="width: 240px;padding: 6px 10px 5px;border: 1px solid #ced4da">
                                        <button type="submit"
                                            style="background: #000;color: #fff;padding: 5px 10px 4px;position: relative;left: -6px;"><i
                                                class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-3">
                                        <form>
                                            <label for="birthday">Order Date Min</label><br>
                                            <input type="date" id="hold_min_date" oninput="getOrderCard(1)">
                                        </form>
                                    </div>
                                    <div class="form-group col-md-3 ">
                                        <form>
                                            <label for="birthday">Order Date Max</label><br>
                                            <input type="date" id="hold_max_date" oninput="getOrderCard(1)">
                                        </form>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="form-group col-md-2 pt-3">
                                        <input type="submit" value="Clear" class="clear">
                                    </div>
                                    <div class="form-group col-md-2 pt-3">
                                        <input type="submit" value="Filter">
                                    </div>

                                </div>
                                <!--filter top end -->

                                <div class="pdt_blog mb-0">
                                    <div class="d-flex">
                                        <div class="form-check" style="width: 70%;">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                            Check all to Download your products
                                        </div>
                                        <input type="submit" value="Download all Label" style="width: 200px;">
                                    </div><!--all download end -->
                                    
                                    <!--add product card here -->
                                    
                                </div>
                            </div>
                        </div><!-- 1st tab end-->


                        <div class="tab-pane fade" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="download">Download Invoice Details Excel</button>
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="notice">Notices<span>3 New</span></button>
                                </div>
                            </div>
                            <div class="border">
                                <div class="filter d-flex pb-3">
                                    <h5 style="width: 75%;">Filter </h5>
                                    <input type="text" placeholder="Search SKU, Product ID" id="pending_search"
                                        style="width: 240px;padding: 6px 10px 5px;border: 1px solid #ced4da" onmouseout="getOrderCard(2)">
                                    <button type="submit"
                                        style="background: #000;color: #fff;padding: 5px 10px 4px;position: relative;left: -6px;"><i
                                            class="fa fa-search"></i></button>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-3">
                                        <label for="dispahced_min">Order Date Min</label><br>
                                        <input type="date" id="pending_min_date" name="pending_min_date" onchange="getOrderCard(2)">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="dispahced_max">Order Date Min</label><br>
                                        <input type="date" id="pending_max_date" name="pending_max_date" onchange="getOrderCard(2)">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="dispached_min">Dispatch Date Min</label><br>
                                        <input type="date" id="dispached_min" name="dispached_min" onchange="getOrderCard(2)">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="pending_dispached_max">Dispatch Date Max</label><br>
                                        <input type="date" id="dispached_max" name="dispached_max" onchange="getOrderCard(2)">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="id">Sub Order Num</label>
                                        <input type="text" class="form-control" id="sub_order_num" placeholder="Sub Order Num"
                                            onmouseout="getOrderCard(2)">
                                    </div>


                                    <div class="form-group col-md-2 pt-3">
                                        <input type="submit" value="Clear" class="clear">
                                    </div>
                                    <div class="form-group col-md-2 pt-3">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>

                                <div class="pdt_blog mb-0">
                                    <div class="d-flex">
                                        <div class="form-check" style="width: 70%;">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                            Check all to Download your products
                                        </div>
                                        <input type="submit" value="Download all Label" style="width: 200px;">
                                    </div><!--all download end -->

                                    <div id="card_box2">
                                        <h4 class=" mt-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                        </h4>
                                        <h5>1 Products</h5>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                            </div>

                                            <div class="col-md-6">
                                                <h6>Products Name</h6>
                                                <p>Sub Order Num: 64447097096</p>
                                                <p>Size: 0-6 Months</p>
                                                <p>Product SKU: ct30aYN9</p>
                                                <!-- <p>Product Id: 1G2I4C6G</p> -->
                                            </div>

                                            <div class="col-md-3">
                                                <h3 class="quality">Customer Name</h3>
                                                <h3 class="quality">Customer Address</h3>
                                                <h3 class="quality">Qty: 1</h3>
                                                <h3 class="quality">Billing Price</h3>
                                            </div>

                                        </div><!--end 1st row -->
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                            </div>

                                            <div class="col-md-6">
                                                <h6>Products Name</h6>
                                                <p>Sub Order Num: 64447097096</p>
                                                <p>Size: 0-6 Months</p>
                                                <p>Product SKU: ct30aYN9</p>
                                                <!-- <p>Product Id: 1G2I4C6G</p> -->
                                            </div>

                                            <div class="col-md-3">
                                                <h3 class="quality">Customer Name</h3>
                                                <h3 class="quality">Customer Address</h3>
                                                <h3 class="quality">Qty: 1</h3>
                                                <h3 class="quality">Billing Price</h3>
                                            </div>

                                        </div><!--end 2nd row -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- 2nd tab end-->


                        <div class="tab-pane fade" id="nav-ship" role="tabpanel" aria-labelledby="nav-ship-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="download">Download Invoice Details Excel</button>
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="notice">Notices<span>3 New</span></button>
                                </div>
                            </div>
                            <div class="pdt_blog mb-0">
                                <div class="d-flex">
                                    <div class="form-check" style="width: 70%;">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                        Check all to Download your products
                                    </div>
                                    <input type="submit" value="Download all Label" style="width: 200px;">
                                </div><!--all download end -->
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--1st product end -->
                            </div>
                            <div class="pdt_blog mb-0">
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--1st product end -->
                            </div>
                        </div><!-- 3rd tab end-->


                        <div class="tab-pane fade" id="nav-trans" role="tabpanel" aria-labelledby="nav-trans-tab">
                            <div class="pdt_blog mb-0">
                                <div class="d-flex">
                                    <div class="form-check" style="width: 70%;">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                        Check all to Download your products
                                    </div>
                                    <input type="submit" value="Download all Label" style="width: 200px;">
                                </div><!--all download end -->
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--1st product end -->
                            </div>
                            <div class="pdt_blog mb-0">
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--1st product end -->
                            </div>
                        </div><!-- 4th tab end-->


                        <div class="tab-pane fade" id="nav-rto" role="tabpanel" aria-labelledby="nav-rto-tab">
                            <div class="pdt_blog mb-0">
                                <div class="d-flex">
                                    <div class="form-check" style="width: 70%;">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                        Check all to Download your products
                                    </div>
                                    <input type="submit" value="Download all Label" style="width: 200px;">
                                </div><!--all download end -->
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--1st product end -->
                            </div>
                            <div class="pdt_blog mb-0">
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--1st product end -->
                            </div>
                        </div><!-- 5th tab end-->


                        <div class="tab-pane fade" id="nav-deli" role="tabpanel" aria-labelledby="nav-about-tab">
                            <div class="pdt_blog mb-0">
                                <div class="d-flex">
                                    <div class="form-check" style="width: 70%;">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                        Check all to Download your products
                                    </div>
                                    <input type="submit" value="Download all Label" style="width: 200px;">
                                </div><!--all download end -->
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--1st product end -->
                            </div>
                            <div class="pdt_blog mb-0">
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="http://127.0.0.1:8000/admin-assets/images/products.jpg">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--1st product end -->
                            </div>
                        </div><!-- 6th tab end-->

                        <div class="tab-pane fade" id="nav-cancel" role="tabpanel" aria-labelledby="nav-cancel-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="download">Download Invoice Details Excel</button>
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="notice">Notices<span>3 New</span></button>
                                </div>
                            </div>
                            <div class="pdt_blog mb-0">
                                <div class="d-flex">
                                    <div class="form-check" style="width: 70%;">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                        Check all to Download your products
                                    </div>
                                    <input type="submit" value="Download all Label" style="width: 200px;">
                                </div><!--all download end -->
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{asset('admin-assets/images/products.jpg')}}">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--1st product end -->
                            </div>

                            <div class="pdt_blog mb-0">
                                <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span>
                                </h4>
                                <h5>1 Products</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{asset('admin-assets/images/products.jpg')}}">
                                    </div>

                                    <div class="col-md-6">
                                        <h6>Products Name</h6>
                                        <p>Sub Order Num: 64447097096</p>
                                        <p>Size: 0-6 Months</p>
                                        <p>Product SKU: ct30aYN9</p>
                                        <!-- <p>Product Id: 1G2I4C6G</p> -->
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class="quality">Customer Name</h3>
                                        <h3 class="quality">Customer Address</h3>
                                        <h3 class="quality">Qty: 1</h3>
                                        <h3 class="quality">Billing Price</h3>
                                    </div>

                                </div>
                                <!--2nd product end -->
                            </div>


                        </div><!-- 7th tab end-->

                    </div><!-- tab content end-->

                </div>
            </div>




        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <script>
        function getOrderCard(status) {
            var search;
            var max_date;
            var min_date;
            var dispached_min_date;
            var dispached_max_date;
            dispached_max_date = $('#dispached_max').val();
            dispached_min_date = $('#dispached_min').val();

            if (status == '1') {
                search = $('#hold_search').val();
                min_date = $('#hold_min_date').val();
                max_date = $('#hold_max_date').val();
            }
            if (status == '2') {
                search = $('#pending_search').val();
                min_date = $('#pending_min_date').val();
                max_date = $('#pending_max_date').val();

            }

            $.ajax({
                url: '/admin/orderfilter',
                type: 'post',
                data: {
                    " _token": '{{csrf_token()}}',
                    "status": status,
                    "max_date": max_date,
                    "min_date": min_date,
                    "dispached_max": dispached_max_date,
                    "dispached_min": dispached_min_date,
                    "search": search
                },
                success: function(result) {

                    if(status == '1'){
                         $('#card_box1').html(result);
                    }
                    if(status == '2'){
                         $('#card_box2').html(result);
                    }                
                }

            })

        }
    </script>

    @include('admin.layouts.footer')