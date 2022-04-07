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

                        
                        <th>#.</th>
                        <th>Title.</th>
                        <th>category</th>
                        <th>slug</th>
                        <th>short Discrition</th>
                        <th>Full Discription</th>
                        <th>Meta description</th>
                        <th> Meta Keywords </th>
                        <th> Banner 1</th>
                        <th> Banner 2</th>
                        <th>Created date</th>
                        <th>Status</th>

                        <th>Actions.</th>
                    
                    </tr>
                </thead>
                <?php $i = 1; ?>
                @if(count($members)>0)

                @foreach ($members as $value)
                <tr>
                    <td> {{$i++}}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->cat_id }}</td>
                    <td>{{ $value->slug }}</td>

                    <td>{{ $value->short_discription}}</td>
                    <td>{{ $value->full_discription}}</td>
                    <td>{{ $value->meta_discription }}.</td>
                    <td>{{ $value->meta_keywords }}.</td>

                    <td>{{ $value->banner_1 }}.</td>
                    <td>{{ $value->banner_2 }}.</td>
                    <td>{{$value->created_at}}</td>


                    <td class="text-center">
                        <label class="switch">
                        <input type="checkbox" <?php if($value->status == 1) echo "checked"; ?> onclick="active(this.value)" id="active" value="{{$value->id}}">
                            <span class="slider round"></span>
                        </label><br>
                    </td>
                    <td>
                    <a href="{{asset('admin/staff/edit/'.$value->id)}}"><button type="button" class="btn btn-success">Edit</button></a>
                    <a href="{{asset('admin/staff/Delete/'.$value->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>

                    </td>

                </tr>
                @endforeach

                @endif

            </table>

        </div>


    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->
<script>
    function active(admin_id) {
        var active;

        if ($('#active').is(":checked")) active = '1';
        else active = '0';

        $.ajax({
            url: 'update_active/' + admin_id + '/' + active,
            type: 'get',
            data: {},
            success: function(result) {}

        });

    }
</script>

@include('staff.layouts.footer')