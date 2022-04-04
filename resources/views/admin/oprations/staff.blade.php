@include('admin.layouts.app')

<div class="main-container multivendors" id="container">

        @include('admin.layouts.sidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content wallet">

            <div class="row justify-content-between align-items-center mb-10 mt-30">
                <!-- Page Heading Start-->
                <div class="col-12 col-lg-auto mb-2 pt-4 ">
                    <div class="page-heading">
                        <h6>Staff <span>/ All Staff</span></h6>
                    </div>
                </div>
                <!--Page Heading End -->
            </div>

            <div class="lead_mang allstd-page" id="navbarscroll">
                <h2>All Staff</h2>

                <table class="table table-striped custab">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone No.</th>
                            <th>Email Address</th>  
                             <th>Role</th>
                               <th>Created</th>
                            <th class="text-center">Active</th>
                            <th class="text-center">Action</th>

                        </tr>
                    </thead>
                    <?php $i=1; ?>
                        @foreach($members as $member)
                    <tr>
                       
                        <td>{{$i++}}</td>
                        <td>{{$member->name}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->email}}</td>
                        <td>{{$member->role}}</td>
                        <td>{{$member->created_at}}</td>
                        <td class="text-center">
                            <label class="switch">
                                <input type="checkbox" checked onclick="active()" id="active">
                                <span class="slider round"></span>
                            </label><br>
                            <span class="" ><a href="#">Deactive</a></span><span><a href="#" onclick="deactive()">Active</a></span>
                        </td>
                        <td>
                            <button>Edit</button> <button> delete</button>

                        </td>
                    </tr>
                    @endforeach

                </table>


            </div>


        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
<!-- 
<script>

function active(){
var active;

if($('#active').is(":checked")) active ='1';
else active ='0';

$.ajax({

    'url':'/admin/active',
    'type': 'post',
    'data': active
}
     function success(result){

     }

)

} -->
</script> 

    @include('staff.layouts.footer') 
