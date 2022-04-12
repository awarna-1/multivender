
@include('admin.layouts.app')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

@include('admin.layouts.sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">


         <!-- <div class="row">
                    <div class="panel panel-primary filterable">
                        <div class="panel-heading">
                            <h4 class="panel-title text-white">All Orders</h4>
                            <div class="pull-right">
                                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                            </div>
                        </div>
                        <table class="table" style="border: 1px solid #dadada;">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control input border" placeholder="Sr No."></th>
                                    <th><input type="text" class="form-control input border" placeholder="Order Id"></th>
                                    <th><input type="text" class="form-control input border" placeholder="Payment Id"></th>
                                    <th><input type="text" class="form-control input border" placeholder="Rs."></th>
                                    <th><input type="text" class="form-control input border" placeholder="Address"></th>
                                    <th><input type="text" class="form-control input border" placeholder="Status"></th>
                                    <th>
                                        <div style="display:flex;"><input type="text" placeholder="To" onfocus="(this.type='date')" onblur="(this.type='text')" class="border date" onchange="data_filter()" id="to_date">
                                            <input type="text" placeholder="From" onfocus="(this.type='date')" onblur="(this.type='text')" class="border date" onchange="data_filter()" id="from_date">
                                        </div>
                                    </th>
                                </tr>

                            </thead>
                            <tbody id="table_data" style="text-align: center">
                            <?php $i = 1; ?>
                                @foreach($data['orders'] as $order)
                                <tr>
                                    <td class="border">{{$i++}}</td>
                                    <td class="border">{{$order->order_id}}</td>
                                    <td class="border">{{$order->razorpay_payment_id}}</td>
                                    <td class="border">{{$order->amount}}</td>
                                    <td class="border">{{$data['address'][$order->address_id]->name}}, {{$data['address'][$order->address_id]->address}} <br>
                                        ({{$data['address'][$order->address_id]->pincode}}) , {{$data['address'][$order->address_id]->state}} </td>
                                    <td class="border">{{$order->status}}</td>
                                    <td class="border">{{$order->created_at}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination-cover">
                        {{ $data['orders']->links()}}
                    </div>
                </div> -->



        <div class="order_details">
            <h2 class="pb-2">Order Details</h2>
            <div class="row" style="    width: 100%;display: block;">
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-hold-tab" data-toggle="tab" href="#nav-hold"
                                role="tab" aria-controls="nav-hold" aria-selected="true">On Hold </a>
                            <a class="nav-item nav-link" id="nav-pending-tab" data-toggle="tab" href="#nav-pending"
                                role="tab" aria-controls="nav-pending" aria-selected="false">Pending</a>
                            <!-- <a class="nav-item nav-link" id="nav-ready-tab" data-toggle="tab" href="#nav-ready"
                                role="tab" aria-controls="nav-ready" aria-selected="false">Ready to Ship</a>                                     -->
                            <a class="nav-item nav-link" id="nav-ship-tab" data-toggle="tab" href="#nav-ship"
                                role="tab" aria-controls="nav-ship" aria-selected="false">Shipped</a>
                            <a class="nav-item nav-link" id="nav-trans-tab" data-toggle="tab" href="#nav-trans"
                                role="tab" aria-controls="nav-trans" aria-selected="false">Shipped by In-Transit</a>
                             <a class="nav-item nav-link" id="nav-deli-tab" data-toggle="tab" href="#nav-deli"
                                role="tab" aria-controls="nav-deli" aria-selected="false">Deliver</a>
                                <a class="nav-item nav-link" id="nav-rto-tab" data-toggle="tab" href="#nav-rto"
                                role="tab" aria-controls="nav-rto" aria-selected="false">RTO</a>
                            <a class="nav-item nav-link" id="nav-cancel-tab" data-toggle="tab" href="#nav-cancel"
                                role="tab" aria-controls="nav-cancel" aria-selected="false">Cancelled</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-hold" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="border">
                                <div class="filter d-flex pb-2">
                                    <h5 style="width: 75%;">Filter</h5>
                                    <form action="/action_page.php">
                                        <input type="text" placeholder="Search SKU, Product ID" name="search" style="width: 240px;padding: 6px 10px 5px;border: 1px solid #ced4da">
                                        <button type="submit" style="background: #000;color: #fff;padding: 5px 10px 4px;position: relative;left: -6px;"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="form-row">
                                    <!-- <div class="form-group col-md-3">
                                        <label for="sku">SKU #</label>
                                        <input type="text" class="form-control" id="sku" placeholder="Enter SKU #">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="id">Product Id #</label>
                                        <input type="text" class="form-control" id="id" placeholder="Product Id #">
                                    </div> -->
                                    <div class="form-group col-md-3">
                                        <form>
                                            <label for="birthday">Order Date Min</label><br>
                                            <input type="date" id="birthday" name="birthday">
                                        </form>
                                    </div>
                                    <div class="form-group col-md-3 ">
                                        <form>
                                            <label for="birthday">Order Date Max</label><br>
                                            <input type="date" id="birthday" name="birthday">
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
                                </div><!--filter top end -->

                                <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                            <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                                

                            </div>

                        </div>

                        <div class="tab-pane fade" id="nav-pending" role="tabpanel"
                            aria-labelledby="nav-pending-tab">
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
                                    <h5 style="width: 75%;">Filter  </h5>
                                    <form action="/action_page.php">
                                        <input type="text" placeholder="Search SKU, Product ID" name="search" style="width: 240px;padding: 6px 10px 5px;border: 1px solid #ced4da">
                                        <button type="submit" style="background: #000;color: #fff;padding: 5px 10px 4px;position: relative;left: -6px;"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="form-row">
                                    <!-- <div class="form-group col-md-4">
                                        <label for="sku">SKU #</label>
                                        <input type="text" class="form-control" id="sku" placeholder="Enter SKU #">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="id">Product Id #</label>
                                        <input type="text" class="form-control" id="id" placeholder="Product Id #">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="id">VSKU #</label>
                                        <input type="text" class="form-control" id="id" placeholder="VSKU #">
                                    </div> -->
                                    <div class="form-group col-md-3">
                                        <label for="birthday">Order Date Min</label><br>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="birthday">Order Date Min</label><br>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="birthday">Dispatch Date Min</label><br>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="birthday">Dispatch Date Max</label><br>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="id">Sub Order Num</label>
                                        <input type="text" class="form-control" id="id" placeholder="Sub Order Num">
                                    </div>
                                    <!-- <div class="form-group col-md-8">
                                        <label for="id">SLA Breach</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Breached
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Breaching Soon
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Others
                                            </label>
                                        </div>
                                    </div> -->

                                    <div class="form-group col-md-2 pt-3">
                                        <input type="submit" value="Clear" class="clear">
                                    </div>
                                    <div class="form-group col-md-2 pt-3">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>

                                <div class="pdt_blog">
                                        <div class="d-flex">
                                            <div class="form-check" style="width: 70%;"> 
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                            Check all to Download your products
                                            </div>
                                            <input type="submit" value="Download all Label" style="width: 200px;">
                                        </div>
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        <div class="form-group col-md-3 pt-3">
                                        <input type="submit" value="Download Label Down" class="clear">
                                        </div>
                                        <div class="form-group col-md-2 pt-3">
                                            <input type="submit" value="Minifest">
                                        </div>
                                    </div><!--1st product end -->
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                                    Order No. 6344344447096 <span>23 Jan, 11:34 AM </span></h4>
                                    <h5>2 Products</h5>
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
                                        <div class="form-group col-md-3 pt-3">
                                        <input type="submit" value="Download Label Down" class="clear">
                                        </div>
                                        <div class="form-group col-md-2 pt-3">
                                            <input type="submit" value="Minifest">
                                        </div>
                                    </div><!--2nd product end -->
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                                    Order No. 63334964709 <span>23 Jan, 11:34 AM </span></h4>
                                    <h5>3 Products</h5>
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
                                        <div class="form-group col-md-3 pt-3">
                                        <input type="submit" value="Download Label Down" class="clear">
                                        </div>
                                        <div class="form-group col-md-2 pt-3">
                                            <input type="submit" value="Minifest">
                                        </div>
                                    </div><!--3rd product end -->
                                    
                                </div><!-- card end-->
                            </div>
                        </div>
                        <!-- <div class="tab-pane fade" id="nav-ready" role="tabpanel"
                            aria-labelledby="nav-ready-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="download">Download Invoice Details Excel</button>
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="notice">Notices<span>3 New</span></button>
                                </div>
                            </div>
                            <div class="border">
                                <h5>Filter1</h5>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="sku">SKU #</label>
                                        <input type="text" class="form-control" id="sku" placeholder="Enter SKU #">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="id">Product Id #</label>
                                        <input type="text" class="form-control" id="id" placeholder="Product Id #">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="id">VSKU #</label>
                                        <input type="text" class="form-control" id="id" placeholder="VSKU #">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="birthday">Order Date Min</label><br>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="birthday">Order Date Min</label><br>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="birthday">Dispatch Date Min</label><br>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="birthday">Dispatch Date Max</label><br>
                                        <input type="date" id="birthday" name="birthday">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="id">Sub Order Num</label>
                                        <input type="text" class="form-control" id="id" placeholder="Sub Order Num">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="id">SLA Breach</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Breached
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Breaching Soon
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Others
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="id">Label Downloaded</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-2 pt-3">
                                        <input type="submit" value="Clear" class="clear">
                                    </div>
                                    <div class="form-group col-md-2 pt-3">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="tab-pane fade" id="nav-ship" role="tabpanel" aria-labelledby="nav-ship-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="download">Download Invoice Details Excel</button>
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="notice">Notices<span>3 New</span></button>
                                </div>
                            </div>
                            <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                            <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-trans" role="tabpanel" aria-labelledby="nav-about-tab">
                        <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                            <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-rto" role="tabpanel" aria-labelledby="nav-about-tab">
                        <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                            <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-deli" role="tabpanel" aria-labelledby="nav-about-tab">
                        <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                            <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-cancel" role="tabpanel" aria-labelledby="nav-cancel-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="download">Download Invoice Details Excel</button>
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="notice">Notices<span>3 New</span></button>
                                </div>
                            </div>
                            <div class="pdt_blog">
                                    <h4 class=" mt-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                                    Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                        
                                    </div><!--1st product end -->
                            </div>

                            <div class="pdt_blog">
                                <h4 class=" mt-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" >
                                Order No. 64447097096 <span>23 Jan, 11:34 AM </span></h4>
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
                                    
                                </div><!--2nd product end -->
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
