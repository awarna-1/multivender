<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\File; 

class BlogController extends Controller
{

    public function index()
    {
        $data =  Blog::paginate(10);
        return view('blog::blog', ['members' => $data]);
    }


    public function create()
    {
        return view('blog::create-blog');
    }


    public function store(Request $request)
    {
        $errors = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'full_description' => 'required',
            'banner_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'banner_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'meta_description' => 'required',
            'meta_keywords' => 'required',

        ]);



        if ($request->hasFile('banner_2')) {
            $image = $request->file('banner_2');
            $name2 = time() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/blog_media', $name2);
        }
        if ($request->hasFile('banner_1')) {
            $image = $request->file('banner_1');
            $name1 = mt_rand(1, 100000) . time() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/blog_media', $name1);
        }

        $data = new Blog;

        $data->title = $request->title;
        $data->cat_id = $request->category;
        $data->banner_1 = $name1;
        $data->banner_2 = $name2;

        $data->short_discription = $request->short_description;
        $data->slug = $request->slug;
        $data->full_discription = $request->full_description;
        $data->meta_discription = $request->meta_description;
        $data->meta_keywords = $request->meta_keywords;
        $data->created_at = date('Y-m-d');


        $done = $data->save();

        if ($done) {
            return redirect('admin/blog')->with('message', 'A new Blog added successfully');
        } else {
            return redirect()->back()->with('worng', 'Something went wrong or Blog data not sent');
        }
    }


    public function show($id)
    {
        return view('blog::show');
    }


    public function edit($id)
    {
        $value = Blog::find($id);
        $blogCategory = BlogCategory::get();
        $category = BlogCategory::where('id', $blogCategory[0]->id)->get();
        return view('blog::update-blog', ['value' => $value, 'categories' => $blogCategory, 'category' => $category[0]->name]);
    }


    public function update(Request $request)
    {

        $data = Blog::find($request->id);
        $allblogs=Blog::where('id' , $request->id)->get();

        if ($request->hasFile('banner_2')) {
            $image = $request->file('banner_2');
            $name2 = time() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/blog_media', $name2);
            $data->banner_2 = $name2;
            $image_path = public_path("uploads/blog_media/{$allblogs[0]->banner_2}");
            if (File::exists($image_path)) {
                unlink($image_path);
            }
        }
        if ($request->hasFile('banner_1')) {
            $image = $request->file('banner_1');
            $name1 = mt_rand(1, 100000) . time() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/blog_media', $name1);
            $data->banner_1 = $name1;
            $image_path = public_path("uploads/blog_media/{$allblogs[0]->banner_1}");
            if (File::exists($image_path)) {
                unlink($image_path);
            }
            //unlink old image
        }

        $data->title = $request->title;
        $data->cat_id = $request->category;

        $data->short_discription = $request->short_description;
        $data->slug = $request->slug;
        $data->full_discription = $request->full_description;
        $data->meta_discription = $request->meta_description;
        $data->meta_keywords = $request->meta_keywords;
        $data->created_at = date('Y-m-d');


        $done = $data->update();


        if ($done) {
            return redirect('/admin/blog')->with('message', 'Blog updated succesfully');
        } else {
            return redirect()->back()->with('wrong', 'something went wrong or Blog not updated');
        }
    }


    public function destroy($id)
    {
        $del = Blog::find($id)->delete();
        if ($del) {

            return redirect()->back()->with('message', 'Blog deleted successfully');
        } else {
            return redirect()->back()->with('wrong', 'Something went wrong or blog not deleted');
        }
    }
}
