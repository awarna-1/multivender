
@include('staff.layouts.app')

<style>
  
.review .recent p {
    background-color: #07c0cc24;
    padding: 15px;
    color: #575757;
}
div#nav-tab {
    border-bottom: 2px solid #ccc !important;
    border: none;
    width: 50%;
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
.review .top h5 i {
    color: #ffc600;
    font-size: 15px;
}

</style>
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

@include('staff.layouts.sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content wallet">

        <div class="allstd-page review">
            <h2> Review Manager</h2>
            <p>Use the Review to track everywhere your service You can view short-and long-term metrics, as well as detailed Review entries, including buyer e-mails and other IDs. Click the Order ID to view transaction details within the Manager Orders section of Seller Central. <a href="#">Learn more</a></p>

            <div class="top pt-3">
                <h5>Review Rating: <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                </h5>
                <p>View the status of your last uploads. If the processing report indicates any errors, modify your Schedule Pickup File and return to 2 step above. <a href="#">Learn more</a></p>
            </div>

            <div class="table">
                <table class="table table-striped custab mb-2">
                    <thead>
                        <tr>
                            <th></th>
                            <th>30 days</th>
                            <th>90 days</th>
                            <th>365 days</th>
                            <th>Lifetime</th>

                        </tr>
                    </thead>
                    <tbody> 
                        <tr>
                            <th class="text-left">Positive</th>
                            <td>100 % (1)</td>
                            <td>100 % (2)</td>
                            <td>100 % (5)</td>
                            <td>100 % (5)</td>   
                        </tr>
                        <tr>
                            <th class="text-left">Neutral</th>
                            <td>100 % (1)</td>
                            <td>100 % (2)</td>
                            <td>100 % (5)</td>
                            <td>100 % (5)</td>
                        </tr>
                        <tr>
                            <th class="text-left">Negative</th>
                            <td>100 % (1)</td>
                            <td>100 % (2)</td>
                            <td>100 % (5)</td>
                            <td>100 % (5)</td>
                        </tr>
                        <tr>
                            <th class="text-left">Count</th>
                            <td>100 % (1)</td>
                            <td>100 % (2)</td>
                            <td>100 % (5)</td>
                            <td>100 % (5)</td>
                        </tr>
                        
                    </tbody>
                </table>
                <small>This table displays the corresponding Review percentages and Review counts. <a href="#">See how Review displays to buyers on Amazon</a></small>
                <small style="float: right;">Due to rounding, the values displayed may not add up to 100%</small>
            </div>

            <div class="recent pt-3">
                <h6>Recent Review</h6>
                <p><i class="fa fa-exclamation pr-2" aria-hidden="true"></i> Display Review from the last 365 days. To request a Review report:</p>
            </div><!--recent end -->

            <div class="nav nav-tabs nav-fill pt-2" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-rating-tab" data-toggle="tab" href="#nav-rating" role="tab" aria-controls="nav-rating" aria-selected="true">Rating</a>
                <a class="nav-item nav-link" id="nav-positive-tab" data-toggle="tab" href="#nav-positive" role="tab" aria-controls="nav-positive" aria-selected="false">Positive</a>
                <a class="nav-item nav-link" id="nav-neutral-tab" data-toggle="tab" href="#nav-neutral" role="tab" aria-controls="nav-neutral" aria-selected="false">Neutral</a>
                <a class="nav-item nav-link" id="nav-negative-tab" data-toggle="tab" href="#nav-negative" role="tab" aria-controls="nav-negative" aria-selected="false">Negative</a>
            </div>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-rating" role="tabpanel" aria-labelledby="nav-rating-tab">
                    <table class="table table-striped custab mb-2">
                        <thead class="text-left">
                            <tr>
                                <th>Date</th>
                                <th>Rating</th>
                                <th>Order ID </th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody class="text-left"> 
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr><tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-positive" role="tabpanel" aria-labelledby="nav-positive-tab">
                    <table class="table table-striped custab mb-2">
                        <thead class="text-left">
                            <tr>
                                <th>Date</th>
                                <th>Rating</th>
                                <th>Order ID </th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody class="text-left"> 
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr><tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-neutral" role="tabpanel" aria-labelledby="nav-neutral-tab">
                    <table class="table table-striped custab mb-2">
                        <thead class="text-left">
                            <tr>
                                <th>Date</th>
                                <th>Rating</th>
                                <th>Order ID </th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody class="text-left"> 
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr><tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey good, love your service</td>   
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-negative" role="tabpanel" aria-labelledby="nav-negative-tab">
                    <table class="table table-striped custab mb-2">
                        <thead class="text-left">
                            <tr>
                                <th>Date</th>
                                <th>Rating</th>
                                <th>Order ID </th>
                                <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody class="text-left"> 
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Bad service</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>not satisfied</td>   
                            </tr><tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey bad</td>   
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Bad service</td>                              
                            </tr>
                            <tr>
                                <td>dd/mm/yyyy</td>
                                <td>5</td>
                                <td>23742345-2525-45235</td>
                                <td>Products was vey bad</td>   
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div><!--tab end -->
            
            


        </div>


    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

@include('staff.layouts.footer') 
