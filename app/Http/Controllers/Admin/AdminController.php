<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function login(Request $request)
    {
        if($request->isMethod('POST')){
            $data = $request->all();
            // echo '<pre>'; print_r($data); die;
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1]))
            {
                if(Auth::guard('admin')->user()->type === 'owner')
                {
                    return redirect('owner/dashboard');
                }
                else
                {
                    return redirect('admin/dashboard');
                }
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
