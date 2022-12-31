@foreach ($cars as $car)         
    <div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow-md p-5 col-span-6 md:col-span-3 xl:col-span-2 mx-auto">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900 text-center ">{{$car['name']}}</h2>
        <h3 class="mb-2 text-xl tracking-tight text-accent-regular text-center ">
                {{'₱ '.$car['carPrice'][3]['price'].' / Day'}}
        
        </h3>
        <div class="grid grid-cols-6 gap-2 mb-6 text-xs whitespace-nowrap">
            <div class="col-span-2 grid grid-cols-7 items-center">
                <i class='bx bxs-car font-bold text-base align-bottom col-span-2'></i><span class="col-span-5">{{$car['carTypes']['name']}}</span> 
            </div>
            <div class="col-span-2 grid grid-cols-7 items-center">
                <i class='bx bxs-group font-bold text-base align-bottom col-span-2'></i><span class="col-span-5">{{$car['capacity'].' Seater'}}</span> 
            </div>
            <div class="col-span-2 grid grid-cols-7 items-center">
                <i class='bx bx-id-card font-bold text-base align-bottom col-span-2'></i><span class="col-span-5">
                @if ($car['driver'] === '1')
                    With driver
                @else
                    Car only
                @endif
                </span> 
            </div>
            
        </div>
    
        <img class="rounded-lg h-40 w-full object-cover" src="
        @if ($car['owner_id'] === 0)
            
        {{url('admins/images/cars/main/'.$car['main_photo'])}}
        @else
        {{url('owner/images/cars/main/'.$car['main_photo'])}}
            
        @endif
        " alt="" />
        <button type="button" class="details btn-1 bg-accent-regular uppercase  w-full mt-6  text-white whitespace-nowrap">Reserve now</button>
    </div>
@endforeach
@if (isset($_GET['type']) && isset($_GET['capacity']) && isset($_GET['driver']))
    <div class="col-span-6 px-2">{{$cars->appends(['type'=>$_GET['type'],'capacity'=>$_GET['capacity'],'driver'=>$_GET['driver']])->links()}}</div>  
@elseif (isset($_POST['type']) && isset($_POST['capacity']) && isset($_POST['driver']))
    <div class="col-span-6 px-2">{{$cars->appends(['type'=>$_POST['type'],'capacity'=>$_POST['capacity'],'driver'=>$_POST['driver']])->links()}}</div> 
   
@else
    
<div class="col-span-6 px-2">{{$cars->links()}}</div>  
@endif