
@include('staff.layouts.app')

<style>
    .label thead {
    background: rgba(0,0,0,.05);
    }
.label .table-striped tbody tr:nth-of-type(odd) {
    background-color: unset;
}
.label .top h6 {
    background: rgba(0,0,0,.05);
    padding: 15px 20px;
    border: 1px solid #ccc;
}
.label .top h6 span a{
float: right;
    background: rgba(0,0,0,.05);
    padding: 5px 10px;
    color: #000;
    border: 1px solid #ccc;
    font-size: 13px;
    font-weight: 600;}
    .label .top p{color: #5f5f5f;}
    .label .table tbody tr td p {
    color: #5f5f5f;
    margin-bottom: 0px;
}
</style>
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

@include('staff.layouts.sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content wallet">

        <div class="allstd-page label">
            <h2> All Label Download </h2>

            <div class="top pt-3">
                <h6>Review File Status and History <span><a href="#">Refresh</a></span></h6>
                <p>View the status of your last uploads. If the processing report indicates any errors, modify your Schedule Pickup File and return to 2 step above. <a href="#">Learn more</a></p>
            </div>

            <table class="table table-striped custab">
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Batch ID</th>
                        <th class="text-left">Status/Results</th>
                        <th class="text-left">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>dd/mm/yyyy Hr:min:sec am IST</td>
                        <td>53454523452</td>
                        <td class="text-left"><p>Status: Done</p>
                            <p>No of records processed from this upload: 9</p>
                            <p>No of records that we activated: 9</p>
                            <p>No of records with errors: 9</p>
                            <p>No of records with warning: 9</p>
                        </td>
                        <td class="text-left"><p><a href="#">View Processing Report</a></p>
                            <p><a href="#">Download Shipping Labels</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>dd/mm/yyyy Hr:min:sec am IST</td>
                        <td>53454523452</td>
                        <td class="text-left"><p>Status: Done</p>
                            <p>No of records processed from this upload: 9</p>
                            <p>No of records that we activated: 9</p>
                            <p>No of records with errors: 9</p>
                            <p>No of records with warning: 9</p>
                        </td>
                        <td class="text-left"><p><a href="#">View Processing Report</a></p>
                            <p><a href="#">Download Shipping Labels</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>dd/mm/yyyy Hr:min:sec am IST</td>
                        <td>53454523452</td>
                        <td class="text-left"><p>Status: Done</p>
                            <p>No of records processed from this upload: 9</p>
                            <p>No of records that we activated: 9</p>
                            <p>No of records with errors: 9</p>
                            <p>No of records with warning: 9</p>
                        </td>
                        <td class="text-left"><p><a href="#">View Processing Report</a></p>
                            <p><a href="#">Download Shipping Labels</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>dd/mm/yyyy Hr:min:sec am IST</td>
                        <td>53454523452</td>
                        <td class="text-left"><p>Status: Done</p>
                            <p>No of records processed from this upload: 9</p>
                            <p>No of records that we activated: 9</p>
                            <p>No of records with errors: 9</p>
                            <p>No of records with warning: 9</p>
                        </td>
                        <td class="text-left"><p><a href="#">View Processing Report</a></p>
                            <p><a href="#">Download Shipping Labels</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>dd/mm/yyyy Hr:min:sec am IST</td>
                        <td>53454523452</td>
                        <td class="text-left"><p>Status: Done</p>
                            <p>No of records processed from this upload: 9</p>
                            <p>No of records that we activated: 9</p>
                            <p>No of records with errors: 9</p>
                            <p>No of records with warning: 9</p>
                        </td>
                        <td class="text-left"><p><a href="#">View Processing Report</a></p>
                            <p><a href="#">Download Shipping Labels</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>dd/mm/yyyy Hr:min:sec am IST</td>
                        <td>53454523452</td>
                        <td class="text-left"><p>Status: Done</p>
                            <p>No of records processed from this upload: 9</p>
                            <p>No of records that we activated: 9</p>
                            <p>No of records with errors: 9</p>
                            <p>No of records with warning: 9</p>
                        </td>
                        <td class="text-left"><p><a href="#">View Processing Report</a></p>
                            <p><a href="#">Download Shipping Labels</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>dd/mm/yyyy Hr:min:sec am IST</td>
                        <td>53454523452</td>
                        <td class="text-left"><p>Status: Done</p>
                            <p>No of records processed from this upload: 9</p>
                            <p>No of records that we activated: 9</p>
                            <p>No of records with errors: 9</p>
                            <p>No of records with warning: 9</p>
                        </td>
                        <td class="text-left"><p><a href="#">View Processing Report</a></p>
                            <p><a href="#">Download Shipping Labels</a></p>
                        </td>
                    </tr>
                      
                </tbody>
            </table>
            


        </div>


    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

@include('staff.layouts.footer') 
