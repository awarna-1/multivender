<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class StaffController extends Controller
{
    public function index()
    {
        $role= Auth::guard('admin')->user()->role;
        $id= Auth::guard('admin')->user()->id;
        if($role == 'Admin'){
            $data = Admin::paginate(12);
        }
        if($role == 'Seller'){
            $data = Admin::where('parent_id' , $id)->where('role' , 'Executive')->paginate(12);
        }
        return view('admin.oprations.staff', ['members' => $data]);
    }

    public function create(Request $request)
    {

        $errors = $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:admins,email',
            'phone' => 'required|min:11|numeric',
            'password' => 'required|min:8',
            'conform_password' => 'required_with:password|same:password|min:6',
            'role' => 'required',
        ]);

        $data = new admin;
        $parent_id = 0;
        if($request->role == 'Executive'){
            $parent_id = Auth::guard('admin')->user()->id;
        }
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $password = $request->input('password');
        $data->password = Hash::make($password);
        $data->role = $request->input('role');
        $data->parent_id = $parent_id;

        $done = $data->save();

        $user_id = DB::getPdo()->lastInsertId();;

        if($request-> acc_num != null){
            $bank_details = DB::table('bank_detials');
            $bank_data = [
                'user_id' => $user_id,
                'account_holder' => $request->acc_hol,
                'account_number' => $request->acc_num,
                'bank_name'     => $request->bank_name,
                'ifsc'      => $request->ifc_code
            ];
            $bank_details->insert($bank_data);
        }


     


        if ($done) {
            return redirect()->back()->with('message', 'Staff added successfully');
        } else {
            return redirect()->back()->with('worng', 'Something went wrong or File not uploaded');
        }
    }
    public function del(Request $request)
    {

        $id = $request->id;
        $del = admin::find($id)->delete();
        if ($del) {

            return redirect()->back()->with('message', 'Staff entry Deleted successfully');
        } else {
            return redirect()->back()->with('wrong', 'Sorry Something went worng');
        }
    }

    public function edit(Request $request)
    {
        $id  = $request->id;
        $data = Admin::find($id);
        $bank_data = DB::table("bank_detials")->where('user_id' , $id)->get();
        if(isset($bank_data[0])  ){
            $data['bank']=$bank_data;
        }
        return view('admin.oprations.staffUpdate', ['data' => $data]);
    }


    public function update(Request $request)
    {
        $parent_id = 0;
        if($request->role == 'Executive'){
            $parent_id = Auth::guard('admin')->user()->id;
        }
    
        $admin_data = admin::where('id' , $request->id);
        $data =[];
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $password = $request->password;
        $data['password'] = Hash::make($password);
        $data['role'] = $request->role;
        $data['parent_id']= $parent_id;
        $com = $admin_data->update($data);


        $checkbank = DB::table('bank_detials')->where('user_id' ,$request->id)->count();
        $bank_details = DB::table('bank_detials')->where('user_id' ,$request->id);
         if($checkbank == 1 && $request->acc_num != null){
               $bank_data = [
               'user_id' => $request->id,
               'account_holder' => $request->acc_hol,
               'account_number' => $request->acc_num,
               'bank_name'     => $request->bank_name,
               'ifsc'      => $request->ifc_code
        ];
        $bank_details->update($bank_data);
    }
    if($checkbank == 0 && $request->acc_num != null){
        $bank_details = DB::table('bank_detials');
        $bank_data = [
            'user_id' => $request->id,
            'account_holder' => $request->acc_hol,
            'account_number' => $request->acc_num,
            'bank_name'     => $request->bank_name,
            'ifsc'      => $request->ifc_code
        ];
        $bank_details->insert($bank_data);
    }
        

        if ($com) {
            return redirect('/admin/staff')->with('message', 'Staff details updated succesfully');
        } else {
            return redirect('/admin/staff')->with('wrong', 'something went wrong');
        }
    }

}
