<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        else
        {
            return view('admin.dashboard');
        }
    }

    public function updatePassword(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();

            // --- check if current password is correct --- //
            if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
                    Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['new_password'])]);
                    return response()->json(['status'=>'true']);
            }else{
                return response()->json(['status'=>'false']);
            }
        }
        
    }

    public function checkPassword(Request $request)
    {
        $data = $request->all();
       
        if(Hash::check($data['current_password'],Auth::guard('admin')->user()->password)){
            return 'true';
        }
        return 'false';
    }

    public function login(Request $request)
    {
        if($request->isMethod('POST')){
            $data = $request->all();
            // echo '<pre>'; print_r($data); die;
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1]))
            {   
                    return redirect('admin/dashboard');
            }
            else 
            {
                return redirect()->back()->with('error_msg','invalid email or password');
            }
        }
        return view('front.home');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
