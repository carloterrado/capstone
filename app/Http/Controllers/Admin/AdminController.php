<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\OwnerDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

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
            
             $registeredEmail = Admin::where('email',$data['owner-signup-email'])->count();
             if($registeredEmail > 0)
             {
                return response()->json(['status'=>'error']);
             }
            else
            {
                $rules = [
                    'email' => 'email',
                ];
                //  custom messages for validation rules 
                $customMsg = [
                    'email.email' => 'Invalid email!',
                ];
                //  validate request 
                $this->validate($request,$rules,$customMsg);
                
                if($request->hasFile('owner-signup-license') && $request->hasFile('owner-signup-id-file'))
                {
                    $img_tmp1 = $request->file('owner-signup-license'); 
                    $img_tmp2 = $request->file('owner-signup-id-file');
                    if($img_tmp1->isValid() && $img_tmp2->isValid()){
                        // --- Get image extension --- //
                        $extension1 = $img_tmp1->getClientOriginalExtension(); 
                        $extension2 = $img_tmp1->getClientOriginalExtension(); 
                        // --- Generate new image name --- //
                        $imgName1 = rand(111,99999).'.'.$extension1; 
                        $imgPath1 ='owner/images/license/'.$imgName1;
                        $imgName2 = rand(111,99999).'.'.$extension2;
                        $imgPath2 ='owner/images/id/'.$imgName2;
                    
                        // --- Upload and resize the image --- //
                        Image::make($img_tmp1)->resize(500,500,function($constraint){
                                $constraint->aspectRatio();
                            })->save($imgPath1);
                        Image::make($img_tmp2)->resize(500,500,function($constraint){
                                $constraint->aspectRatio();
                            })->save($imgPath2);
                    
                    }
                }

                $owner = new OwnerDetail;
                $owner->contact = $data['owner-signup-contact'];
                $owner->address = $data['owner-signup-address'];
                // convert birthdate input from dd/mm/yyyy to yyyy-mm-dd
                $inputDate = explode('/', $data['owner-signup-birthdate'] ); 
                $birthdate = $inputDate[2].'-'.$inputDate[1].'-'.$inputDate[0];
                $owner->birthdate = $birthdate ;
                $owner->license =  $imgName1;
                $owner->valid_id = $data['owner-signup-valid-id'];
                $owner->valid_id_file =  $imgName2;
                $owner->terms = $data['owner-signup-terms'];
                $owner->save();

                $newOwner = $owner;  

                $admin = new Admin;
                $admin->type = 'owner';
                $admin->first_name = $data['owner-signup-first-name'];
                $admin->last_name = $data['owner-signup-last-name'];
                $admin->email = $data['owner-signup-email'];
                $admin->password = bcrypt($data['owner-signup-password']);
                $admin->owner_id = $newOwner->id;
                $admin->save();

                // Send confirmation email to owner email
                $email = $data['owner-signup-email'];
                $name = $data['owner-signup-first-name']. ' ' .$data['owner-signup-last-name']; 
                
                $messageData = [
                    'email' => $email,
                    'name' => $name,
                    'code' => base64_encode($email),
                ];

                 Mail::send('emails.owner.owner_confirmation',$messageData, function($message)use($email){
                    $message->to($email)->subject('Confirm your Owner Account');
                });
               
                return response()->json(['status'=>'success']);
              
            }
        
        }
        return view('owner.signup');
    }

    public function confirmEmail($email)
    {
       
         // Decode owner email
         $ownerEmail = base64_decode($email);
         $created = Admin::where('email',$ownerEmail)->get(['created_at','owner_id']);

        //  check if the regitered email is existing if not tell the car owner that it is been deleted
         if(count($created) === 0)
         { 
             return redirect('/admin/login')->with('error_message','The account has been deleted!');
         }

        //   check if car owner account is not yet confirm, if email_verified_at is not null tell the car owner that account is already been confirmed
         $verified_at = Admin::where('email',$ownerEmail)->get('email_verified_at');
         if($verified_at[0]['email_verified_at'] !== null)
         {
             return redirect('/admin/login')->with('error_message','The account had already been confirmed!');
         }
         
         $getCreatedDate = Carbon::createFromFormat('Y-m-d H:s:i',$created[0]['created_at']); 
         $confirmDate = Carbon::createFromFormat('Y-m-d H:s:i',now()); 
         $expiry =  $getCreatedDate->diffInHours($confirmDate); 

        //  Check the registered time of car owner and if takes past more than 2 hrs the link will get expired then delete the account if the car owner try to confirm.
         if($expiry > 1)
         {
             Admin::where('email',$ownerEmail)->delete(); 
             OwnerDetail::where('id',$created[0]['owner_id'])->delete();
             return redirect('/admin/signup')->with('error_message','The link is expired');
         }
          
         $ownerCount = Admin::where('email',$ownerEmail)->count();
         if($ownerCount > 0)
         {
            $ownerDetails =  Admin::where('email',$ownerEmail)->first();
            if($ownerDetails->status === 1)
            {
                $message = 'Your owner account is already confirmed! Check your email if your account has been verified. Thank you!';
            }
            else
            {  
                Admin::where('email',$ownerEmail)->update(['status'=>1, 'email_verified_at'=>now()]);
                $message = 'Your owner account is already confirmed! Wait for admin to verify your credentials, Thank you!';

                $messageData = [
                    'email' => $ownerEmail,
                    'name' => $ownerDetails->first_name. ' '.$ownerDetails->last_name,
                    'code' => base64_encode($email),
                ];
    
               Mail::send('emails.owner.owner_confirmed',$messageData, function($message)use($ownerEmail){
               
                    $message->to($ownerEmail)->subject('Confirmed Owner Account!');
                });
            } 

            return redirect('admin/login')->with('success_message',$message);
           
         }
         else
         {
            abort(404);
         }
    }

    public function forgotPassword(Request $request)
    {
        
        if($request->ajax())
        {

            $data = $request->all();
           $userEmail = Admin::where('email',$data['email'])->exists();
            if($userEmail)
            {
                $email = $data['email'];
                $tempPassword =  Str::random(10);
                
                $messageData = [
                    'email' => $email,
                    'code' =>  $tempPassword,
                ];

                 Mail::send('emails.user.forgot_password',$messageData, function($message)use($email){
                    $message->to($email)->subject('Temporary password reset');
                });
                Admin::where('email',$email)->update(['password'=>bcrypt($tempPassword)]);

                return response()->json(['status'=>'found']);
            }
          
            return response()->json(['status'=>'notfound']);
            
        }
        Session::put('page','forgot-password');
        Session::put('title','Forgot Password');
        return view('owner.forgot-password');
    }

    public function login(Request $request)
    {
        
        if($request->ajax()){

            $data = $request->all();  
            // return response()->json(['status'=>$data]);
                
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>1]))
            {   
                $firstName = strtoupper(Auth::guard('admin')->user()->first_name);
                $lastName = strtoupper(Auth::guard('admin')->user()->last_name);
                $initials =  mb_substr($firstName,0,1).mb_substr($lastName,0,1);
                $fullname = strtolower($firstName.' '.$lastName);
                Session::put('fullname',$fullname);
                Session::put('initials',$initials);
                if(Auth::guard('admin')->user()->account === 'verified')
                {
                    return response()->json(['status'=>'verified']);
                }
                else if(Auth::guard('admin')->user()->account === 'declined')
                {
                    return response()->json(['status'=>'declined']);    
                }
                else
                {
                    return response()->json(['status'=>'unverified']);
                }
               
            }
            else if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'status'=>0]))
            {
                Auth::guard('admin')->logout();
                return response()->json(['status'=>'unconfirmed']);
            }
            else
            {
                return response()->json(['status'=>'invalid']);

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
