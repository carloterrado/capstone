<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
    public function signup(Request $request)
    { 
        if($request->ajax()){
            $data = $request->all();
            // echo '<pre>'; print_r($data); die;
            if(Auth::guard('admin')->attempt(['email'=>$data['admin-login-email'],'password'=>$data['admin-login-password'],'status'=>1]))
            {   
                $firstName = strtoupper(Auth::guard('admin')->user()->first_name);
                $lastName = strtoupper(Auth::guard('admin')->user()->last_name);
                $initials =  mb_substr($firstName,0,1).mb_substr($lastName,0,1);
                $fullname = strtolower($firstName.' '.$lastName);
                Session::put('fullname',$fullname);
                Session::put('initials',$initials);
                return response()->json(['status'=>'success']);
            }
            else 
            {
                return response()->json(['status'=>'failed']);
            }
        }
        return view('owner.signup');
    }

    public function login(Request $request)
    {
        
        if($request->isMethod('POST')){

            $data = $request->all();  
             
            if(Auth::guard('admin')->attempt(['email'=>$data['admin-login-email'],'password'=>$data['admin-login-password'],'status'=>1]))
            {   
                $firstName = strtoupper(Auth::guard('admin')->user()->first_name);
                $lastName = strtoupper(Auth::guard('admin')->user()->last_name);
                $initials =  mb_substr($firstName,0,1).mb_substr($lastName,0,1);
                $fullname = strtolower($firstName.' '.$lastName);
                Session::put('fullname',$fullname);
                Session::put('initials',$initials);
               
                return redirect('admin/dashboard');
            }
            else 
            {
                return redirect()->back()->with('owner_error_message','Invalid email or password');
             
            }
        }
        
        

        return view('owner.login');
    }

   

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
