<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Car;
use App\Models\CarType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class FrontController extends Controller
{
    public function home(Request $request)
    {   
        Session::forget('error_message');
        Session::put('page','home');
        Session::put('title','Chesca Chen\'s Car Rental');
        return view('front.home');
    }
    public function cars(Request $request)
    {
        Session::forget('error_message');
        Session::put('page','cars');
        Session::put('title','Cars');
       
     
        $cartypes = CarType::where('status',1)->get()->toArray();
        
        if($request->ajax())
        {
            $data = $request->all();
            $priceFrom = (int)$data['from'];
            $priceTo = (int)$data['to'];
            // return response()->json(['data'=>$data]);
           
           
                
                    $cars = Car::with('carPhotos','carPrice','carTypes')->whereHas('carPrice',function($query) use ($priceFrom,$priceTo){
                        $query->where(['reg_id'=>4])->whereBetween('price',[$priceFrom,$priceTo]);
                    })->where(['status'=>1,'account'=>'verified','type_id'=>$data['type'],['capacity','>=',(int)$data['capacity']],'driver'=>$data['driver']])->orderBy('id')->paginate(6);
            
                    // return response()->json(['data'=>$cars]);
                // dd($cars);
          
            return view('front.front-ajax-cars')->with(compact('cars','cartypes'));
           
        }
        else
        { 
            
            if (isset($_GET['type']) && !empty($_GET['type'])) 
            {
                $priceFrom = $_GET['from'];
                $priceTo = $_GET['to'];
                $cars = Car::with('carPhotos','carPrice','carTypes')->whereHas('carPrice',function($query) use ($priceFrom,$priceTo){
                    $query->where(['reg_id'=>4])->whereBetween('price',[$priceFrom,$priceTo]);
                })->where(['status'=>1,'account'=>'verified','type_id'=>$_GET['type'],['capacity','>=',$_GET['capacity']],'driver'=>$_GET['driver']])->orderBy('id')->paginate(6);
            }
            else
            {
                
                $cars = Car::with('carPhotos','carPrice','carTypes')->where(['status'=>1,'account'=>'verified'])->orderBy('id')->paginate(6);
            }
            return view('front.home')->with(compact('cars','cartypes'));

            // dd($cars);
            
        return view('front.home')->with(compact('cars','cartypes'));
        }

    }
    public function about(Request $request)
    {
        Session::forget('error_message');
        Session::put('page','about');
        Session::put('title','About Us');
       return view('front.home');

    }
    public function contact(Request $request)
    {
        Session::forget('error_message');
        Session::put('page','contact');
        Session::put('title','Contact Us');
       return view('front.home');

    }
    public function profile()
    {
        Session::put('page','profile');
        Session::put('title','Profile');
       return view('front.home');
    }
    public function updateProfile(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            
            if($request->hasFile('edit-id-file'))
            { 
                $img_tmp2 = $request->file('edit-id-file');
                if($img_tmp2->isValid())
                {
                    // Get image extension 
                    $extension2 = $img_tmp2->getClientOriginalExtension(); 

                    // Generate new image name 
                    $imgName2 = rand(111,99999).'.'.$extension2;
                    $imgPath2 ='front/images/users/id/'.$imgName2;
                
                    // Upload and resize the image
                    Image::make($img_tmp2)->resize(1500,1500,function($constraint){
                            $constraint->aspectRatio();
                        })->save($imgPath2);
                    if($data['current-id-file'] !== null)
                    {
                        $currentIDFile = public_path('front/images/users/id/'.$data['current-id-file']);
                            File::delete($currentIDFile);
                    }
                }
                $validIDFile = $imgName2;
            }
            else
            {
                $validIDFile = $data['current-id-file'];
            }
            
            
            if($request->hasFile('edit-license'))
            { 
                $img_tmp1 = $request->file('edit-license');
                if($img_tmp1->isValid())
                {
                    // Get image extension 
                    $extension1 = $img_tmp1->getClientOriginalExtension(); 

                    // Generate new image name 
                    $imgName1 = rand(111,99999).'.'.$extension1;
                    $imgPath1 ='front/images/users/license/'.$imgName1;
                
                    // Upload and resize the image
                    Image::make($img_tmp1)->resize(1500,1500,function($constraint){
                            $constraint->aspectRatio();
                        })->save($imgPath1);
                    if($data['current-license'] !== null)
                    {
                        $currentLicense = public_path('front/images/users/license/'.$data['current-license']);
                            File::delete($currentLicense);
                    }

                }
                $license = $imgName1;
            }
            else
            {
                $license = $data['current-license'];
            }

            // return response()->json(['data'=>$data]);
           
            // convert birthdate input from dd/mm/yyyy to yyyy-mm-dd
            $inputDate = explode('/', $data['edit-birthdate'] ); 
            $birthdate = $inputDate[2].'-'.$inputDate[1].'-'.$inputDate[0];

            User::where('id', Auth::user()->id)->update([
                'first_name' => $data['edit-first-name'],
                'last_name' => $data['edit-last-name'],
                'birthdate' => $birthdate,
                'contact' => $data['edit-contact'],
                'address' => $data['edit-address'],
                'valid_id' => $data['edit-valid-id'],
                'valid_id_file' => $validIDFile,
                'license' => $license
            ]);

            return response()->json(['data'=>'success']);
           
        }
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
                if($request->hasFile('front-signup-id-file'))
                { 
                    $img_tmp2 = $request->file('front-signup-id-file');
                    if($img_tmp2->isValid())
                    {
                        // Get image extension 
                        $extension2 = $img_tmp2->getClientOriginalExtension(); 

                        // Generate new image name 
                        $imgName2 = rand(111,99999).'.'.$extension2;
                        $imgPath2 ='front/images/users/id/'.$imgName2;
                    
                        // Upload and resize the image
                        Image::make($img_tmp2)->resize(1500,1500,function($constraint){
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
                    $message->to($email)->subject('Account confirmation');
                });
                

                Session::put('message', 'Congratulations! Your account has been successfully created. Check your email and verify your account. Thank you.');

                return response()->json(['status'=>'success']);
            }
        
        }
        Session::put('page','signup');
        Session::put('title','Signup');
       return view('front.home');

    }
    public function success()
    {
        Session::put('page','success');
        Session::put('title','Success Page');  
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
            return redirect('/signup')->with('error_message','The link is expired! The account has already been deleted.');
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
    public function updatePassword(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();

            // --- check if current password is correct --- //
            if(Hash::check($data['current_password'],Auth::user()->password)){
                    User::where('id',Auth::user()->id)->update(['password'=>bcrypt($data['new_password'])]);
                    return response()->json(['status'=>'true']);
            }else{
                return response()->json(['status'=>'false']);
            }
        }
        
    }
    public function checkPassword(Request $request)
    {
        $data = $request->all();
       
        if(Hash::check($data['current_password'],Auth::user()->password)){
            return 'true';
        }
        return 'false';
    }
    public function forgotPassword(Request $request)
    {
        
        if($request->ajax())
        {

            $data = $request->all();
           $userEmail = User::where('email',$data['email'])->exists();
            if($userEmail)
            {
                $email = $data['email'];
                $tempPassword =  Str::random(15);
                
                $messageData = [
                    'email' => $email,
                    'code' =>  $tempPassword,
                ];

                 Mail::send('emails.user.forgot_password',$messageData, function($message)use($email){
                    $message->to($email)->subject('Temporary password reset');
                });
                User::where('email',$email)->update(['password'=>bcrypt($tempPassword)]);

                return response()->json(['status'=>'found']);
            }
          
            return response()->json(['status'=>'notfound']);
            
        }
        Session::put('page','forgot-password');
        Session::put('title','Forgot Password');
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
