<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GalleryController extends Controller
{
    public function index()
    {
        $role= Auth::guard('admin')->user()->role;
        $id= Auth::guard('admin')->user()->id;

        if($role == 'Admin'){
            $data = Gallery::paginate(5);
        }
        if($role == 'Seller'){
            $data = Gallery::where('parent_id' , $id)->paginate(5);
        }
        return view('admin.oprations.gallery.gallery', ['members' => $data]);
    }

    public function sort(Request $req)
    {
        if ($req->sort = 1) {
            $data = Gallery::orderBy('id', 'DESC')->paginate(5);
        } else {
            $data = Gallery::paginate(10);
        }

        return view('admin.oprations.gallery.gallery', ['members' => $data]);
    }
    public function new()
    {
        
        return view('admin.oprations.gallery.gallery_new');
    }

    public function store(Request $request)
    {
        $errors = $request->validate([
            'file' => 'mimes:jpg,jpeg,png',
        ]);
        $role= Auth::guard('admin')->user()->role;
        $id= Auth::guard('admin')->user()->id;

        $image = $request->file('file');
        $orgname = $image->getClientOriginalName();
        $exploded_name = explode('.', $orgname)[0];
        $extension = $image->extension();
        $filename = 'image' . time() . '_' . $exploded_name . '.' . $extension;

        $data = new gallery;
        $data->name = $image->getClientOriginalName();
        $data->location = $filename;
       

        if($role == 'Seller'){
            $data->parent_id = $id;
        }

        $move = $image->move('uploads/gallery', $filename);

        if ($move) {
            $done = $data->save();
        }

        return response()->json(['success' => $filename]);
    }

    public function del(Request $request)
    {

        $id = $request->id;
        $del = Gallery::find($id)->delete();
        if ($del) {
            return redirect()->back()->with('message', 'Image deleted successfully');
        }
    }
}
