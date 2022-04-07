@include('admin.layouts.app')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container multivendors" id="container">

    @include('admin.layouts.sidebar')

    @if(session('wrong'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 " role="alert">

        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{session('wrong')}}</span>
        </div>

    </div>
    @endif
    @if(session('message'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 " role="alert">

        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{session('message')}}</span>
        </div>

    </div>
    @endif


    @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 " role="alert">

        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{$error}}</span>
        </div>

    </div>
    @endforeach

    @endif


    <div class="grid grid-cols-6 gap-4">

        <div class="col-span-3 gap-4">

            <div class="grid gap-4">

                <div class="py-5">

                    <div class="bg-white overflow-hidden sm:rounded-lg">


                        <div class="p-4 bg-white border-b border-gray-200">
        
                            <table>
                            
                                <thead>
                                    
                                    <th>
                                        <td>#.</td>
                                        <td>Title.</td>
                                        <td>category</td>
                                        <td>slug</td>
                                        <td>short Discrition</td>
                                        <td>Full Discription</td>
                                        <td>Meta description</td>
                                        <td> Meta Keywords </td>
                                        <td> Banner 1</td>
                                        <td> Banner 2</td>
                                        <td>Created date</td>
                                        <td>Updated date</td>
                                        <td>Actions.</td>
                                    </th>
                                    
                                </thead>
                            <?php  $i=0;?>
                                    @if(count($members)>0)
                                    
                                    @foreach ($members as $value)
                                        <tr> 
                                            <td> {{$i++}}</td>
                                            <td>{{ $value->title }}</td>
                                            <td>{{ $value->cat_id }}</td>
                                            <td>{{ $value->short_discription}}</td>
                                            <td>{{ $value->full_discription}}</td>
                                            <td>{{ $value->meta_discription }}.</td>
                                            <td>{{ $value->meta_keywords }}.</td>

                                            <td>{{ $value->banner_1 }}.</td>
                                            <td>{{ $value->banner_2 }}.</td>


                                            <td>
                                                <a style="font-size:21px;font-weight:bold;color:rgb(201 133 9);" href="{{'blogEdit/'.$value['id']}}"><i class="far fa-edit"></i></a>
                                                <a style="font-size:21px;font-weight:bold;color:red;" href="{{'blogDelete/'.$value['id']}}"><i class=" far fa-trash-alt"></i></a>
                                            </td>
                                        
                                        </tr>
                                    @endforeach
                                    
                                    @endif
                                    
                            </table>
                        
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    @include('admin.layouts.footer')