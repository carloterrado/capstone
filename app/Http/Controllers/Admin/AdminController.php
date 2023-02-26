<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\BookingInfo;
use App\Models\BookingInfoId;
use App\Models\Car;
use App\Models\CarCheckList;
use App\Models\CarPhoto;
use App\Models\CarPrice;
use App\Models\CarType;
use App\Models\History;
use App\Models\OwnerDetail;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Mpdf\Mpdf;



class AdminController extends Controller
{
    public function dashboard()
    {
        Session::put('title','Chesca Chen\'s Car Rental');
        Session::put('page','dashboard');
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $unpaidCount = History::where('owner_id',Auth::guard('admin')->user()->owner_id)->where('commission','unpaid')->count();

            if($unpaidCount > 3)
            {
                Session::put('title','Booking History');
                Session::put('page','booking-history');
                Session::put('commission_error_message','You need to settle the unpaid commissions first');
                $owner_id = Auth::guard('admin')->user()->owner_id;
                $histories = History::where('owner_id',$owner_id)->get()->toArray();
                return view('owner.dashboard')->with(compact('histories'));
            }
            Session::forget('commission_error_message');
            $car = Car::where('admin_id',Auth::guard('admin')->user()->id)->get();
            $ownerCar = $car->where('account','verified')->count();
            $ownerCarRequest = $car->where('account','unverified')->count();
            $ownerCarDeclined = $car->where('account','declined')->count();
            $dashboard = [
                'ownerCarCount' => $ownerCar,
                'ownerCarRequestCount' => $ownerCarRequest,
                'ownerCarDeclinedCount' => $ownerCarDeclined,
            ];
            return view('owner.dashboard')->with(compact('dashboard'));
        }
        $cartype = CarType::count();
        $car = Car::all();
        $adminCar = $car->where('owner_id',0)->count();
        $ownerCar = $car->where('owner_id','!=',0)->count();
        $ownerCarRequest = $car->where('account','unverified')->count();
        $ownerCarDeclined = $car->where('account','declined')->count();
        $admin = Admin::all();
        $admins = $admin->where('type','admin')->count();
        $staff = $admin->where('type','staff')->count();
        $owner = $admin->where('type','owner')->where('account','verified')->count();
        $ownerRequest = $admin->where('type','owner')->where('account','unverified')->count();
        $ownerDeclined = $admin->where('type','owner')->where('account','declined')->count();
        $user = User::all();
        $users = $user->where('status',1)->count();
        $userInactive = $user->where('status',0)->count();
        // dd($owner);
        $dashboard = [
            'cartypeCount' => $cartype,
            'adminCarCount' => $adminCar,
            'ownerCarCount' => $ownerCar,
            'ownerCarRequestCount' => $ownerCarRequest,
            'ownerCarDeclinedCount' => $ownerCarDeclined,
            'adminCount' => $admins,
            'staffCount' => $staff,
            'ownerCount' => $owner,
            'ownerRequestCount' => $ownerRequest,
            'ownerDeclinedCount' => $ownerDeclined,
            'userCount' => $users,
            'userInactiveCount' => $userInactive,
        ];
       
        return view('admin.dashboard')->with(compact('dashboard'));
        
    }
    //     CAR Modules
    public function newBooking()
    {
        Session::put('title','New Booking');
        Session::put('page','new-booking');
        
        $owner_id = Auth::guard('admin')->user()->owner_id;
        $booking = Booking::with('bookingInfo','bookingInfoId','carInfo')->whereHas('carInfo',
        function($query) use ($owner_id){
            $query->where(['owner_id'=>$owner_id]);
        })->where(['status'=>'pending'])->get()->toArray();
        
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $unpaidCount = History::where('owner_id',Auth::guard('admin')->user()->owner_id)->where('commission','unpaid')->count();

            if($unpaidCount > 3)
            {
                Session::put('title','Booking History');
                Session::put('page','booking-history');
                Session::put('commission_error_message','You need to settle the unpaid commissions first');
                $owner_id = Auth::guard('admin')->user()->owner_id;
                $histories = History::where('owner_id',$owner_id)->get()->toArray();
                return view('owner.dashboard')->with(compact('histories'));
            }
            Session::forget('commission_error_message');
            return view('owner.dashboard')->with(compact('booking'));
        }
       
        return view('admin.dashboard')->with(compact('booking')) ;

    }
    public function approvedBooking()
    {
        Session::put('title','Approved Booking');
        Session::put('page','approved-booking');
       
        $owner_id = Auth::guard('admin')->user()->owner_id;
        $booking = Booking::with('bookingInfo','bookingInfoId','carInfo')->whereHas('carInfo',
        function($query) use ($owner_id){
            $query->where(['owner_id'=>$owner_id]);
        })->where(['status'=>'approved'])->get()->toArray();
        
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $unpaidCount = History::where('owner_id',Auth::guard('admin')->user()->owner_id)->where('commission','unpaid')->count();

            if($unpaidCount > 3)
            {
                Session::put('title','Booking History');
                Session::put('page','booking-history');
                Session::put('commission_error_message','You need to settle the unpaid commissions first');
                $owner_id = Auth::guard('admin')->user()->owner_id;
                $histories = History::where('owner_id',$owner_id)->get()->toArray();
                return view('owner.dashboard')->with(compact('histories'));
            }
            Session::forget('commission_error_message');
            return view('owner.dashboard')->with(compact('booking'));
        }
       
        return view('admin.dashboard')->with(compact('booking')) ;

    }
    public function cancelBooking(Request $request)
    {
        
        if($request->ajax())
        {
            $data = $request->all();
            $booking = Booking::find($data['booking_id']);
            $booking->status = $data['account'];
            $booking->save();
            $user = User::find($booking->user_id);

            // Send cancelation email to user email
            $email = $user->email;
            $name = $user->first_name . ' ' .$user->last_name; 
            
            $messageData = [
                'email' => $email,
                'name' => $name,
                'booking' => $booking,
            ];
            try {
                Mail::send('emails.owner.cancelled-booking',$messageData, function($message)use($email){
                    $message->to($email)->subject('Car Booking Cancellation');
                });
    
                return response()->json(['data'=>$data['account']]);
            } catch (\Throwable $th) {
                return response()->json(['data'=>$data['account']]);
            }

             
        }
        Session::put('title','Cancelled Booking');
        Session::put('page','cancelled-booking');
        
        $owner_id = Auth::guard('admin')->user()->owner_id;
        $booking = Booking::with('bookingInfo','bookingInfoId','carInfo')->whereHas('carInfo',
        function($query) use ($owner_id){
            $query->where(['owner_id'=>$owner_id]);
        })->where(['status'=>'cancelled'])->get()->toArray();

        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $unpaidCount = History::where('owner_id',Auth::guard('admin')->user()->owner_id)->where('commission','unpaid')->count();

            if($unpaidCount > 3)
            {
                Session::put('title','Booking History');
                Session::put('page','booking-history');
                Session::put('commission_error_message','You need to settle the unpaid commissions first');
                $owner_id = Auth::guard('admin')->user()->owner_id;
                $histories = History::where('owner_id',$owner_id)->get()->toArray();
                return view('owner.dashboard')->with(compact('histories'));
            }
            Session::forget('commission_error_message');
            return view('owner.dashboard')->with(compact('booking'));
        }
       

        return view('admin.dashboard')->with(compact('booking')) ;
    }
    public function deleteBooking(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
             Booking::find($data['booking_id'])->delete();
             BookingInfo::where('booking_id',$data['booking_id'])->delete();
             BookingInfoId::where('booking_id',$data['booking_id'])->delete();
            
            return response()->json(['data'=>'success']);
        }
    }
    public function updateBookingAccount(Request $request)
    { 
        if($request->ajax()){
            $data = $request->all();
            $booking = Booking::with('bookingInfo')->find($data['booking_id']);
            $user = User::find($booking['user_id']);
            
            
             // Send confirmation email to owner email
          
             $email = $user->email;
             $name = $booking->bookingInfo->fullname; 
           
             $account = $data['account'] ;
           
            if($data['account'] === 'approved'){
                $accountMessage = 'All the information provided have been verified by the admin. Please check your reserved car. Thank you.';
              
            }
            else if ($data['account'] === 'declined')
            {
                
               $accountMessage = (string) 'All the information provided have been verified by the admin. However, the information you provided doesn\'t meet the requirement needed. Therefore, your car booking have been declined.';
            } 
            $messageData = [
                'email' => $user->email,
                'name' => $name,
                'newmessage' => $accountMessage,
               
            ];
            $booking->status = $account;
            $booking->save();
            
            try {
                Mail::send('emails.user.user-booking-message',$messageData, function($message)use($email){
                    $message->to($email)->subject('Car Booking Status');
                });
                return response()->json(['data'=>$account]);
            } catch (\Throwable $th) {
                return response()->json(['data'=>$account]);
            }
           
        }
    }
    public function bookingReturnConfirmed(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            
            $returnBooking = Booking::with('bookingInfoId','bookingInfo','carInfo')->find($data['booking_id']);
            $userEmail = User::find($returnBooking->user_id);
            
            $history = new History;
            $history->name = $returnBooking->bookingInfo->fullname;
            $history->email = $userEmail->email;
            $history->contact = $returnBooking->bookingInfo->contact;
            $history->address = $returnBooking->bookingInfo->address;
            // return response()->json(['data'=>$returnBooking->bookingInfoId->first()->images]);
            $history->valid_id = $returnBooking->bookingInfoId->first()->images;
            $history->car_name = $returnBooking->carInfo->name;
            $history->plate_number = $returnBooking->carInfo->plate_number;
            $history->capacity = $returnBooking->carInfo->capacity;
            $history->fuel_type = $returnBooking->carInfo->fuel_type;
            $history->car_type = $returnBooking->carInfo->carTypes->name;
            $history->start_date = $returnBooking->start_date;
            $history->end_date = $returnBooking->end_date;
            $history->time = $returnBooking->time;
            $history->destination = $returnBooking->bookingInfo->destination;
            if($returnBooking->bookingInfo->driver === "0")
            {
                $history->driver = "Self Drive";
            }
            else
            {
                $history->driver = "With Driver";
            }
            $history->driver_fee = $returnBooking->bookingInfo->driver_fee;
            $history->car_price = $returnBooking->bookingInfo->car_price;
            $history->grand_total = $returnBooking->bookingInfo->grand_total;
            $history->user_id = $returnBooking->user_id;
            $history->car_id = $returnBooking->car_id;
            $history->booking_id = $returnBooking->id;
            $history->owner_id = $returnBooking->carInfo->owner_id;
            if(Auth::guard('admin')->user()->owner_id !== 0)
            {
                $history->commission = "unpaid";
                $history->commission_fee = (string)((int)$returnBooking->bookingInfo->car_price * 0.02);

            }
            

            $history->save();

            
            $returnBooking->delete();
            BookingInfo::where('booking_id',$data['booking_id'])->delete();
            BookingInfoId::where('booking_id',$data['booking_id'])->delete();

             // Send returned email to user email
             $email = $userEmail->email;
            
             $messageData = [
                 'email' => $email,
                 'name' => $returnBooking->bookingInfo->fullname,
                 'startDate' => $returnBooking->start_date,
                 'endDate' => $returnBooking->end_date,
                 'bookingId' => $returnBooking->id,

             ];
 
             try {
                Mail::send('emails.owner.return-booking',$messageData, function($message)use($email){
                    $message->to($email)->subject('Car Return Notification');
                });
               return response()->json(['data'=>'success']);
             } catch (\Throwable $th) {
                return response()->json(['data'=>'success']);
             }
              

            
        }
    }
    public function bookingHistory()
    {
        Session::put('title','Booking History');
        Session::put('page','booking-history');
        $owner_id = Auth::guard('admin')->user()->owner_id;
        $histories = History::where('owner_id',$owner_id)->get()->toArray();
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $unpaidCount = History::where('owner_id',Auth::guard('admin')->user()->owner_id)->where('commission','unpaid')->count();

            if($unpaidCount > 3)
            {
                Session::put('title','Booking History');
                Session::put('page','booking-history');
                Session::put('commission_error_message','You need to settle the unpaid commissions first');
                $owner_id = Auth::guard('admin')->user()->owner_id;
                $histories = History::where('owner_id',$owner_id)->get()->toArray();
                return view('owner.dashboard')->with(compact('histories'));
            }
            Session::forget('commission_error_message');
            return view('owner.dashboard')->with(compact('histories'));
        }
        
        return view('admin.dashboard')->with(compact('histories')) ;
    }
    public function commissionHistory()
    {
        Session::put('title','Commission');
        Session::put('page','commission');
        
        $histories = History::where('owner_id','!=',0)->get()->toArray();
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard')->with(compact('histories'));
        }
        
        return view('admin.dashboard')->with(compact('histories')) ;
    }
    public function deleteBookingHistory(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            History::find($data['history_id'])->delete();
            return response()->json(['data'=>'success']);
        }
    }
    public function confirmCommissionFee(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $commission = History::find($data['history_id']);
            $commission->commission = "paid";
            $commission->save();
            return response()->json(['data'=>'success']);
        }
    }
    public function downloadBookingHistory($booking_id)
    {
        
      
        $history =  History::find($booking_id)->toArray();
        $pdf = view('admin.booking.booking-pdf-template',['history'=>$history])->render();
      
        
        $mpdf = new Mpdf(); // Create new mPDF instance
        
        $mpdf->WriteHTML($pdf); // Load HTML
        $mpdf->Output('booking.pdf', 'D'); // Output the generated PDF to the browser
      
        

    }
    public function downloadCarChecklist()
    {
        // $history =  History::find($booking_id)->toArray();
        // $pdf = view('admin.booking.booking-pdf-template',['history'=>$history])->render();
        $pdf = view('admin.cars.car-checklist-pdf',[])->render();
      
        $mpdf = new Mpdf(); // Create new mPDF instance
        header('Content-Type: application/pdf');
        $mpdf->WriteHTML($pdf); // Load HTML
        $mpdf->Output('booking.pdf', 'D'); // Output the generated PDF to the browser
        

    }
    public function carChecklist(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $fieldsToInsert = [
                'windshield',
                'hood',
                'grill',
                'frontPlate',
                'bumper',
                'headlights',
                'rearWindow',
                'bootTrunk',
                'backPlate',
                'rearBumper',
                'tailLights',
                'rightSideMirror',
                'rightSideFrontFender',
                'rightSideFrontDoorWindow',
                'rightSideRearDoorWindow',
                'rightSideFrontDoor',
                'rightSideRearDoor',
                'rightSideRearFender',
                'rightSideFrontWheels',
                'rightSideBackWheels',
                'leftSideMirror',
                'leftSideFrontFender',
                'leftSideFrontDoorWindow',
                'leftSideRearDoorWindow',
                'leftSideFrontDoor',
                'leftSideRearDoor',
                'leftSideRearFender',
                'leftSideFrontWheels',
                'leftSideBackWheels',
                'seatBelts',
                'airbags',
                'signalLights',
                'hazardLights',
                'frontExteriorLights',
                'backExteriorLights',
                'acceleratorPedal',
                'breakPedal',
                'clutchPedal',
                'gearShift',
                'steeringWheel',
                'horn',
            ];
            $car = Car::with('carChecklist')->find($data['car_id']);
        
            if($car->carChecklist === null)
            {
                $checklist = new CarCheckList;
                foreach($fieldsToInsert as $field)
                {
                        $propertyName = $field;
                    $checklist->$propertyName = json_encode($data[$field]);
                }
                if($request->has('others'))
                {
                    $checklist->others = $data['others'];   
                }
                $checklist->car_id = $data['car_id'];
                $checklist->save();  
            }
            else
            {
                foreach($fieldsToInsert as $field)
                {
                    $propertyName = $field;
                    if( $car->carChecklist->$propertyName !== json_encode($data[$field]))
                    {
                        $car->carChecklist->$propertyName = json_encode($data[$field]);
                    }
                }
                if($car->carChecklist->others !== $data['others'])
                {
                    $car->carChecklist->others = $data['others'];
                }
                $car->carChecklist->save();
            }
           
            return response()->json(['data'=>'success']);
        }
    }
    public function booking()
    {
        Session::put('title','Booking');
        Session::put('page','booking');
        $owner_id = Auth::guard('admin')->user()->owner_id;
        $booking = Booking::with('bookingInfo','bookingInfoId','carInfo')->whereHas('carInfo',
        function($query) use ($owner_id){
            $query->where(['owner_id'=>$owner_id]);
        })->where(['status'=>'ongoing'])->orWhere(['status'=>'returned'])->get()->toArray();

        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $unpaidCount = History::where('owner_id',Auth::guard('admin')->user()->owner_id)->where('commission','unpaid')->count();

            if($unpaidCount > 3)
            {
                Session::put('title','Booking History');
                Session::put('page','booking-history');
                Session::put('commission_error_message','You need to settle the unpaid commissions first');
                $owner_id = Auth::guard('admin')->user()->owner_id;
                $histories = History::where('owner_id',$owner_id)->get()->toArray();
                return view('owner.dashboard')->with(compact('histories'));
            }
            Session::forget('commission_error_message');
            return view('owner.dashboard')->with(compact('booking'));
        }
        
        
        return view('admin.dashboard')->with(compact('booking')) ;

    }
    public function carTypes(){
        
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        Session::put('title','Car Types');
        Session::put('page','car-types');
        $cartypes = CarType::get()->toArray();
        
        return view('admin.dashboard')->with(compact('cartypes')) ;
    }
    public function addCarTypes(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $isExist = CarType::where('name',$data['add-admin-car-type'])->exists();
            if($isExist)
            {
                return response()->json(['status'=> 'error']);  
            }
            $cartype = new CarType;
            $cartype->name = $data['add-admin-car-type'];
            $cartype->status = 1;
            $cartype->save();
            return response()->json(['status'=> 'success']);
        }
    }
    public function editCarTypes(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
           
            $isExist = CarType::where('name',$data['edit-admin-car-type'])->exists();
            if($isExist)
            {
                return response()->json(['status'=> 'error']);  
            }
            CarType::where('id',$data['id'])->update(['name'=>$data['edit-admin-car-type']]);
            return response()->json(['status'=> 'success']);
        }
    }
    public function updateCarTypeStatus(Request $request)
    {      
        if($request->ajax()){
            $data = $request->all();
            // return response()->json(['status'=>$data]);
         
            if($data['status'] === 'Active'){
                $status = 0;
            }else{
                $status = 1;
            }
            CarType::where('id',$data['cartype_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status]);
        }
    }
    public function deleteCarTypes(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            CarType::where('id',$data['id'])->delete();  
            return response()->json(['status'=>'deleted']);
        }
    }
    public function cars()
    {
        Session::put('title','Cars');
        Session::put('page','cars');
        $cartypes = CarType::where('status',1)->get()->toArray();
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $cars = Car::with(['carPhotos','carPrice','carTypes','carChecklist'])->where(['account'=>'verified','admin_id'=>Auth::guard('admin')->user()->id])->get()->toArray();
            $unpaidCount = History::where('owner_id',Auth::guard('admin')->user()->owner_id)->where('commission','unpaid')->count();

            if($unpaidCount > 3)
            {
                Session::put('title','Booking History');
                Session::put('page','booking-history');
                Session::put('commission_error_message','You need to settle the unpaid commissions first');
                $owner_id = Auth::guard('admin')->user()->owner_id;
                $histories = History::where('owner_id',$owner_id)->get()->toArray();
                return view('owner.dashboard')->with(compact('histories'));
            }
            Session::forget('commission_error_message');
            return view('owner.dashboard')->with(compact('cartypes','cars'));
        }
        $cars = Car::with(['carPhotos','carPrice','carTypes','carChecklist'])->where('owner_id',0)->get()->toArray();
      
        
       
        return view('admin.dashboard')->with(compact('cartypes','cars'));

    }
    public function addCar(Request $request)
    {
             
        // if($request->ajax())
        // {
          
            
            $data = $request->all();
            // return response()->json(['data'=>$data]);
           
            $car = new Car;
            $car->owner_id = Auth::guard('admin')->user()->owner_id;
            $car->admin_id = Auth::guard('admin')->user()->id;
            $car->name = $data['add-admin-car-name'];
            $car->plate_number = $data['add-admin-car-plate-number'];
            $car->type_id = (int)$data['add-admin-set-car-type'];
            $car->fuel_type = $data['add-admin-car-fuel-type'];
            $car->capacity = (int)$data['add-admin-car-capacity'];
            $main_img = $request->file('add-admin-car-main-photo');
            
            if($main_img->isValid())
            {
                $extension = $main_img->getClientOriginalExtension();
                 
               $main =  Image::make($main_img)->resize(800,800,function($constraint)
                {
                    $constraint->aspectRatio();
                });
                $imageData = base64_encode($main->encode($extension));
               
                 $car->main_photo = $imageData;
                
              
            }
           
              
            if(Auth::guard('admin')->user()->type === 'owner')
            {
                $car->terms = $data['add-admin-terms'];
                $registration_img = $request->file('add-admin-car-registration');
               
                if($registration_img->isValid())
                {
                    $extension1 = $registration_img->getClientOriginalExtension();
                    $registrationImage = Image::make($registration_img)->resize(800, 800, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    // --- Get the binary data of the modified image --- //
                    $registrationData = base64_encode($registrationImage->encode($extension1));
            
                    $car->registration = $registrationData;
                    
                }
               
            }
          
            $car->description = $data['add-admin-car-description'];
            $car->pickup_location = $data['add-admin-car-pickup-location'];
            $car->driver = $data['add-admin-car-driver'];
            $car->drivers_fee = $data['add-admin-car-drivers-fee'];
            if(Auth::guard('admin')->user()->type !== 'owner')
            {
                $car->terms = 'agree';
                $car->account = 'verified';
            }
            else
            {
                $car->terms = $data['add-admin-terms'];
            }

           
            
            $car->save();
            
          
            // Assign the new car to $newCar to get its id
            $newCar = $car;
            
            $prices = 
                [
                (int)$data['add-admin-car-price-ilocos-region'],
                (int)$data['add-admin-car-price-cagayan-valley'],
                (int)$data['add-admin-car-price-central-luzon'],
                (int)$data['add-admin-car-price-calabarzon'],
                (int)$data['add-admin-car-price-mimaropa'],
                (int)$data['add-admin-car-price-bicol-region'],
                (int)$data['add-admin-car-price-ncr'],
                (int)$data['add-admin-car-price-car'],
                ];
            $reg_id = [1,2,3,4,5,6,14,15];

            for($i=0; $i<8; $i++)
            {
                $carPrice = new CarPrice;
                $carPrice->car_id = $newCar->id;
                $carPrice->price = $prices[$i];
                $carPrice->reg_id = $reg_id[$i];
                $carPrice->save();
            }
           
          
            foreach($request->file('add-admin-car-photos') as $photo)
            {
                $img_tmp = $photo;
                if($img_tmp->isValid())
                {
                    $extension2 = $img_tmp->getClientOriginalExtension();
                   
                    // --- Upload the image --- //
                    $carPhotos = Image::make($img_tmp)->resize(800, 800, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    // --- Get the binary data of the modified image --- //
                    $carPhotosData = base64_encode($carPhotos->encode($extension2));
                    
                    $carPhoto = new CarPhoto;
                    $carPhoto->car_id = $newCar->id;
                    $carPhoto->photos = $carPhotosData;
                    $carPhoto->save();
                }
            }
            
            // return response()->json(['data'=>'success']);

            
                    
        // }
    }
    public function editCar(Request $request)
    {
     
       
        if($request->ajax())
        {
            $data = $request->all();
            
            $car = Car::where('id',$data['edit-admin-car-id'])->get()->first();

            if($car->name  !== $data['edit-admin-car-name'])
                $car->name = $data['edit-admin-car-name'];
            if($car->plate_number  !== $data['edit-admin-car-plate-number'])
                $car->plate_number = $data['edit-admin-car-plate-number'];
            if($car->type_id  !== (int)$data['edit-admin-set-car-type'])
                $car->type_id = (int)$data['edit-admin-set-car-type'];
            if($car->fuel_type  !== $data['edit-admin-car-fuel-type'])
                $car->fuel_type = $data['edit-admin-car-fuel-type'];
            if($car->capacity  !== (int)$data['edit-admin-car-capacity'])
                $car->capacity = (int)$data['edit-admin-car-capacity'];
            if($car->description  !== $data['edit-admin-car-description'])
                $car->description = $data['edit-admin-car-description'];
            if($car->pickup_location  !== $data['edit-admin-car-pickup-location'])
                $car->pickup_location = $data['edit-admin-car-pickup-location'];
            if($car->driver_fee  !== $data['edit-admin-car-drivers-fee'])
            {
                $car->driver = $data['edit-admin-car-driver'];
                $car->drivers_fee = $data['edit-admin-car-drivers-fee'];
            }
            // return response()->json(['data'=>$data]);
            if($request->hasFile('edit-admin-car-main-photo'))
            {
               

                $main_img = $data['edit-admin-car-main-photo'];
                if($main_img->isValid())
                {
                      $extension = $main_img->getClientOriginalExtension();
                 
               $main =  Image::make($main_img)->resize(800,800,function($constraint)
                {
                    $constraint->aspectRatio();
                });
                $imageData = base64_encode($main->encode($extension));
               
                 $car->main_photo = $imageData;
                }
            }
            $car->save();
        
            // Assign the new car to $newCar to get its id
            
            if($request->hasFile('edit-admin-car-photos'))
            {
               
                CarPhoto::where('car_id',$data['edit-admin-car-id'])->delete();
                foreach($data['edit-admin-car-photos'] as $photo)
                {
                    $img_tmp = $photo;
                    if($img_tmp->isValid())
                    {
                        $extension2 = $img_tmp->getClientOriginalExtension();
                   
                        // --- Upload the image --- //
                        $carPhotos = Image::make($img_tmp)->resize(800, 800, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                        // --- Get the binary data of the modified image --- //
                        $carPhotosData = base64_encode($carPhotos->encode($extension2));
                        
                        $carPhoto = new CarPhoto;
                        $carPhoto->car_id = $car->id;
                        $carPhoto->photos = $carPhotosData;
                        $carPhoto->save();
                    }
                }
            }
          
            $carPrices = CarPrice::where('car_id',$data['edit-admin-car-id'])->get()->toArray();
            
            if($carPrices[0]['price']  !== (int)$data['edit-admin-car-price-ilocos-region'])
                CarPrice::where(['car_id' => (int)$data['edit-admin-car-id'],'reg_id' => 1])->update(['price' => (int)$data['edit-admin-car-price-ilocos-region']]);
            if($carPrices[1]['price']  !== (int)$data['edit-admin-car-price-cagayan-valley'])
                CarPrice::where(['car_id' => (int)$data['edit-admin-car-id'],'reg_id' => 2])->update(['price' => (int)$data['edit-admin-car-price-cagayan-valley']]);
            if($carPrices[2]['price']  !== (int)$data['edit-admin-car-price-central-luzon'])
                CarPrice::where(['car_id' => (int)$data['edit-admin-car-id'],'reg_id' => 3])->update(['price' => (int)$data['edit-admin-car-price-central-luzon']]);
            if($carPrices[3]['price']  !== (int)$data['edit-admin-car-price-calabarzon'])
                CarPrice::where(['car_id' => (int)$data['edit-admin-car-id'],'reg_id' => 4])->update(['price' => (int)$data['edit-admin-car-price-calabarzon']]);
            if($carPrices[4]['price']  !== (int)$data['edit-admin-car-price-mimaropa'])
                CarPrice::where(['car_id' => (int)$data['edit-admin-car-id'],'reg_id' => 5])->update(['price' => (int)$data['edit-admin-car-price-mimaropa']]);
            if($carPrices[5]['price']  !== (int)$data['edit-admin-car-price-bicol-region'])
                CarPrice::where(['car_id' => (int)$data['edit-admin-car-id'],'reg_id' => 6])->update(['price' => (int)$data['edit-admin-car-price-bicol-region']]);
            if($carPrices[6]['price']  !== (int)$data['edit-admin-car-price-ncr'])
                CarPrice::where(['car_id' => (int)$data['edit-admin-car-id'],'reg_id' => 14])->update(['price' => (int)$data['edit-admin-car-price-ncr']]);
            if($carPrices[7]['price']  !== (int)$data['edit-admin-car-price-car'])
                CarPrice::where(['car_id' => (int)$data['edit-admin-car-id'],'reg_id' => 15])->update(['price' => (int)$data['edit-admin-car-price-car']]);
  
            return response()->json(['data'=>'success']);
        }
            
 
    }
    public function updateCarStatus(Request $request)
    {      
        if($request->ajax()){
            $data = $request->all();
            // return response()->json(['status'=>$data]);
         
            if($data['status'] === 'Active'){
                $status = 0;
            }else{
                $status = 1;
            }
            Car::where('id',$data['car_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status]);
        }
    }
    public function deleteCar(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            Car::where('id',$data['id'])->delete();
            CarCheckList::where('car_id',$data['id'])->delete(); 
            CarPhoto::where('car_id',$data['id'])->delete();
            CarPrice::where('car_id',$data['id'])->delete();
            return response()->json(['status'=>'deleted']);
        }
    }
    public function ownerCars()
    {
        
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        Session::put('title','Owner Cars');
        Session::put('page','owner-cars');
        $cartypes = CarType::where('status',1)->get()->toArray();
        $cars = Car::with(['carPhotos','carPrice','carTypes','carOwner'])->where([['account','=','verified'],['owner_id','!=',0]])->get()->toArray();
      
            return view('admin.dashboard')->with(compact('cartypes','cars'));
        

    }
    public function carRequest()
    {
       
        Session::put('title','Car Request');
        Session::put('page','car-request');
       
      
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $cartypes = CarType::where('status',1)->get()->toArray();
            $cars = Car::with(['carPhotos','carPrice','carTypes','carOwner'])->where([['account','=','unverified'],['owner_id','=',Auth::guard('admin')->user()->owner_id]])->get()->toArray();
            $unpaidCount = History::where('owner_id',Auth::guard('admin')->user()->owner_id)->where('commission','unpaid')->count();

            if($unpaidCount > 3)
            {
                Session::put('title','Booking History');
                Session::put('page','booking-history');
                Session::put('commission_error_message','You need to settle the unpaid commissions first');
                $owner_id = Auth::guard('admin')->user()->owner_id;
                $histories = History::where('owner_id',$owner_id)->get()->toArray();
                return view('owner.dashboard')->with(compact('histories'));
            }
            Session::forget('commission_error_message');
            return view('owner.dashboard')->with(compact('cartypes','cars'));
        }
        $cartypes = CarType::where('status',1)->get()->toArray();
        $cars = Car::with(['carPhotos','carPrice','carTypes','carOwner'])->where([['account','=','unverified'],['owner_id','!=',0]])->get()->toArray();
      
            return view('admin.dashboard')->with(compact('cartypes','cars'));

    }
    public function updateCarAccount(Request $request)
    { 
        if($request->ajax()){
            $data = $request->all();
            
            
            $car = Car::find($data['car_id']);
           
             // Send confirmation email to owner email
             $email = $data['email'];
             $name = $data['name']; 
             
             $messageData = [
                 'email' => $email,
                 'name' => $name,
             ];
            
             
            // echo '<pre>'; print_r($data);die;
            try {
            
                if($data['account'] === 'verified'){
                    $car->account = $data['account'] ;
                    $car->save();
                    
                    
                    Mail::send('emails.owner.owner-car-account-accepted',$messageData, function($message)use($email){
                        $message->to($email)->subject('New Registered Car Status');
                    });
                    
                    
                }
                else if ($data['account'] === 'declined')
                {
                    $car->account = $data['account'] ;
                    $car->save();
                    
                    Mail::send('emails.owner.owner-car-account-declined',$messageData, function($message)use($email){
                        $message->to($email)->subject('New Registered Car Status');
                    });
                } 

                return response()->json(['data'=>$data['account']]);
           
            } catch (\Throwable $th) {
                return response()->json(['data'=>$data['account']]);
               
            }
        }
    }
    public function carDeclined()
    {
        Session::put('title','Declined Car');
        Session::put('page','car-declined');
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $unpaidCount = History::where('owner_id',Auth::guard('admin')->user()->owner_id)->where('commission','unpaid')->count();

            if($unpaidCount > 3)
            {
                Session::put('title','Booking History');
                Session::put('page','booking-history');
                Session::put('commission_error_message','You need to settle the unpaid commissions first');
                $owner_id = Auth::guard('admin')->user()->owner_id;
                $histories = History::where('owner_id',$owner_id)->get()->toArray();
                return view('owner.dashboard')->with(compact('histories'));
            }
            Session::forget('commission_error_message');
            $cartypes = CarType::where('status',1)->get()->toArray();
            $cars = Car::with(['carPhotos','carPrice','carTypes','carOwner'])->where([['account','=','declined'],['owner_id','=',Auth::guard('admin')->user()->owner_id]])->get()->toArray();
            
            return view('owner.dashboard')->with(compact('cartypes','cars'));
        }
        $cartypes = CarType::where('status',1)->get()->toArray();
        $cars = Car::with(['carPhotos','carPrice','carTypes','carOwner'])->where([['account','=','declined'],['owner_id','!=',0]])->get()->toArray();
        return view('admin.dashboard')->with(compact('cartypes','cars'));

    }


    //     Admin Modules
    public function allAdmins()
    {
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        if(Auth::guard('admin')->user()->type === 'staff')
        {
            return redirect()->back();
        }
        Session::put('title','All Admins');
        Session::put('page','all-admins');
        $admins = Admin::where([['type','!=','systemadmin'],['account','verified']])->with('admins')->get()->toArray();
        // echo '<pre>'; print_r($admins); die;
        return view('admin.dashboard')->with(compact('admins'));

    }
    public function addAdmin(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            // return response()->json(['status'=>$data]);
            $adminEmail = Admin::where('email',$data['add-admin-email'])->exists();
            if($adminEmail)
            {
                return response()->json(['status'=>'error']);
            }
            $admin = new Admin;
            $admin->type = $data['add-admin-type'];
            $admin->first_name = $data['add-admin-first-name'];
            $admin->last_name = $data['add-admin-last-name'];
            $admin->email = $data['add-admin-email'];
            $admin->password = bcrypt($data['add-admin-password']);
            $admin->status = 1;
            $admin->account = 'verified';
            $admin->email_verified_at = now();
            $admin->owner_id = 0;
            $admin->save();
            return response()->json(['status'=>'success']);

        }
        return response()->json(['status'=>'error']);
    }
    public function editAdmin(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            // return response()->json(['data'=>$data]);
            
            $admin = Admin::find($data['id']);
            if($admin->type !== $data['edit-admin-type'])
            {
                $admin->type = $data['edit-admin-type'];
            }
            if($admin->first_name !== $data['edit-admin-first-name'])
            {
                $admin->first_name = $data['edit-admin-first-name'];
            }
            if($admin->last_name !== $data['edit-admin-last-name'])
            {
                $admin->last_name = $data['edit-admin-last-name'];
            }
            if($admin->email !== $data['edit-admin-email'])
            {
                $adminEmail = Admin::where('email',$data['edit-admin-email'])->exists();
                if($adminEmail)
                {
                    return response()->json(['status'=>'error']);
                }
                else
                {
                    $admin->email = $data['edit-admin-email'];
                }
            }
           
            $admin->save();
            return response()->json(['status'=>'success']);

        }
        return response()->json(['status'=>'error']);
    }
    public function admins()
    {
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        if(Auth::guard('admin')->user()->type === 'staff')
        {
            return redirect()->back();
        }
        Session::put('title','Admins');
        Session::put('page','admins');
        $admins = Admin::where([['type','admin'],['account','verified']])->get()->toArray();
   
        return view('admin.dashboard')->with(compact('admins'));

    }
    public function staff()
    {
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        if(Auth::guard('admin')->user()->type === 'staff')
        {
            return redirect()->back();
        }
        Session::put('title','Staff');
        Session::put('page','staff');
        $admins = Admin::where([['type','staff'],['account','verified']])->get()->toArray();
        return view('admin.dashboard')->with(compact('admins'));

    }
    public function owners()
    {
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        Session::put('title','Owners');
        Session::put('page','owner');
        $admins = Admin::where([['type','owner'],['account','verified']])->with('admins')->get()->toArray();
       
        return view('admin.dashboard')->with(compact('admins'));

    }
    public function newOwners()
    {
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        Session::put('title','New Owners');
        Session::put('page','new-owners');
        $admins = Admin::where([['type','owner'],['status',1],['account','unverified']])->with('admins')->get()->toArray();
       
        return view('admin.dashboard')->with(compact('admins'));

    }
    public function declinedOwners()
    {
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        Session::put('title','Declined Owners');
        Session::put('page','declined-owners');
        $admins = Admin::where([['type','owner'],['account','declined']])->with('admins')->get()->toArray();
       
        return view('admin.dashboard')->with(compact('admins'));

    }
    public function updateAdminStatus(Request $request)
    {      
        if($request->ajax()){
            $data = $request->all();
            // return response()->json(['status'=>$data]);
         
            if($data['status'] === 'Active'){
                $status = 0;
            }else{
                $status = 1;
            }
            Admin::where('id',$data['admin_id'])->update(['status'=>$status]);
            // $ownerID = Car::select('owner_id')->where('admin_id',$data['admin_id'])->first();
            // if($ownerID['owner_id'] !== 0){
            //     Car::where('admin_id',$data['admin_id'])->update(['status'=>$status]);
            // }
            return response()->json(['status'=>$status]);
        }
    }
    public function updateUserStatus(Request $request)
    {      
        if($request->ajax()){
            $data = $request->all();
            // return response()->json(['status'=>$data]);
         
            if($data['status'] === 'Active'){
                $status = 0;
            }else{
                $status = 1;
            }
            User::where('id',$data['user_id'])->update(['status'=>$status]);
         
            return response()->json(['status'=>$status]);
        }
    }
    public function updateAdminAccount(Request $request)
    { 
        if($request->ajax()){
            $data = $request->all();
            $owner = Admin::find($data['admin_id']);
            
             // Send confirmation email to owner email
             $email = $owner->email;
             $name = $owner->first_name. ' ' .$owner->last_name; 
             
             $messageData = [
                 'email' => $email,
                 'name' => $name,
             ];

            // echo '<pre>'; print_r($data);die;
            if($data['account'] === 'verified'){
                $account = $data['account'] ;
                Admin::where('id',$data['admin_id'])->update(['account'=>$account]);
                Mail::send('emails.owner.owner-car-accepted',$messageData, function($message)use($email){
                    $message->to($email)->subject('Owner Account Status');
                });
                return response()->json(['data'=>'verified']);
            }
            else if ($data['account'] === 'declined')
            {
                $account = $data['account'];
                Admin::where('id',$data['admin_id'])->update(['account'=>$account]);
                Mail::send('emails.owner.owner-car-declined',$messageData, function($message)use($email){
                    $message->to($email)->subject('Owner Account Status');
                });
                return response()->json(['data'=>'declined']);
            } 

            
        }
    }
    public function deleteUserAccount(Request $request)
    {
       if($request->ajax())
       {
            $data = $request->all();
           User::where('id',$data['admin_id'])->delete();  
           return response()->json(['status'=>'deleted']);
       }
    }
    public function deleteAdminAccount(Request $request)
    {
       if($request->ajax())
       {
            $data = $request->all();
            $admin = Admin::find($data['admin_id']);
            if($admin->type === 'owner')
            {
                OwnerDetail::where('id',$admin->owner_id)->delete();  
            }
           Admin::where('id',$data['admin_id'])->delete();  
           return response()->json(['status'=>'deleted']);
       }
    }

    //     User Modules
    public function users()
    {
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        Session::put('title','Users');
        Session::put('page','users');
        $users = User::where('email_verified_at','!=',null)->get()->toArray();
       
        return view('admin.dashboard')->with(compact('users'));
   
    }
    public function unverifiedUsers()
    {
        if(Auth::guard('admin')->user()->type === 'owner')
        {
            return view('owner.dashboard');
        }
        Session::put('title','Inactive Users');
        Session::put('page','unverified-users');
        $users = User::where('email_verified_at',null)->get()->toArray();
       
        return view('admin.dashboard')->with(compact('users'));
   

    }

    //     Profile Modules
    public function profile()
    {
        Session::put('page','profile');
        Session::put('title','Profile');

        if(Auth::guard('admin')->user()->type === 'owner')
        {
            $owner = OwnerDetail::where('id',Auth::guard('admin')->user()->owner_id)->get()->toArray();
            // dd($owner);
            return view('owner.dashboard')->with(compact('owner'));
        }
       return view('admin.dashboard');
    }
    public function updateProfile(Request $request)
    {
        if($request->ajax())
        {
            if(Auth::guard('admin')->user()->type === 'owner')
            {
                $data = $request->all();

                $admin = Admin::find(Auth::guard('admin')->user()->id);
                if($admin->first_name !== $data['edit-first-name'])
                {
                    $admin->first_name = $data['edit-first-name'];
                }
                if($admin->last_name !== $data['edit-last-name'])
                {
                    $admin->last_name = $data['edit-last-name'];
                }
                $admin->save();
                
                $owner = OwnerDetail::find(Auth::guard('admin')->user()->owner_id);
                // convert birthdate input from dd/mm/yyyy to yyyy-mm-dd
                $inputDate = explode('/', $data['edit-birthdate'] ); 
                $birthdate = $inputDate[2].'-'.$inputDate[1].'-'.$inputDate[0];
                if($owner->birthdate !== $birthdate)
                {
                    $owner->birthdate = $birthdate;
                }
                if($owner->contact !== $data['edit-contact'])
                {
                    $owner->contact = $data['edit-contact'];
                }
                if($owner->address !== $data['edit-address'])
                {
                    $owner->address = $data['edit-address'];
                }
                if($owner->valid_id !== $data['edit-valid-id'])
                {
                    $owner->valid_id = $data['edit-valid-id'];
                }
                
                if($request->hasFile('edit-id-file'))
                { 
                    $img_tmp2 = $request->file('edit-id-file');
                    if($img_tmp2->isValid())
                    {
                        // Get image extension 
                        $extension2 = $img_tmp2->getClientOriginalExtension(); 

                        // Generate new image name 
                        $imgName2 = rand(111,99999).'.'.$extension2;
                        $imgPath2 ='owner/images/id/'.$imgName2;
                    
                        // Upload and resize the image
                        Image::make($img_tmp2)->resize(1000,1000,function($constraint){
                                $constraint->aspectRatio();
                            })->save($imgPath2);
                        if($data['current-id-file'] !== null)
                        {
                            $currentIDFile = public_path('owner/images/id/'.$data['current-id-file']);
                                File::delete($currentIDFile);
                        }
                    }
                    $owner->valid_id_file = $imgName2;
                }
                $owner->save();
             
                return response()->json(['data'=>'success']);
            
            }
            else
            {
                $data = $request->all();
                $admin = Admin::find(Auth::guard('admin')->user()->id);
                if($admin->first_name !== $data['edit-first-name'])
                {
                    $admin->first_name = $data['edit-first-name'];
                }
                if($admin->last_name !== $data['edit-last-name'])
                {
                    $admin->last_name = $data['edit-last-name'];
                }
                $admin->save();
                // Admin::where('id', Auth::guard('admin')->user()->id)->update([
                //     'first_name' => $data['edit-first-name'],
                //     'last_name' => $data['edit-last-name']
                // ]);
                return response()->json(['data'=>'success']);

            }
           
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
    public function forgotPassword(Request $request)
    {
        
        if($request->ajax())
        {

            $data = $request->all();
           $userEmail = Admin::where('email',$data['email'])->exists();
            if($userEmail)
            {
                $email = $data['email'];
                $tempPassword =  Str::random(15);
                
                $messageData = [
                    'email' => $email,
                    'code' =>  $tempPassword,
                ];

                Admin::where('email',$email)->update(['password'=>bcrypt($tempPassword)]);

                try {
                    Mail::send('emails.user.forgot_password',$messageData, function($message)use($email){
                        $message->to($email)->subject('Temporary password reset');
                    });
                    
                    return response()->json(['status'=>'found']);
                } catch (\Throwable $th) {
                    return response()->json(['status'=>'found']);
                    
                }
                 
            }
          
            return response()->json(['status'=>'notfound']);
            
        }
        Session::put('page','forgot-password');
        Session::put('title','Forgot Password');
        return view('owner.forgot-password');
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
                
                if($request->hasFile('owner-signup-license') && $request->hasFile('owner-signup-id-file'))
                {
                    $img_tmp1 = $request->file('owner-signup-license'); 
                    $img_tmp2 = $request->file('owner-signup-id-file');
                   
                    if($img_tmp1->isValid() && $img_tmp2->isValid())
                    {
                        // --- Get image extension --- //
                        $extension1 = $img_tmp1->getClientOriginalExtension(); 
                        $extension2 = $img_tmp2->getClientOriginalExtension(); 
                        
                        $license =  Image::make($img_tmp1)->resize(800,800,function($constraint)
                        {
                            $constraint->aspectRatio();
                        });
                        $licenseData = base64_encode($license->encode($extension1));

                        $idFile =  Image::make($img_tmp2)->resize(800,800,function($constraint)
                        {
                            $constraint->aspectRatio();
                        });
                        $idData = base64_encode($idFile->encode($extension2));
                    }
                }

                

                $owner = new OwnerDetail;
                $owner->contact = $data['owner-signup-contact'];
                $owner->address = $data['owner-signup-address'];
                // convert birthdate input from dd/mm/yyyy to yyyy-mm-dd
                $inputDate = explode('/', $data['owner-signup-birthdate'] ); 
                $birthdate = $inputDate[2].'-'.$inputDate[1].'-'.$inputDate[0];
                $owner->birthdate = $birthdate ;
                $owner->license =  $licenseData;
                $owner->valid_id = $data['owner-signup-valid-id'];
                $owner->valid_id_file =  $idData;
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
                Session::put('message', 'Congratulations! Your account has been successfully created. Check your email and verify your account. Wait for the admin to verify your credentials first. Thank you.');
                try {
                    Mail::send('emails.owner.owner_confirmation',$messageData, function($message)use($email){
                        $message->to($email)->subject('Confirm your Owner Account');
                    });
    
                    return response()->json(['status'=>'success']);
                } catch (\Throwable $th) {
                    return response()->json(['status'=>'success']);
                    
                }

                
              
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
                try {
                    Mail::send('emails.owner.owner_confirmed',$messageData, function($message)use($ownerEmail){
               
                        $message->to($ownerEmail)->subject('Confirmed Owner Account!');
                    });
                    return redirect('admin/login')->with('success_message',$message);
                } catch (\Throwable $th) {
                    return redirect('admin/login')->with('success_message',$message);
                }
    
               
            } 

            return redirect('admin/login')->with('success_message',$message);
           
         }
         else
         {
            abort(404);
         }
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
