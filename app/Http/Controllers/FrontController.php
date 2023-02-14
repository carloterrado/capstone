<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\BookingInfo;
use App\Models\BookingInfoId;
use App\Models\Car;
use App\Models\CarType;
use App\Models\Refregion;
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
        $regions = Refregion::with('province')->where('status',1)->get()->toArray();
       
        
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $priceFrom = (int)$data['from'];
            $priceTo = (int)$data['to'];
            
                    $cars = Car::with('carPhotos','carPrice','carTypes','carBooking')->whereHas('carPrice',function($query) use ($priceFrom,$priceTo){
                        $query->where(['reg_id'=>4])->whereBetween('price',[$priceFrom,$priceTo]);
                    })->where(['status'=>1,'account'=>'verified','type_id'=>$data['type'],['capacity','>=',(int)$data['capacity']],'driver'=>$data['driver']])->orderBy('id')->paginate(6);
            
            return view('front.home')->with(compact('cars','cartypes','regions'));
           
        }
        else
        { 
            
            if (isset($_GET['type']) && !empty($_GET['type'])) 
            {
                $priceFrom = $_GET['from'];
                $priceTo = $_GET['to'];
                $cars = Car::with('carPhotos','carPrice','carTypes','carBooking')->whereHas('carPrice',function($query) use ($priceFrom,$priceTo){
                    $query->where(['reg_id'=>4])->whereBetween('price',[$priceFrom,$priceTo]);
                })->where(['status'=>1,'account'=>'verified','type_id'=>$_GET['type'],['capacity','>=',$_GET['capacity']],'driver'=>$_GET['driver']])->orderBy('id')->paginate(6);
            }
            else
            {
                
                $cars = Car::with('carPhotos','carPrice','carTypes','carBooking')->where(['status'=>1,'account'=>'verified'])->orderBy('id')->paginate(6);
            }
            // dd($cars);
            return view('front.home')->with(compact('cars','cartypes','regions'));

           
            
        // return view('front.home')->with(compact('cars','cartypes','regions'));
        }

    }
    public function bookCar(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();

            $booking = new Booking;
            $date_range = $data['date'];
            $dates = explode(" - ", $date_range);
            $start_date = date("Y-m-d", strtotime($dates[0]));
            $end_date = date("Y-m-d", strtotime($dates[1]));
            $booking->start_date = $start_date;
            $booking->end_date = $end_date;
            $input_time = $data['book-time'];
            $time = date("g:i A", strtotime($input_time));
            $booking->time = $time;
            $booking->status = "pending";
            $booking->user_id = Auth::user()->id;
            $booking->car_id = (int)$data['car-id'];

            $booking->save();

            $booking_table = $booking;

            $booking_info = new BookingInfo;
            $booking_info->fullname = $data['fullname'];
            $booking_info->contact = $data['contact'];
            $booking_info->destination = $data['book-city'] . ", " . $data['book-province'];
            $booking_info->driver = $data['driver'];
            $booking_info->driver_fee = $data['driver-fee'];
            $booking_info->car_price = $data['car-price'];
            $booking_info->grand_total = $data['total-price'];
            $booking_info->address = $data['address'];
            
            if($request->hasFile('license') && $request->hasFile('utility'))
            {
                $img_tmp1 = $request->file('license'); 
                $img_tmp2 = $request->file('utility');
                if($img_tmp1->isValid() && $img_tmp2->isValid()){
                    // --- Get image extension --- //
                    $extension1 = $img_tmp1->getClientOriginalExtension(); 
                    $extension2 = $img_tmp2->getClientOriginalExtension(); 
                    // --- Generate new image name --- //
                    $imgName1 = rand(111,99999).'.'.$extension1; 
                    $imgPath1 ='front/images/users/license/'.$imgName1;
                    $imgName2 = rand(111,99999).'.'.$extension2;
                    $imgPath2 ='front/images/users/utility/'.$imgName2;
                
                    // --- Upload and resize the image --- //
                    Image::make($img_tmp1)->resize(800,800,function($constraint){
                            $constraint->aspectRatio();
                        })->save($imgPath1);
                    Image::make($img_tmp2)->resize(800,800,function($constraint){
                            $constraint->aspectRatio();
                        })->save($imgPath2);
                    $booking_info->license = $imgName1;
                    $booking_info->utility = $imgName2;
                }
            }
            else
            {
               
                $img_tmp2 = $request->file('utility');
                if($img_tmp2->isValid()){
                    // --- Get image extension --- // 
                    $extension2 = $img_tmp2->getClientOriginalExtension(); 
                    // --- Generate new image name --- //
                    $imgName2 = rand(111,99999).'.'.$extension2;
                    $imgPath2 ='front/images/users/utility/'.$imgName2;
                
                    // --- Upload and resize the image --- //
                    Image::make($img_tmp2)->resize(800,800,function($constraint){
                            $constraint->aspectRatio();
                        })->save($imgPath2);
                        $booking_info->utility = $imgName2;
                }
            }
            
           
            $booking_info->booking_id = $booking_table->id;

            $booking_info->save();

           
            foreach($data['valid-id'] as $identification)
            {
                $img_tmp = $identification;
                if($img_tmp->isValid())
                {
                    $extension = $img_tmp->getClientOriginalExtension();
                    // --- Generate new image name --- //
                    $imgName = rand(111,99999).'.'.$extension;
                    
                        $imgPath ='front/images/users/id/'.$imgName;
                    
                    // --- Upload the image --- //
                    Image::make($img_tmp)->resize(800,800,function($constraint)
                    {
                        $constraint->aspectRatio();
                    })->save($imgPath); 
                    
                    $booking_id = new BookingInfoId;
                    $booking_id->images = $imgName;
                    $booking_id->booking_id = $booking_table->id;
                    $booking_id->save();
                }
            }

    
            $carBooked = Booking::where('user_id',Auth::user()->id)->count();
            Session::put('carBooked',$carBooked);
            return response()->json(['data'=>'success']);
            // return response()->json(['data'=>[$booking,$booking_info,$booking_id]]);
           
            
        }
    }
    public function reservedCar()
    {
        Session::put('page','reserved-cars');
        Session::put('title','Reserved Cars');  

        $booking = Booking::with('bookingInfo','bookingInfoId','carInfo')->where('user_id',Auth::user()->id)->get()->toArray();
      
        return view('front.home')->with(compact('booking'));
    }
    public function cancelBooking(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $booking = Booking::find($data['booking_id']);
            $booking->status = $data['account'];
            $booking->save();
            return response()->json(['data'=>$data['account']]);
        }
    }
    public function deleteBooking(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            
            $canceledBooking = Booking::with('bookingInfoId','bookingInfo')->find($data['booking_id']);
            if($canceledBooking->bookingInfo->license !== null)
            {
                $bookingLicense = public_path('front/images/users/license/'.$canceledBooking->bookingInfo->license);
                    File::delete($bookingLicense);
            }
            $bookingUtility = public_path('front/images/users/utility/'.$canceledBooking->bookingInfo->utility);
                    File::delete($bookingUtility);

            foreach($canceledBooking->bookingInfoId as $ids)
            {
                $bookingImg = public_path('front/images/users/id/'.$ids->images);
                File::delete($bookingImg);
            }
            $canceledBooking->delete();
            BookingInfo::where('booking_id',$data['booking_id'])->delete();
            BookingInfoId::where('booking_id',$data['booking_id'])->delete();
           
            return response()->json(['data'=>'success']);
        }
    }
    public function bookCarRegFee(Request $request)
    {
        
        if($request->ajax())
        {
            $data =$request->all();
            return response()->json(['data'=>'success']);
        }
    }
    public function bookingChecklistConfirmed(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $booking = Booking::find($data['booking_id']);
            $booking->status = 'ongoing';
            $booking->save();
            return response()->json(['data'=>'success']);
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
            $user = User::find(Auth::user()->id); 
            
           
            // convert birthdate input from dd/mm/yyyy to yyyy-mm-dd
            $inputDate = explode('/', $data['edit-birthdate'] ); 
            $birthdate = $inputDate[2].'-'.$inputDate[1].'-'.$inputDate[0];
            if($user->first_name !== $data['edit-first-name'])
            {
                $user->first_name = $data['edit-first-name']; 
            }
            if($user->last_name !== $data['edit-last-name'])
            {
                $user->last_name = $data['edit-last-name']; 
            }
            if($user->birthdate !== $birthdate)
            {
                $user->birthdate = $birthdate; 
            }
            if($user->contact !== $data['edit-contact'])
            {
                $user->contact = $data['edit-contact']; 
            }
            if($user->address !== $data['edit-address'])
            {
                $user->address = $data['edit-address']; 
            }
            // if($user->valid_id !== $data['edit-valid-id'])
            // {
            //     $user->valid_id = $data['edit-valid-id']; 
            // }
            $user->save();

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
                $carBooked = Booking::where('user_id',Auth::user()->id)->count();
                Session::put('carBooked',$carBooked);
            
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
                // if($request->hasFile('front-signup-id-file'))
                // { 
                //     $img_tmp2 = $request->file('front-signup-id-file');
                //     if($img_tmp2->isValid())
                //     {
                //         Get image extension 
                //         $extension2 = $img_tmp2->getClientOriginalExtension(); 

                //         Generate new image name 
                //         $imgName2 = rand(111,99999).'.'.$extension2;
                //         $imgPath2 ='front/images/users/id/'.$imgName2;
                    
                //         Upload and resize the image
                //         Image::make($img_tmp2)->resize(1500,1500,function($constraint){
                //                 $constraint->aspectRatio();
                //             })->save($imgPath2);
                //     }
                // }
                
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
                // $user->valid_id = $data['front-signup-valid-id'];
                // $user->valid_id_file =  $imgName2;
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
                

                Session::put('message', 'Your account is successfully created. Check your email and verify your account. Thank you.');

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
