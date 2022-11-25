<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class FrontController extends Controller
{
    public function home()
    {
        Session::put('title','Chesca Chen\'s Car Rental');
        return view('front.home');
    }
    public function cars(Request $request)
    {
        Session::put('title','Cars');
       return view('front.cars');

    }
    public function about(Request $request)
    {
        Session::put('title','About Us');
       return view('front.about');

    }
    public function contact(Request $request)
    {
        Session::put('title','Contact Us');
       return view('front.contact');

    }
    public function login(Request $request)
    {
        
        Session::put('title','Login');
       return view('front.login');

    }
    public function signup(Request $request)
    { 
        if( $request->ajax())
        {
            $data = $request->all();

            $rule = [
                
            ];
            $msg = [
               
            ];
            $this->validate($request,$rule,$msg);
   

            $user = new User;
            $user->first_name = $data['front-signup-first-name'];
            $user->last_name = $data['front-signup-last-name'];
            $user->email = $data['front-signup-email'];

            // convert birthdate input from dd/mm/yyyy to yyyy-mm-dd
            $inputDate = explode('/', $data['front-signup-birthdate'] ); 
            $birthdate = $inputDate[2].'-'.$inputDate[1].'-'.$inputDate[0];
            $user->birthdate = $birthdate ;

            $user->contact = $data['front-signup-contact'];
            $user->address = $data['front-signup-address'];
            $user->password = bcrypt($data['front-signup-password']);
            $user->license = $data['front-signup-license'];
            $user->valid_id = $data['front-signup-valid-id'];
            $user->valid_id_file = $data['front-signup-id-file'];
            $user->status = 1;
            $user->save();       
           
            if(Auth::attempt(['email'=>$data['front-signup-email'],'password'=>$data['front-signup-password']]))
            {  
                return response()->json(['status'=>'success']);
            }
            else
            { 
                return response()->json(['status'=>'failed']);  
            }
        
        }
     
        Session::put('title','Signup');
       return view('front.signup');

    }
    
   
}
