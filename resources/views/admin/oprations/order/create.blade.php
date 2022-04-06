@include('admin.layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<style>
   .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    /* The popup form - hidden by default */
    .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    /* Add styles to the form container */
    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    /* Full-width input fields */
    .form-container input[type=text],
    .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus,
    .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom: 10px;
        opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover,
    .open-button:hover {
        opacity: 1;
    }
    .filterable{
        background: #000;
        color: #fff;
        padding: 20px;
        box-shadow: 0px 2px 4px 1px rgb(196 195 195);
        border-radius: 5px;
        width: 80%;
    }
    .filterable h4{color: #fff;}
    .filterable input::placeholder {
        color: #bebebe;
        font-weight: normal !important;
        font-size: 14px;
    }
    .filterable input#date::placeholder{
        color: #bebebe;
        font-weight: normal !important;
        font-size: 14px;
    }
    .filterable button {
    background: #fff;
    border: 1px solid #fff;
    padding: 10px 35px;
    }
    .filterable button:hover {
    border: 1px solid white;
    background: black;
    color: #fff;
    }
    .filterable input#date {
    color: #bebebe;    font-size: 14px;
    }
    div#myForm {
    background: #ccc;
    padding: 10px 20px;
    border-color: #ccc;
    }
    fieldset.add-address legend {
    color: #000;
    font-size: 20px;
    }
    fieldset.add-address input.submit {
    padding: 7px 20px;
    background: #000;
    color: #fff;
    border: 1px solid #000;
    font-size: 13px;
    margin-right: 10px;
    margin-top: 12px;
    }
    fieldset.add-address input.submit:hover {
    background: #fff;
    color: #000;
    }
    fieldset.add-address button {
    padding: 7px 32px;border: 1px solid #000;
    }
</style>
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')
    <div id="content" class="main-content wallet">

        <div class="allstd-page">
            <h2 class="pb-4"> Order / Create Order</h2>
            <div class="container-fluid">
                <!-- <hr> -->
                <div class="row">
                    <div class="panel panel-primary filterable">
                        <div class="panel-heading">
                            <h4 class="panel-title">Create Order</h4>



                            @if (\Session::has('success'))
                      <div class="alert alert-success">
                    <ul>
                     <li> <h4 style="color: green;"> {!! \Session::get('success') !!} </h4></li>
                       </ul>
                  </div>
                @endif
                             <div class="tab-pane fade show active pt-5" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="">
                                    <form method="post" action="{{'/admin/order_create'}}">
                                        @csrf

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="user">User</label>
                                                <select id="user" placeholder="Select user" onchange="auto_fill(this.value)" name="user">
                                                    @foreach($data['users'] as $user)
                                                    <option value="">Select</option>
                                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">

                                                <label for="birthday">Order Date</label><br>
                                                <input type="date" id="date" name="date" class="form-control" name="date">

                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="product">Product</label>
                                                <select id="product" placeholder="Select user" name="product" onchange="auto_fill_varient(this.value)">
                                                    @foreach($data['products'] as $product)
                                                    <option value="">Select</option>
                                                    <option value="{{$product->id}}">{{$product->name}} ( {{$data['categories'][$product->cat_id]}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4" id="varient">
                                            <label for="varient">varient</label>
                                            <select placeholder="Select varient ">
                                                    <option value="">Select</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4" id="quantity">
                                            <label for="quantity">Quantity</label>
                                            <select placeholder="Select quantity ">
                                                    <option value="">Select</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4" id="address">                                            <label for="varient">address</label>
                                            <label for="varient">address</label>
                                            <select id="product" placeholder="Select address">
                                                    <option value="">Select</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <button type="submit" > Submit</button>
                                            </div>
                                            <input type="hidden" name="product_id" id ="product_id" >    



                                        </div>
                                    </form>
                                </div>


                                <div class="form-popup" id="myForm">
                                    <form action="{{'add_address'}}" method="post" class="form-horizontal" role="form" >

                                        <fieldset class="add-address">

                                            <!-- Form Name -->
                                            <legend class="text-black">Address Details</legend>

                                                @csrf
                                                <!-- <label for="fname">First name:</label> -->
                                                <input type="text" id="fname" name="name" class="form-control mb-2" placeholder="First name:">
                                                <!-- <label for="lname">Last name:</label> -->
                                                <input type="text" id="lname" name="lname" class="form-control mb-2" placeholder="Last name:">
                                                <input type="email" id="email" name="email" class="form-control mb-2" placeholder="Email Id">
                                                <!-- <label for="phone">Phone No.</label> -->
                                                <input type="phone" id="phone" name="phone" class="form-control mb-2" placeholder="Phone No.">
                                                <!-- <label for="hno">Home/Street No.</label> -->
                                                <input type="text" id="hno" name="hno" class="form-control mb-2" placeholder="Address">
                                                <!-- <label for="pin">Pin No.</label> -->
                                                <input type="text" id="pin" name="pincode" class="form-control mb-2" placeholder="Pin No.">
                                                <!-- <label for="email">Email Id</label> -->
                                                <input type="text" id="state" name="state" class="form-control" placeholder="State">
                                                <input type="submit" value="Submit" class="submit"> <button onclick="closeForm()" type="reset"> Cancel</button>
                                                <input type="hidden" name="user" id ="user_id" >





                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('admin.layouts.footer')

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }


    function auto_fill(uid) {

        $.ajax({
            url: 'user_data_ajax/' + uid,
            type: 'get',
            data: {

                " _token": '{{csrf_token()}}',
                "uid": uid,

            },
            success: function(result) {
                $('#address').html(result['result']);
                console.log(result);
                var select;
                select = result['id'];
                
                if (select == 0) {
                    document.getElementById("myForm").style.display = "block";
                }

            }

        });
        $("#user_id").val(uid);


    }
    function auto_fill_varient(pid){
    
        $('#product_id').val(pid);
        $.ajax({
            url: 'varient_data_ajax/' + pid,
            type: 'get',
            data: {

                " _token": '{{csrf_token()}}',
                "uid": pid,

            },
            success: function(result) {
                $('#varient').html(result['varient']);
                $('#quantity').html(result['quantity']);
              
            }

        });
    

    }
</script>
<script>
    function open_form() {

        var select;
        select = $('#address_select').val();
        if (select == 0) {
            document.getElementById("myForm").style.display = "block";
        } else {
            document.getElementById("myForm").style.display = "none";
        }

    }
</script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('select').selectize({
            sortField: 'text'
        });
    });
</script>