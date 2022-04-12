
@include('staff.layouts.app')

<style>
    .tab {
    display: inline-grid;
    width: 100%;
}
.tab button.active {
    background-color: #000;
    border: 1px solid #ccc;
    color: #fff;
}
button.tablinks {
    border: 1px solid #dcf6f8;
    padding: 20px;
    text-align: left;    font-size: 15px;
}
.tab button:focus {
    outline: 0px auto -webkit-focus-ring-color;
}
#tab1 h3 {
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    font-size: 20px;
    padding: 10px;
}
#tab1 label.form-check-label {
    font-size: 13px;
}
#tab1 .form-group label {
    font-size: 17px;
    font-weight: 500;
}
#tab1 .form-control::placeholder {
    font-size: 14px;
    color: #ccc;
}
#tab1 .form-control {
    width: 50%;
}
#tab1 i.fa.fa-eye.current {
    background: unset;
    position: absolute;
    top: 111px;
    left: 450px;
    color: #d01769;
}
#tab1 i.fa.fa-eye.new {
    background: unset;
    position: absolute;
    top: 199px;
    left: 450px;
    color: #d01769;
}
#tab1 i.fa.fa-eye.type {
    background: unset;
    position: absolute;
    top: 393px;
    left: 450px;
    color: #d4d2d3;
}
#tab1 i.fa.fa-eye span{font-size: 14px;}
#tab2 h3 {
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    font-size: 20px;
    padding: 10px;
}
#tab2 label.form-check-label {
    font-size: 13px;
}
#tab2 .form-group label {
    font-size: 17px;
    font-weight: 500;
}
#tab2 .form-control::placeholder {
    font-size: 14px;
    color: #ccc;
}
#tab2 .form-control {
    width: 50%;
}
</style>
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

@include('staff.layouts.sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content wallet">

        <div class="pay_order">

            <div class="row">
                <div class="col-sm-3">
                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen"><i class="fa fa-key pr-2" aria-hidden="true"></i>Change Password</button>
                        <button class="tablinks" onclick="openCity(event, 'tab2')"><i class="fa fa-university pr-2" aria-hidden="true"></i>Bank Details</button>
                        <button class="tablinks" onclick="openCity(event, 'tab3')"><i class="fa fa-gavel pr-2" aria-hidden="true"></i>Legal and Policies</button>
                    </div>
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div id="tab1" class="tabcontent">
                        <h3><i class="fa fa-key pr-2" aria-hidden="true"></i>Change Password</h3>
                            <form class="pt-3">
                                <div class="form-group">
                                    <label for="curentpassword">Current Password</label>
                                    <input type="password" class="form-control" id="currentpassword" placeholder="Enter your current password">
                                    <i class="fa fa-eye current" aria-hidden="true"><span class=" pl-2">Show</span></i>
                                </div>
                                <div class="form-group">
                                    <label for="newPassword">New Password</label>
                                    <input type="password" class="form-control" id="newpassword" placeholder="Enter your new password">
                                    <i class="fa fa-eye new" aria-hidden="true"><span class=" pl-2">Show</span></i>
                                </div>
                                <div class="form-check form-check-inline pt-3">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label pr-5" for="inlineCheckbox1">Minimum 8 Character</label>
                                    <input class="form-check-input ml-5" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label " for="inlineCheckbox1">1 Upper Case</label>
                                </div>
                                <div class="form-check pb-5">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label pr-5" for="exampleCheck1">1 Special Character(!@#$%&*)</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">1 Number</label>
                                </div>
                                <div class="form-group">
                                    <label for="retypenewPassword">Re-type New Password</label>
                                    <input type="password" class="form-control" id="newpassword" placeholder="Enter your current password">
                                    <i class="fa fa-eye type" aria-hidden="true"><span class=" pl-2">Show</span></i>
                                </div>
                                <button type="submit" class="btn btn-primary" disabled>Chnage Password</button>
                            </form>
                    </div>

                    <div id="tab2" class="tabcontent">
                        <h3><i class="fa fa-university pr-2" aria-hidden="true"></i>Back Details</h3>
                        <form class="pt-3">
                            <div class="form-group">
                                <label for="name">Beneficiary Name</label>
                                <input type="text" class="form-control" id="name"  placeholder="Enter your beneficiary name">
                            </div>
                            <div class="form-group">
                                <label for="account">Account Number</label>
                                <input type="text" class="form-control" id="account" placeholder="Enter your account number">
                            </div>
                            <div class="form-group">
                                <label for="bank">Bank Name</label>
                                <input type="text" class="form-control" id="bank" placeholder="Enter your bank name">
                            </div>
                            <div class="form-group">
                                <label for="code">IFSC Code</label>
                                <input type="text" class="form-control" id="code" placeholder="Enter your IFSC code">
                            </div>
                            <button type="submit" class="btn btn-secondary">Save</button>
                        </form>
                    </div>

                    <div id="tab3" class="tabcontent">
                        <h3><i class="fa fa-gavel pr-2" aria-hidden="true"></i>Legal and Policies</h3>
                    </div>

                </div>
            </div>
          
            
            


        </div>


    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

@include('staff.layouts.footer') 
