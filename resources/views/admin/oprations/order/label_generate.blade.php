<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

@include('admin.layouts.app')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')
    <div id="content" class="main-content wallet">

        <div class="label-generate">
        <h2> Order / Label generation</h2>

            <div class="container-fluid mt-5 "> 
                        <h4><b>Schedule Pickup</b></h4>
                        <h5>Order ID: 489494905095</h5>
                <div class="border mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="shipfrom">
                                <h6>Shipping From:</h6>
                                <p>#123 road, Delhi, New Delhi-788989, India</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shipto">
                                 <h6>Shipping To:</h6>
                                <p>#123 road, Delhi, New Delhi-788989, India</p>
                            </div>
                        </div>
                    </div>
                </div><!--1st sec end -->
                <h5 class="title pt-4">1. Order Details</h5>
                <div class="border mt-2">
                    <div class="row">
                        <div class="col-md-1"><img src="{{asset('admin-assets/images/products.jpg')}}"></div>
                        <div class="col-md-5">
                            <div class="pdtname">
                                <h6><a href="#">Large 35 L Laptop Backpack ARC backpack Unisex with Rain Cover  (Tan)</a></h6>
                                <p>ASIN:BOTSC-6788</p>
                                <p>SKU:TSC-6788</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price">
                                 <h6>Price<br><small>(inclusive tax)</small></h6>
                                <p>Rs. 123.0</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="quantity">
                                 <h6>Quantity</h6>
                                <p>1</p>
                            </div>
                        </div>
                    </div>
                </div><!--2nd sec end -->
                <h5 class="title pt-4">2. Package Details</h5>
                <div class="border mt-2" style=" height: 300px;">
                    <div class="row">
                        <div class="col-md-3">
                            <h6 class="heading pt-2">Package weight</h6>
                            <h6 class="heading" style="line-height: 105px;">Package Dimensions</h6>
                            <h6 class="heading" style="line-height: 175px;">Package Identifier</h6>
                        </div>
                        <div class="col-md-6">
                            <form>
                                <input type="gram" class="form-control" id="gram"  Value="3000" style="width: 100px;"><br>              
                                <small class="g">g</small>
                                <div class="form-group form-inline">
                                    <select class="form-control mr-5" id="sel1" name="sellist1">
                                        <option>Select dimensions</option>
                                        <option>5 in 1 beauty massager rs 678(17x9x9 cm)</option>
                                    </select>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Make Default 
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="form-group col-sm-3 mr-5">
                                        <label for="Length">Length</label>
                                        <input type="text" class="form-control" id="Length" Value="17">
                                        <small class="cm">cm</small>
                                    </div>
                                    <div class="form-group col-sm-3 mr-5">
                                        <label for="Width">Width</label>
                                        <input type="text" class="form-control" id="Width" Value="19">
                                        <small class="cm">cm</small>
                                    </div>
                                    <div class="form-group col-sm-3 mr-5">
                                        <label for="Height">Height</label>
                                        <input type="text" class="form-control" id="Height" Value="6">
                                        <small class="cm">cm</small>
                                    </div>
                                </div>
                                <input type="identifier" class="form-control" id="identifier" value="7658327569134" style="width: 200px;"><br>              

                            </form>
                        </div>
                    </div>
                </div><!--3rd sec end -->
                <h5 class="title pt-4">1. Pickup Slot</h5>
                <div class="border mt-2">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="pdtname">
                                <h6>Pickup Slot</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="pday">
                                <div class="form-group">
                                    <label for="Width">Pickup Date</label>
                                    <select class="form-control mr-5" id="sel1" name="sellist1">
                                        <option>Select Date</option>
                                        <option>Mon, 4th April 2022</option>
                                    </select>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="ptime">
                                 <div class="form-group ">
                                    <label for="Width">Pickup Time</label>
                                    <select class="form-control mr-5" id="sel1" name="sellist1">
                                        <option>Select Time</option>
                                        <option>10:00 AM - 11:00 AM</option>
                                    </select> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--4th sec end -->
                <div class="border bg">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="pdtname">
                                <h6>Total Easy Ship Free</h6>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="price">
                                <p><b>Rs. 123.0</b></p>
                                <p>Shipping Free Rs. 123.0</p>
                            </div>
                        </div>
                    </div>
                </div><!--5th sec end -->
                <p class="pt-4">Please vefify above details and despatch all the items in a single package.</p>
                <button type="button" class="btn btn-warning mt-5">Schedule Pickup</button>
            </div>

        </div>
    </div>
</div>

@include('admin.layouts.footer')