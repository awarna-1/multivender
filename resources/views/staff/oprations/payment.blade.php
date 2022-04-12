
@include('staff.layouts.app')

<style>
    div#nav-tab {
    border-bottom: 2px solid #ccc !important;
    border: none;
    background: #f4f4f4;
    padding-top: 0px !important;
}
div#nav-tab .nav-link.active {
    border-bottom: 1px solid red;
    border: unset;
}
div#nav-tab .nav-link:hover{
    border-color: #fff !important;
}
div#nav-tab .nav-link{
    font-weight: 600;
}
.payment .summary {
    border: 3px solid #ccc;
    padding: 20px 10px;
}
.payment .summary p {
    color: #5f5f5f;
    font-size: 15px;
}

.payment .summary ul.pay_schedul li {
    list-style: none;
    width: 110px;
    font-size: 15px;   text-align: center;
    margin-top: 40px;   
}
.payment .summary ul.pay_schedul li:before {
    content: "";
    position: absolute;
    background: black;
    width: 325px;
    height: 2px;
    top: 17px;
    left: 66px;
}
.payment .summary ul.pay_schedul li:after {
    content: "";
    background: white;
    width: 15px;
    height: 15px;
    position: absolute;
    top: 10px;
    border-radius: 67%;
    border: 2px solid #000;
    margin-left: -40px;    z-index: 1;
}
.payment .summary ul.pay_schedul.summ li:after{
    background: #000;
}
button.download{
    background: #b0c8ccc4;
    border-color: #b0c8ccc4;
    color: #000;
    font-size: 15px;    box-shadow: 0 2px 10px 0 rgb(0 0 0 / 10%);
    margin-left: -30px;
    border-radius: 0px;
}
.payment i.fa.fa-angle-down{
position: absolute;
    top: 34px;
    left: 184px;
    border-left: 1px solid #0000001a;
    background: #c2d5d8;
    font-size: 20px;
    width: 30px;
    padding: 8px 8px 9px;}
</style>

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

@include('staff.layouts.sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content wallet">

        <div class="allstd-page payment">

            <div class="nav nav-tabs nav-fill pt-2" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-transit-tab" data-toggle="tab" href="#nav-transit" role="tab" aria-controls="nav-transit" aria-selected="true">Transaction</a>
                <a class="nav-item nav-link" id="nav-trust-tab" data-toggle="tab" href="#nav-trust" role="tab" aria-controls="nav-trust" aria-selected="false">Distrustment</a>
            </div>

            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-transit" role="tabpanel" aria-labelledby="nav-transit-tab">
                    <table class="table table-striped custab mb-2">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Transaction Type</th>
                                <th>Order ID </th>
                                <th>Product Name</th>
                                <th>Total Product </th>
                                <th>Charge</th>
                                <th>Foggmart Fee</th>
                                <th>Other </th>
                                <th>Total Payment</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>credit transactions</td>
                                <td>23742345-2525</td>
                                <td>Shoes</td>
                                <td>Shoes</td> 
                                <td>$55</td> 
                                <td>$20</td> 
                                <td>other</td>    
                                <td>$2552</td> 
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>credit transactions</td>
                                <td>23742345-2525</td>
                                <td>Shoes</td>
                                <td>Shoes</td> 
                                <td>$55</td> 
                                <td>$20</td> 
                                <td>other</td>    
                                <td>$2552</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>credit transactions</td>
                                <td>23742345-2525</td>
                                <td>Shoes</td>
                                <td>Shoes</td> 
                                <td>$55</td> 
                                <td>$20</td> 
                                <td>other</td>    
                                <td>$2552</td>  
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>credit transactions</td>
                                <td>23742345-2525</td>
                                <td>Shoes</td>
                                <td>Shoes</td> 
                                <td>$55</td> 
                                <td>$20</td> 
                                <td>other</td>    
                                <td>$2552</td> 
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>credit transactions</td>
                                <td>23742345-2525</td>
                                <td>Shoes</td>
                                <td>Shoes</td> 
                                <td>$55</td> 
                                <td>$20</td> 
                                <td>other</td>    
                                <td>$2552</td> 
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade show" id="nav-trust" role="tabpanel" aria-labelledby="nav-trust-tab">
                    <div class="filter">
                        <div class="row">
                            <div class="col-md-2">
                                <label>From</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label>To</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-2 mt-4">
                                <button type="submit" class="btn btn-primary col-12 mt-1" style="background: #000;border-color: #000;">Search</button> 
                            </div>
                            <div class="col-md-2">
                                <label>Order ID</label>
                                <input type="text" class="form-control" placeholder="Order ID:">
                            </div>
                            <div class="col-md-2 mt-4">
                                <button type="submit" class="btn btn-primary col-12 mt-1" style="background: #000;border-color: #000;">Submit</button>  
                            </div>
                        </div>
                    </div><!--filter end -->
                    <div class="summary mt-3">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="mb-0">dd/mm/yyyy - Present</p>
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="#138808" d="M0 27a4 4 0 0 0 4 4h28a4 4 0 0 0 4-4v-5H0v5z"/><path fill="#F93" d="M36 14V9a4 4 0 0 0-4-4H4a4 4 0 0 0-4 4v5h36z"/><path fill="#F7F7F7" d="M0 13.667h36v8.667H0z"/><circle cx="18" cy="18" r="4" fill="navy"/><circle cx="18" cy="18" r="3.375" fill="#F7F7F7"/><path fill="#6666B3" d="m18.1 16.75l-.1.65l-.1-.65l.1-1.95zm-.928-1.841l.408 1.909l.265.602l-.072-.653zm-.772.32l.888 1.738l.412.513l-.238-.613zm-.663.508l1.308 1.45l.531.389l-.389-.531zm-.508.663l1.638 1.062l.613.238l-.513-.412zm-.32.772l1.858.601l.653.072l-.602-.265zM14.8 18l1.95.1l.65-.1l-.65-.1zm.109.828l1.909-.408l.602-.265l-.653.072zm.32.772l1.738-.888l.513-.412l-.613.238zm.508.663l1.45-1.308l.389-.531l-.531.389zm.663.508l1.062-1.638l.238-.613l-.412.513zm.772.32l.601-1.858l.072-.653l-.265.602zM18 21.2l.1-1.95l-.1-.65l-.1.65zm.828-.109l-.408-1.909l-.265-.602l.072.653zm.772-.32l-.888-1.738l-.412-.513l.238.613zm.663-.508l-1.308-1.45l-.531-.389l.389.531zm.508-.663l-1.638-1.062l-.613-.238l.513.412zm.32-.772l-1.858-.601l-.653-.072l.602.265zM21.2 18l-1.95-.1l-.65.1l.65.1zm-.109-.828l-1.909.408l-.602.265l.653-.072zm-.32-.772l-1.738.888l-.513.412l.613-.238zm-.508-.663l-1.45 1.308l-.389.531l.531-.389zm-.663-.508l-1.062 1.638l-.238.613l.412-.513zm-.772-.32l-.601 1.858l-.072.653l.265-.602z"/><g fill="navy"><circle cx="17.56" cy="14.659" r=".2"/><circle cx="16.71" cy="14.887" r=".2"/><circle cx="15.948" cy="15.326" r=".2"/><circle cx="15.326" cy="15.948" r=".2"/><circle cx="14.887" cy="16.71" r=".2"/><circle cx="14.659" cy="17.56" r=".2"/><circle cx="14.659" cy="18.44" r=".2"/><circle cx="14.887" cy="19.29" r=".2"/><circle cx="15.326" cy="20.052" r=".2"/><circle cx="15.948" cy="20.674" r=".2"/><circle cx="16.71" cy="21.113" r=".2"/><circle cx="17.56" cy="21.341" r=".2"/><circle cx="18.44" cy="21.341" r=".2"/><circle cx="19.29" cy="21.113" r=".2"/><circle cx="20.052" cy="20.674" r=".2"/><circle cx="20.674" cy="20.052" r=".2"/><circle cx="21.113" cy="19.29" r=".2"/><circle cx="21.341" cy="18.44" r=".2"/><circle cx="21.341" cy="17.56" r=".2"/><circle cx="21.113" cy="16.71" r=".2"/><circle cx="20.674" cy="15.948" r=".2"/><circle cx="20.052" cy="15.326" r=".2"/><circle cx="19.29" cy="14.887" r=".2"/><circle cx="18.44" cy="14.659" r=".2"/><circle cx="18" cy="18" r=".9"/></g></svg>
                                <p>Electronic Transactions (Credit Card/Net Banking/GC)</p>
                            </div>

                            <div class="col-md-4">
                                <ul class="pay_schedul d-flex ">
                                    <li>Schudled payment</li>
                                    <li>Processing</li>
                                    <li>Sent to bank</li>
                                    <li>Acknowledged by bank</li>
                                </ul>
                            </div>

                            <div class="col-md-2">
                                <h6><b>Settlements Group:</b></h6>
                                <p>787687689</p>
                            </div>

                            <div class="col-md-2">
                                <h6 class="status" style="color: #02c7ea;">Payout Status:</h6>
                                <h5 style="font-weight: 600;">Started</h5>
                                <br><br>
                                <h6 class="amt">Payment Amount:</h6>
                                <p>₹2676.00</p>
                            </div>

                            <div class="col-md-2">
                                <h6 style="text-align: right;color: #02c7ea;font-size: 18px;">View Summary</h6>
                                <h6 class="pt-4">Not Available (Open)</h6>
                            </div>
                        </div>

                    </div><!-- summary end-->
                    <div class="summary mt-3">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="mb-0">dd/mm/yyyy - Present</p>
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="3em" height="3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="#138808" d="M0 27a4 4 0 0 0 4 4h28a4 4 0 0 0 4-4v-5H0v5z"/><path fill="#F93" d="M36 14V9a4 4 0 0 0-4-4H4a4 4 0 0 0-4 4v5h36z"/><path fill="#F7F7F7" d="M0 13.667h36v8.667H0z"/><circle cx="18" cy="18" r="4" fill="navy"/><circle cx="18" cy="18" r="3.375" fill="#F7F7F7"/><path fill="#6666B3" d="m18.1 16.75l-.1.65l-.1-.65l.1-1.95zm-.928-1.841l.408 1.909l.265.602l-.072-.653zm-.772.32l.888 1.738l.412.513l-.238-.613zm-.663.508l1.308 1.45l.531.389l-.389-.531zm-.508.663l1.638 1.062l.613.238l-.513-.412zm-.32.772l1.858.601l.653.072l-.602-.265zM14.8 18l1.95.1l.65-.1l-.65-.1zm.109.828l1.909-.408l.602-.265l-.653.072zm.32.772l1.738-.888l.513-.412l-.613.238zm.508.663l1.45-1.308l.389-.531l-.531.389zm.663.508l1.062-1.638l.238-.613l-.412.513zm.772.32l.601-1.858l.072-.653l-.265.602zM18 21.2l.1-1.95l-.1-.65l-.1.65zm.828-.109l-.408-1.909l-.265-.602l.072.653zm.772-.32l-.888-1.738l-.412-.513l.238.613zm.663-.508l-1.308-1.45l-.531-.389l.389.531zm.508-.663l-1.638-1.062l-.613-.238l.513.412zm.32-.772l-1.858-.601l-.653-.072l.602.265zM21.2 18l-1.95-.1l-.65.1l.65.1zm-.109-.828l-1.909.408l-.602.265l.653-.072zm-.32-.772l-1.738.888l-.513.412l.613-.238zm-.508-.663l-1.45 1.308l-.389.531l.531-.389zm-.663-.508l-1.062 1.638l-.238.613l.412-.513zm-.772-.32l-.601 1.858l-.072.653l.265-.602z"/><g fill="navy"><circle cx="17.56" cy="14.659" r=".2"/><circle cx="16.71" cy="14.887" r=".2"/><circle cx="15.948" cy="15.326" r=".2"/><circle cx="15.326" cy="15.948" r=".2"/><circle cx="14.887" cy="16.71" r=".2"/><circle cx="14.659" cy="17.56" r=".2"/><circle cx="14.659" cy="18.44" r=".2"/><circle cx="14.887" cy="19.29" r=".2"/><circle cx="15.326" cy="20.052" r=".2"/><circle cx="15.948" cy="20.674" r=".2"/><circle cx="16.71" cy="21.113" r=".2"/><circle cx="17.56" cy="21.341" r=".2"/><circle cx="18.44" cy="21.341" r=".2"/><circle cx="19.29" cy="21.113" r=".2"/><circle cx="20.052" cy="20.674" r=".2"/><circle cx="20.674" cy="20.052" r=".2"/><circle cx="21.113" cy="19.29" r=".2"/><circle cx="21.341" cy="18.44" r=".2"/><circle cx="21.341" cy="17.56" r=".2"/><circle cx="21.113" cy="16.71" r=".2"/><circle cx="20.674" cy="15.948" r=".2"/><circle cx="20.052" cy="15.326" r=".2"/><circle cx="19.29" cy="14.887" r=".2"/><circle cx="18.44" cy="14.659" r=".2"/><circle cx="18" cy="18" r=".9"/></g></svg>
                                <p>Electronic Transactions (Credit Card/Net Banking/GC)</p>
                            </div>

                            <div class="col-md-4">
                                <ul class="pay_schedul d-flex summ">
                                    <li>Schudled payment</li>
                                    <li>Processing</li>
                                    <li>Sent to bank</li>
                                    <li>Acknowledged by bank</li>
                                </ul>
                            </div>

                            <div class="col-md-2">
                                <h6><b>Settlements Group:</b></h6>
                                <p>787687689</p>
                            </div>

                            <div class="col-md-2">
                                <h6 class="status" style="color: #02c7ea;">Payout Status:</h6>
                                <h5 style="font-weight: 600;">Started</h5>
                                <br><br>
                                <h6 class="amt">Payment Amount:</h6>
                                <p>₹2676.00</p>
                            </div>

                            <div class="col-md-2">
                                <h6 class="" style="text-align: right;color: #02c7ea;font-size: 18px;">View Summary</h6>
                                <button type="submit" class="btn btn-primary col-12 mt-1 download mt-4">Download Flat File V2 <i class="fa fa-angle-down" aria-hidden="true"></i></button>
                            </div>
                        </div>

                    </div><!--2nd  summary end-->

                </div>
            </div>
          
            
            


        </div>


    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

@include('staff.layouts.footer') 
