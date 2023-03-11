<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use App\Models\BookingInfo;
use App\Models\BookingInfoId;
use App\Models\Car;
use App\Models\CarCheckList;
use App\Models\CarType;
use App\Models\History;
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
// use Mpdf\Mpdf;
use Dompdf\Dompdf;


class FrontController extends Controller
{
    
    public function home(Request $request)
    {   
        Session::forget('error_message');
        Session::put('page','home');
        Session::put('title','CCH Car Rentals');
        

      
        // $imagePath = public_path('front/images/road.jpg');

        // $image = Image::make($imagePath)->resize(800, 800, function($constraint) {
        //     $constraint->aspectRatio();
        // });

      
        // $image->save(public_path('front/images/resized-road.jpg'));

       

        return view('front.home');
    }
    public function cars(Request $request)
    {
        
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
           
            
            $owner = Admin::where('owner_id',(int)$data['owner-id'])->get()->first();
            
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
            $input_time_end = $data['book-time-end'];
            $time_end = date("g:i A", strtotime($input_time_end));
            $booking->time_end = $time_end;
            $booking->status = "pending";
            $booking->user_id = Auth::user()->id;
            $booking->car_id = (int)$data['car-id'];
            $booking->owner_id = $owner->owner_id;

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
            
            if($request->hasFile('license') )
            {
                $img_tmp1 = $request->file('license'); 
               
                if($img_tmp1->isValid() ){
                    // --- Get image extension --- //
                    $extension1 = $img_tmp1->getClientOriginalExtension(); 
                 
                    $license =  Image::make($img_tmp1)->resize(800,800,function($constraint)
                    {
                        $constraint->aspectRatio();
                    });
                    $licenseData = base64_encode($license->encode($extension1));
                
                    $booking_info->license = $licenseData;
                    
                }
            }

            if($request->hasFile('utility'))
            {
                $img_tmp2 = $request->file('utility');
                if($img_tmp2->isValid()){
                    // --- Get image extension --- // 
                    $extension2 = $img_tmp2->getClientOriginalExtension(); 

                    $utility =  Image::make($img_tmp2)->resize(800,800,function($constraint)
                    {
                        $constraint->aspectRatio();
                    });
                    $utilityData = base64_encode($utility->encode($extension2));
                
                    $booking_info->utility = $utilityData;
                }
            
            }
            $booking_info->terms = $data['booking-terms'];
            $booking_info->booking_id = $booking_table->id;

            $booking_info->save();

           
           if($request->hasFile('valid-id') && $request->hasFile('valid-id-2'))
           {
                $img_tmp3 = $request->file('valid-id');
                if($img_tmp3->isValid())
                {
                    $extension3 = $img_tmp3->getClientOriginalExtension();
                    
                    $validId =  Image::make($img_tmp3)->resize(800,800,function($constraint)
                    {
                        $constraint->aspectRatio();
                    });
                    $validIdData = base64_encode($validId->encode($extension3));

                    $booking_id = new BookingInfoId;
                    $booking_id->images = $validIdData;
                    $booking_id->booking_id = $booking_table->id;
                    $booking_id->save();
                }
                $img_tmp4 = $request->file('valid-id-2');
                if($img_tmp4->isValid())
                {
                    $extension4 = $img_tmp4->getClientOriginalExtension();
                    
                    $validId2 =  Image::make($img_tmp4)->resize(800,800,function($constraint)
                    {
                        $constraint->aspectRatio();
                    });
                    $validIdData2 = base64_encode($validId2->encode($extension4));
                    
                    $booking_id = new BookingInfoId;
                    $booking_id->images = $validIdData2;
                    $booking_id->booking_id = $booking_table->id;
                    $booking_id->save();
                }
            }

            $carBooked = Booking::where('user_id',Auth::user()->id)->count();
            Session::put('carBooked',$carBooked);

            // Send booking email to owner email

            if((int)$data['owner-id'] === 0)
            {
                $email = 'cchcarrentals@gmail.com';
            }
            else{
                $email = $owner->email;
            }
            
            $name = $owner->first_name . ' ' .$owner->last_name; 
            
            
            $messageData = [
                'email' => $email,
                'name' => $name,
                'booking' => $booking,
                'renter' => $data['fullname'],
            ];
            
            try {

                Mail::send('emails.user.car-booking',$messageData, function($message)use($email){
                    $message->to($email)->subject('New Car Booking Request');
                });
    
                return response()->json(['data'=>'success']);
            } catch (\Throwable $th) {
                return response()->json(['data'=>'success']);
            }  
        }
    }
    public function reservedCar()
    {
        Session::put('page','reserved-cars');
        Session::put('title','Reserved Cars'); 
        $carBooked = Booking::where('user_id',Auth::user()->id)->count();
        Session::put('carBooked',$carBooked); 

        $booking = Booking::with('bookingInfo','bookingInfoId','carInfo')->where('user_id',Auth::user()->id)->get()->toArray();
     
        $histories = History::where('user_id',Auth::user()->id)->get()->toArray();
        //    dd($booking);
      
        return view('front.home')->with(compact('booking','histories'));
    }
    public function cancelBooking(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $booking = Booking::with('bookingInfo')->find($data['booking_id']);
            $booking->status = $data['account'];
            $booking->save();

            $owner = Admin::where('owner_id',$booking->owner_id)->get()->first();

            // Send booking email to owner email
            

            if($owner->owner_id === 0)
            {
                $email = 'cchcarrentals@gmail.com';
            }
            else{
                $email = $owner->email;
            }
            
            $name = $owner->first_name . ' ' .$owner->last_name; 
            
            
            $messageData = [
                'email' => $email,
                'name' => $name,
                'booking' => $booking,
                'renter'=> $booking->bookingInfo->fullname,
            ];
            
            
            try {
                Mail::send('emails.user.cancelled-booking',$messageData, function($message)use($email){
                    $message->to($email)->subject('Car Booking Cancellation Notification');
                });
              
                return response()->json(['data'=>$data['account']]);
            } catch (\Throwable $th) {
                return response()->json(['data'=>$data['account']]);
               
            }
             
        }
    }
    public function returnBooking(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            
            $booking = Booking::with('bookingInfo')->find($data['booking_id']);
            $booking->status = 'returned';
            $booking->save();

            $owner = Admin::where('owner_id',$booking->owner_id)->get()->first();


            // Send booking email to owner email
            
            

            if($owner->owner_id === 0)
            {
                $email = 'cchcarrentals@gmail.com';
                // $email = 'iamterradocarlo@gmail.com';
            }
            else{
                $email = $owner->email;
            }
            
            $name = $owner->first_name . ' ' .$owner->last_name; 
            
            
            $messageData = [
                'email' => $email,
                'name' => $name,
                'bookingId' => $booking->id,
                'startDate' => $booking->start_date,
                'endDate' => $booking->end_date,
                'renter'=> $booking->bookingInfo->fullname,
            ];
            
            try {
                Mail::send('emails.user.user-return-booking',$messageData, function($message)use($email){
                    $message->to($email)->subject('Car Return Notification');
                });
               
                return response()->json(['data'=>'success']);
            } catch (\Throwable $th) {
                return response()->json(['data'=>'success']);
                
            }
             
        }
    }
    public function deleteBooking(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            
            $canceledBooking = Booking::with('bookingInfoId','bookingInfo')->find($data['booking_id']);
          
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
    public function downloadBookingHistory($booking_id)
    {
        $history =  History::find($booking_id)->toArray();
        $pdf = view('front.cars.booking-pdf-template',['history'=>$history])->render();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($pdf);

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
       

    }
    public function downloadChecklist($book_id)
    {
        $book =  Booking::with('carInfo')->find($book_id)->toArray();
       
        // $pdf = view('admin.booking.booking-pdf-template',['history'=>$history])->render();
        // $pdf = view('front.cars.pdf-car-checklist',['book'=>$book])->render();
      
        // $mpdf = new Mpdf(); // Create new mPDF instance
        // $mpdf->WriteHTML($pdf); // Load HTML
        // $mpdf->Output('checklist.pdf', 'D'); // Output the generated PDF to the browser

    }
    public function about(Request $request)
    {
       
        Session::put('page','about');
        Session::put('title','About Us');
       return view('front.home');

    }
    public function frequentlyAskedQuestions()
    {
        
        Session::put('page','frequently-asked-questions');
        Session::put('title','Frequently Asked Questions');
       
       return view('front.home');

    }
    public function contact(Request $request)
    {
      
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
                try {
                    
                    Mail::send('emails.user.user_confirmation',$messageData, function($message) use ($email){
                        $message->to($email)->subject('Account confirmation');
                    });

                    Session::put('message', 'Your account is successfully created. Check your email and verify your account. Thank you.');
    
                    return response()->json(['status'=>'success']);
                } catch (\Throwable $th) {
                    return response()->json(['status'=>'success']);
                }
               
               
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
                $message = 'Your account is already confirmed! Welcome to CCH Car Rentals';
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
                try {
                    Mail::send('emails.user.user_confirmed',$messageData, function($message)use($userEmail){
               
                        $message->to($userEmail)->subject('Confirmed User Account!');
                    });

                } catch (\Throwable $th) {
                    return redirect('login')->with('success_message',$message);
                }
                
               
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
                try {
                    
                    Mail::send('emails.user.forgot_password',$messageData, function($message)use($email){
                        $message->to($email)->subject('Temporary password reset');
                    });
                    User::where('email',$email)->update(['password'=>bcrypt($tempPassword)]);
                    return response()->json(['status'=>'found']);
                } catch (\Throwable $th) {
                    User::where('email',$email)->update(['password'=>bcrypt($tempPassword)]);
                    return response()->json(['status'=>'found']);
                }

                
                
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
