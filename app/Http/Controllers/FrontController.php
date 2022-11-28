<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
        if($request->ajax()){
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
            
                return response()->json(['status'=>'active']);   
            }
            else if(Auth::attempt(['email'=>$data['front-login-email'],'password'=>$data['front-login-password'],'status'=>0]))
            { 
                Auth::guard('web')->logout();
                return response()->json(['status'=>'inactive']); 
            }
            else 
            {
                return response()->json(['status'=>'invalid']);
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
        if( $request->ajax())
        {
            $data = $request->all();
            
            
            $registeredEmail = User::where('email',$data['front-signup-email'])->count();
            if($registeredEmail > 0)
            {
               return response()->json(['status'=>'error']);
            }
            else
            {
                
            
                $rules = [
                    'email' => 'email|unique:users',
                ];
                //  custom messages for validation rules 
                $customMsg = [
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
                $user->terms = $data['front-signup-terms'];
                $user->save();
            
                // Send confirmation email to owner email
                $email = $data['front-signup-email'];
                $name = $data['front-signup-first-name']. ' ' .$data['front-signup-last-name']; 
                
                $messageData = [
                    'email' => $email,
                    'name' => $name,
                    'code' => base64_encode($email),
                ];

                 Mail::send('emails.user.user_confirmation',$messageData, function($message)use($email){
                    $message->to($email)->subject('Confirm your registered account');
                });
               
                return response()->json(['status'=>'success']);
            }
        
        }
        Session::put('page','signup');
        Session::put('title','Signup');
       return view('front.home');

    }

    public function confirmEmail($email)
    {
        // Decode owner email
        $userEmail = base64_decode($email);
        $created = User::where('email',$userEmail)->get('created_at');
        if(count($created) === 0)
        { 
            return redirect('/login')->with('error_message','The account has been deleted!');
        }

        $verified_at = User::where('email',$userEmail)->get('email_verified_at');
        if($verified_at[0]['email_verified_at'] !== null)
        {
            return redirect('/login')->with('error_message','The account had already been confirmed!');
        }
        
        $getCreatedDate = Carbon::createFromFormat('Y-m-d H:s:i',$created[0]['created_at']); 
        $confirmDate = Carbon::createFromFormat('Y-m-d H:s:i',now()); 
        $expiry =  $getCreatedDate->diffInHours($confirmDate); 

        if($expiry > 1)
        {
            User::where('email',$userEmail)->delete(); 
            return redirect('/signup')->with('error_message','The link is expired');
        }
        
         $userCount = User::where('email',$userEmail)->count();
         if($userCount > 0)
         {
            $userDetails =  User::where('email',$userEmail)->first();
            if($userDetails->status === 1)
            {
                $message = 'Your account is already confirmed! Welcome to Chesca Chen\'s Car Rental';
            }
            else
            {  
                User::where('email',$userEmail)->update(['status'=>1, 'email_verified_at'=>now()]);
                $message = 'Your account is already confirmed!';

                $messageData = [
                    'email' => $userEmail,
                    'name' => $userDetails->first_name. ' '.$userDetails->last_name,
                    'code' => base64_encode($email),
                ];
    
               Mail::send('emails.user.user_confirmed',$messageData, function($message)use($userEmail){
               
                    $message->to($userEmail)->subject('Confirmed User Account!');
                });
            } 

            return redirect('login')->with('success_message',$message);
           
         }
         else
         {
            abort(404);
         }
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
    
   
}
