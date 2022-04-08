<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  BlogCategory::paginate(5);
        return view('blog::blog_category' , compact('data'));
    }
    public function upload()
    {
        return view('blog::new_category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        BlogCategory::insert(['name'=>$request->name]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $value = BlogCategory::find($id);
        return view('blog::update_blogCategory', compact('value'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    //  public function edit(BlogCategory $blogCategory)
    // {
        
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $errors = $request->validate([
            'name' => 'required',
        ]);
        $data =[];
        $blog = BlogCategory::where('id',$request->id);
        $data['name'] = $request->name;
        $com = $blog->update($data);
return redirect('/admin/blog_category');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function del(Request $request,$id)
    {
        $id = $request->id;
        $del = BlogCategory::find($id)->delete();
        if ($del) {

            return redirect()->back()->with('message', 'Deleted successfully');
        } else {
            return redirect()->back()->with('wrong', 'Not Deleted');
        }
    }
}
