<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;


class FrontController extends Controller
{
    public function home(Request $request)
    {
        Session::put('page','home');
        Session::put('title','Chesca Chen\'s Car Rental');
        return view('front.home');
    }
    public function cars(Request $request)
    {
        Session::put('page','cars');
        Session::put('title','Cars');
       return view('front.home');

    }
    public function about(Request $request)
    {
        Session::put('page','about');
        Session::put('title','About Us');
       return view('front.home');

    }
    public function contact(Request $request)
    {
        Session::put('page','contact');
        Session::put('title','Contact Us');
       return view('front.home');

    }

 
    public function login(Request $request)
    {
       
        if($request->isMethod('POST')){
            $data = $request->all();
            // echo '<pre>'; print_r($data); die;
           

            if(Auth::attempt(['email'=>$data['front-login-email'],'password'=>$data['front-login-password'],'status'=>1]))
            {   
                $firstName = strtoupper(Auth::user()->first_name);
                $lastName = strtoupper(Auth::user()->last_name);
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
        
    }
    public function getLogin()
    {
        Session::put('page','login');
        Session::put('title','Login');
       return view('front.home'); 
    }
  
    public function signup(Request $request)
    { 
        if( $request->isMethod('post'))
        {
            $data = $request->all();
           
            $rules = [
                'email' => 'email|max:255',
                'front-signup-license' => 'image|mimes:jpeg,jpg,png,gif',
                'front-signup-id-file' => 'image|mimes:jpeg,jpg,png,gif',
            ];
             //  custom messages for validation rules 
             $customMsg = [
                'email.required' => 'Email is required!',
                'email.email' => 'Invalid email!',
            ];
             //  validate request 
             $this->validate($request,$rules,$customMsg);


             if($request->hasFile('front-signup-license') && $request->hasFile('front-signup-id-file'))
             {
                $img_tmp1 = $request->file('front-signup-license'); 
                $img_tmp2 = $request->file('front-signup-id-file');
                if($img_tmp1->isValid() && $img_tmp2->isValid()){
                    // --- Get image extension --- //
                    $extension1 = $img_tmp1->getClientOriginalExtension(); 
                     $extension2 = $img_tmp1->getClientOriginalExtension(); 
                    // --- Generate new image name --- //
                    $imgName1 = rand(111,99999).'.'.$extension1; 
                    $imgPath1 ='front/images/users/license/'.$imgName1;
                    $imgName2 = rand(111,99999).'.'.$extension2;
                    $imgPath2 ='front/images/users/id/'.$imgName2;
                
                    // --- Upload and resize the image --- //
                    Image::make($img_tmp1)->resize(500,500,function($constraint){
                            $constraint->aspectRatio();
                        })->save($imgPath1);
                    Image::make($img_tmp2)->resize(500,500,function($constraint){
                            $constraint->aspectRatio();
                        })->save($imgPath2);
                 
                }
            }
   
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
            $user->license =  $imgName1;
            $user->valid_id = $data['front-signup-valid-id'];
            $user->valid_id_file =  $imgName2;
            $user->status = 1;
            $user->save();       
           
            if(Auth::attempt(['email'=>$data['front-signup-email'],'password'=>$data['front-signup-password']]))
            {  

                $firstName = strtoupper(Auth::user()->first_name);
                $lastName = strtoupper(Auth::user()->last_name);
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
        Session::put('page','signup');
        Session::put('title','Signup');
       return view('front.home');

    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
    
   
}
