<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class StaffController extends Controller
{
    public function index()
    {
        $data = Admin::where('role','!=','Admin')->paginate(12);
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

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $password = $request->input('password');
        $data->password = Hash::make($password);
        $data->role = $request->input('role');

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

        $errors = $request->validate([
            'name' => 'required',
            'phone' => 'required|min:11|numeric',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);
        $admin_data = admin::where('id' , $request->id);
        $data =[];
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $password = $request->password;
        $data['password'] = Hash::make($password);
        $data['role'] = $request->role;
        $com = $admin_data->update($data);
        $checkbank = DB::table('bank_detials')->where('user_id' ,$request->id)->count();
         if($checkbank == 1){
               $bank_details = DB::table('bank_detials')->where('user_id' ,$request->id);
               $bank_data = [
               'user_id' => $request->id,
               'account_holder' => $request->acc_hol,
               'account_number' => $request->acc_num,
               'bank_name'     => $request->bank_name,
               'ifsc'      => $request->ifc_code
        ];
        $bank_details->update($bank_data);
    }else{
        $data = new admin;

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $password = $request->input('password');
        $data->password = Hash::make($password);
        $data->role = $request->input('role');

        $done = $data->save();
    }
        

        if ($com) {
            return redirect('/admin/staff')->with('message', 'Staff details updated succesfully');
        } else {
            return redirect('/admin/staff')->with('wrong', 'something went wrong');
        }
    }

}
