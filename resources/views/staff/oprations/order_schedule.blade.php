
@include('staff.layouts.app')

<style>
    .schedule thead {
    background: rgba(0,0,0,.05);
    }
.schedule .table-striped tbody tr:nth-of-type(odd) {
    background-color: unset;
}
.schedule table tbody td .d-flex img {
    width: 50px;
    height: 50px;    margin-right: 20px;
}
.schedule table tbody td .d-flex .parah h6 {
    color: #00bfbf;
    font-size: 16px;
    margin-bottom: 0px;
}
.schedule table tbody td input.form-check-input{
    width: 120px;
    padding: 7px 0px 6px 6px;
    margin-top: 0px;
 }
 .schedule table tbody td .input-group .input-group-append {
    margin-left: 100px;
}
.schedule .table tbody tr td p a {
    background: white;
    border: 1px solid #ccc;
    box-shadow: 3px 3px 2px #dadada54;
    padding: 5px 10px;
    border-radius: 5px;
}
.schedule .top {
    background: rgba(0,0,0,.05);
    padding: 15px 20px 0px; border: 1px solid #ccc;
}
.schedule select#inputGroupSelect02{
    width: 25%;
}
.schedule .top h6 {
    width: 40%;
    line-height: 43px;
}
.schedule h2 span a {
    float: right;
    font-size: 10px;
    background: #fff;border-radius: 5px;
    color:#000;border: 1px solid #ccc;
    padding: 10px;box-shadow: 3px 3px 2px #dadada54;
}
.schedule table select#sel1 {
    width: 250px;    background: #f2f2f2;
    font-size: 12px;box-shadow: 3px 3px 2px #dadada54;
}
.schedule table .d-flex input {
    width: 80px;
    padding-left: 10px;
    margin-right: 10px;
    margin-left: 10px;
}
</style>
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

@include('staff.layouts.sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content wallet">

        <div class="allstd-page schedule">
                <h2>  Scheduled Pickups in Bulk <span><a href="#">Cnacel and go back to Manage Orders</a></span></h2>
                <h6 class="pt-4">Scheduled Pickup for 9 Orders.</h6>
            <div class="top d-flex">
                <h6>No. of Orders : 9</h6>
                <h6 style="width: 35%;">Shipped Service : Standard</h6> 
                <select class="custom-select" id="inputGroupSelect02">
                <option selected>Selected schedule</option>
                <option value="1">dd.mm.yyy, Hr:min</option>
                <option value="2">dd.mm.yyy, Hr:min</option>
                <option value="3">dd.mm.yyy, Hr:min</option>
            </select>           
            </div>

            <table class="table table-striped custab mt-2">
                <thead>
                    <tr class="text-left">
                        <th>Order details</th>
                        <th>Package weight</th>
                        <th>Package Dimensions <a href="">Package Settings</a></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-left">
                        <td>
                            <div class="d-flex">
                                <img src="{{asset('admin-assets/images/products.jpg')}}">
                                <div class="parah">
                                <h6>77578587-8687</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                 Lorem Ipsum has been the industry's standard dummy text ever since the<br> 1500s, when an unknown printer took a galley</p>
                                <p>SKU: 78687688 | Quantity: 1</p>
                                </div>
                                
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3">
                                    <input type="number" class="form-check-input" value="2000">
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">g</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select class="form-control mb-2" id="sel1" name="sellist1">
                                <option>Package Dimensions</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <div class="d-flex">
                            <input type="text" value="20.5">x
                            <input type="text" value="10.4">x
                            <input type="text" value="1.0">
                            <p class="pt-2">cm</p>
                            </div>
                        </td>
                        <td><p><a href="#">Remove</a></p>
                        </td>
                    </tr>
                    <tr class="text-left">
                        <td>
                            <div class="d-flex">
                                <img src="{{asset('admin-assets/images/products.jpg')}}">
                                <div class="parah">
                                <h6>77578587-8687</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                 Lorem Ipsum has been the industry's standard dummy text ever since the<br> 1500s, when an unknown printer took a galley</p>
                                <p>SKU: 78687688 | Quantity: 1</p>
                                </div>
                                
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3">
                                    <input type="number" class="form-check-input" value="2000">
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">g</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select class="form-control mb-2" id="sel1" name="sellist1">
                                <option>Package Dimensions</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <div class="d-flex">
                            <input type="text" value="20.5">x
                            <input type="text" value="10.4">x
                            <input type="text" value="1.0">
                            <p class="pt-2">cm</p>
                            </div>
                        </td>
                        <td><p><a href="#">Remove</a></p>
                        </td>
                    </tr>
                    <tr class="text-left">
                        <td>
                            <div class="d-flex">
                                <img src="{{asset('admin-assets/images/products.jpg')}}">
                                <div class="parah">
                                <h6>77578587-8687</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                 Lorem Ipsum has been the industry's standard dummy text ever since the<br> 1500s, when an unknown printer took a galley</p>
                                <p>SKU: 78687688 | Quantity: 1</p>
                                </div>
                                
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3">
                                    <input type="number" class="form-check-input" value="2000">
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">g</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select class="form-control mb-2" id="sel1" name="sellist1">
                                <option>Package Dimensions</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <div class="d-flex">
                            <input type="text" value="20.5">x
                            <input type="text" value="10.4">x
                            <input type="text" value="1.0">
                            <p class="pt-2">cm</p>
                            </div>
                        </td>
                        <td><p><a href="#">Remove</a></p>
                        </td>
                    </tr>
                    <tr class="text-left">
                        <td>
                            <div class="d-flex">
                                <img src="{{asset('admin-assets/images/products.jpg')}}">
                                <div class="parah">
                                <h6>77578587-8687</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                 Lorem Ipsum has been the industry's standard dummy text ever since the<br> 1500s, when an unknown printer took a galley</p>
                                <p>SKU: 78687688 | Quantity: 1</p>
                                </div>
                                
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3">
                                    <input type="number" class="form-check-input" value="2000">
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">g</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select class="form-control mb-2" id="sel1" name="sellist1">
                                <option>Package Dimensions</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <div class="d-flex">
                            <input type="text" value="20.5">x
                            <input type="text" value="10.4">x
                            <input type="text" value="1.0">
                            <p class="pt-2">cm</p>
                            </div>
                        </td>
                        <td><p><a href="#">Remove</a></p>
                        </td>
                    </tr>
                    <tr class="text-left">
                        <td>
                            <div class="d-flex">
                                <img src="{{asset('admin-assets/images/products.jpg')}}">
                                <div class="parah">
                                <h6>77578587-8687</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                 Lorem Ipsum has been the industry's standard dummy text ever since the<br> 1500s, when an unknown printer took a galley</p>
                                <p>SKU: 78687688 | Quantity: 1</p>
                                </div>
                                
                            </div>
                        </td>
                        <td>
                            <div class="input-group mb-3">
                                    <input type="number" class="form-check-input" value="2000">
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">g</label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <select class="form-control mb-2" id="sel1" name="sellist1">
                                <option>Package Dimensions</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <div class="d-flex">
                            <input type="text" value="20.5">x
                            <input type="text" value="10.4">x
                            <input type="text" value="1.0">
                            <p class="pt-2">cm</p>
                            </div>
                        </td>
                        <td><p><a href="#">Remove</a></p>
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
