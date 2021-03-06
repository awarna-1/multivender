@include('admin.layouts.app')

<div class="main-container multivendors" id="container">


    @include('admin.layouts.sidebar')

    @if(session('wrong'))
        {{session('wrong')}}
    @endif


    @if(session('message'))
        {{session('message')}}
    @endif


    @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach

    @endif
    <?php use Illuminate\Support\Facades\Auth;
 $role= Auth::guard('admin')->user()->role;;
 ?>


        @include('admin.layouts.sidebar')

        <div id="content" class="main-content">

            <div class="d-flex justify-content-between mb-10 mt-30">
                
                <div class="page-heading">

                    <h6>Category <span>/ Edit Category</span></h6>

                </div>

            </div>

            <div class="allstd-pageq addblog" id="navbarscroll">

                <form action="{{route('admin.category_update')}}" class="d-flex justify-content-center mb-10 mt-30" method="POST">
                    
                    <div class="pdt-infor">

                        <h5>Category Details</h5>

                        @csrf
                        
                        <input type="hidden" value="{{$data->id}}" name="id">


                        <div class="form-group row mb-3">
                            <label for="title" class="col-sm-3 col-form-label">Category Name<span>*</span></label>
                            <div class="col-sm-9">
                                <input name="name" value="{{$data->name}}" type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        
                        <div class="form-group row mb-3">
                            <label for="title" class="col-sm-3 col-form-label">Main_id<span>*</span></label>
                            <div class="col-sm-9">
                                <input name="main_id" value="{{$data->main_id}}" type="text" class="form-control" placeholder="main_id">
                            </div>
                        </div>

                        <div class="form-group row mb-3" @if($role !='Admin')  style ="display:none" @endif> 
                            <label for="title" class="col-sm-3 col-form-label">commission<span>*</span></label>
                            <div class="col-sm-9">
                                <input name="commission" value="{{$data->commission}}" type="text" class="form-control" placeholder="commission % ">
                            </div>
                        </div>

                     
                        <div class="form-group row mb-3" @if($role !='Admin')  style ="display:none" @endif> 
                            <label for="slug" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                
                                <select name="status" class="form-control">

                                    <option value="{{$data->status}}" selected>{{$data->status}}</option>
                                    <option value="publish">publish</option>
                                    <option value="unpublish">Unpublish</option>
                                
                                </select>

                            </div>
                        </div>
                        <button type="submit" id="Submit_form" class="btn btn-warning">Done</button>
                        
                    </div>


                </form>
                
            </div>

        </div>

</div>

@include('admin.layouts.footer')