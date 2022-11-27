<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\OwnerDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

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
            return response()->json(['status'=>'success']);
        
        }
        return view('owner.signup');
    }

    public function login(Request $request)
    {
        
        if($request->ajax()){

            $data = $request->all();  
            // return response()->json(['status'=>$data]);
                
            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password'],'account'=>'verified']))
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
                return response()->json(['status'=>'error']);
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
