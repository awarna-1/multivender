<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

@include('admin.layouts.app')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')
    <div id="content" class="main-content wallet" style="padding-top: 35px;">

        <div class="order-details">
        <!-- <h2> Admin / Order Details</h2> -->

            <div class="container-fluid "> 
                <div class="row">
                    <div class="col-md-10 pt-5">
                        <h3>Order Details <span class="id">Order ID:# <b>4523875628555555555</b></span> <small>Cash On Delivery </small>
                        <span class="seller"><em>|</em> Your Seller Order ID: #<a href="#">Edit</a></span></h3>
                        <div class="details-btn">
                            <button type="button" class="btn btn-secondary back">Go back to list Order </button>
                            <button type="button" class="btn btn-secondary bg-white">Print Packing Slip</button>
                            <button type="button" class="btn btn-secondary  bg-white">Print tax invoice</button>
                            <button type="button" class="btn btn-secondary  bg-white">Refund order </button>
                            <button type="button" class="btn btn-secondary  bg-white">Cancel order </button>
                            <button type="button" class="btn btn-secondary  bg-white text-black">Request a review </button>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="summary border ">
                                    <h5><b>Order Summary</b></h5>
                                    <div class="d-flex pt-3">
                                        <ul>
                                            <li>Ship by:</li>
                                            <li>Deliver by:</li>
                                            <li>Purchase date:</li>
                                        </ul>
                                    <!-- </div>
                                    <div class="col-md-6"> -->
                                        <!-- <h6>Sat 2,April, 2020</h6>
                                        <h6>Sat 2,April, 2020</h6>
                                        <h6>Sat, 1 April, 2020, 10:00 AM IST</h6> -->
                                        <ul class="bold">
                                            <li class="date">Sat 2,April, 2020</li>
                                            <li>Sat 2,April, 2020</li>
                                            <li>Sat, 1 April, 2020, 10:00 AM IST</li>
                                        </ul>
                                        <ul>
                                            <li>Shipping services:</li>
                                            <li> Fulfillment:</li>
                                            <li>Sales channel:</li>
                                        </ul>
                                        <ul class="bold">
                                            <li>Standard</li>
                                            <li> seller</li>
                                            <li>Amazon.in</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="ship border">
                                    <h5><b>Ship to </b></h5>
                                    <div class="row pt-3">
                                        <div class="col-md-7">
                                            <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, pariatur commodi exercitationem porro nostrum omnis minus delectus, voluptatum facere ratione quisquam.</b> </p>
                                        </div>

                                        <div class="col-md-3">
                                            <p>Contacted Buyer:</p>
                                        </div>

                                        <div class="col-md-2">
                                            <p> Surekha</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div><!-- 1st sec end-->
                       <div class="content pt-5">
                           <h5>Order Contents</h5>
                           <h6><span class="bg">Reschedule pickup</span></h6>
                           <table class="table bg-white custab">
                                <thead class="text-center">
                                    <tr>
                                        <th>Status </th>
                                        <th>Image</th>
                                        <th>Product name</th>
                                        <th>More Information</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Proceeds</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td><span>waiting for pickup</span></td>
                                        <td style="width: 100px;"><img src="{{asset('admin-assets/images/products.jpg')}}"></td>
                                        <td style="width: 250px;text-align: left;">Large 35 L Laptop Backpack ARC backpack Unisex with Rain Cover (Tan)
                                            <br>
                                            <p>ASIN:BOTSC-6788</p>
                                            <p>SKU:TSC-6788</p>
                                        </td>
                                        <td>Condition: New <br>Order item ID: <br>492y4592834</td>
                                        <td>1</td>
                                        <td>₹ 1234.79</td>
                                        <td class="action">Item subtotal<br>Tax:<br><b>Item total:</b></td>
                                        <td class="action">₹ 1234.79<br>₹ 124.79<br><b>₹ 1234.79</b></td>
                                    </tr>
                                </tbody>
                            </table><!--2nd sec end -->
                            <h5>Package 1</h5>
                            <div class="package border">
                                <h6><span>Action on Package 1</span><span class="bg ml-5 mr-2">Reprint Label</span><span class="bg">Print packing slip</span></h6>
                                <div class="d-flex" style="border-bottom: 1px solid #dee2e6!important;">
                                    <div class="package1" >
                                        <p><b>Ship date</b> <span>Sat, 2 Apr, 2022</span></p>
                                        <p><b>Carrier</b> <span>ATS</span></p>
                                        <p><b>Shipping service </b> </p>
                                    </div>
                                    <div class="package1">
                                        <p><b>Tracking ID </b> <span>4576457457</span></p>
                                    </div>
                                </div>
                                <p class="title"><b>Shipping label purchase</b></p>
                                <div class="d-flex" style="border-bottom: 1px solid #dee2e6!important;">
                                   
                                    <div class="package1" >
                                        <p><b>Pickup</b> <span>Sat, 2 Apr, 2022, 10:00am IST to 2:00pm</span></p>
                                    </div>
                                    <div class="package1">
                                        <p><b>Package type </b> <span>Package</span></p>
                                        <p><b>Dimension(LWH)</b> <span>20x10x20 CM</span></p>
                                        <p><b>Package weight </b><span>0.0 KG 600.0 G</span> </p>
                                    </div>
                                    <div class="package1">
                                        <p>Easy Ship Fee<span>₹ 1234.79</span></p>
                                        <p><b>Total shipping cost </b> <span>₹ 1234.79</span></p>
                                    </div>
                                </div>
                            </div>
                            <table class="table bg-white custab">
                                <thead class="text-center">
                                    <tr>
                                        <th>Image</th>
                                        <th>Product name</th>
                                        <th>More Information</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Proceeds</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td style="width: 100px;"><img src="{{asset('admin-assets/images/products.jpg')}}"></td>
                                        <td style="width: 250px;text-align: left;">Large 35 L Laptop Backpack ARC backpack Unisex with Rain Cover (Tan)
                                            <br>
                                            <p>ASIN:BOTSC-6788</p>
                                            <p>SKU:TSC-6788</p>
                                        </td>
                                        <td>Condition: New <br>Order item ID: <br>492y4592834</td>
                                        <td>1</td>
                                        <td>₹ 1234.79</td>
                                        <td class="action">Item subtotal<br>Tax:<br><b>Item total:</b></td>
                                        <td class="action">₹ 1234.79<br>₹ 124.79<br><b>₹ 1234.79</b></td>
                                    </tr>
                                </tbody>
                            </table><!-- 4th sec end-->
                       </div>
                    </div><!--end left side -->

                    <div class="col-md-2 border p-0" style="height: 620px;">
                        <div class="rightnav">
                            <div class="p-3">
                                <h6 class="pb-4"><b>Sales Proceeds</b></h6>
                                <p>Items Total: <span>₹ 1234.79</span></p>
                                <p style="border-bottom:1px solid #dee2e6;">Tax Total: <span>₹ 1234.79</span></p>
                                <p><b>Grand Total:</b> <span><b>₹ 1234.79</b></span></p>
                                <p style="border-bottom:1px solid #dee2e6;">COD Collectible: <span>₹ 1234.79</span></p>
                            </div>
                            <hr>
                            <h6 class="pb-3 pl-3"><b>Seller notes</b></h6>
                            <textarea class="mb-3" rows="8" cols="20" placeholder="For your records only, will not be displayed to the buyer."></textarea>
                            <hr>
                            <div  class="p-2">
                            <h6 style="border-bottom:1px solid #dee2e6;"><b>Manage Feedback</b></h6>
                            <p>Surekha has not let you feedback for this order yet.</p>
                            </div>
                        </div>
                    </div><!--end right side -->
                </div>
                   
            </div>

        </div>
    </div>
</div>

@include('admin.layouts.footer')