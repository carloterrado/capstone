@foreach ($cars as $car)         
    <div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow-md p-5 col-span-6 md:col-span-3 xl:col-span-2 mx-auto">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900 text-center ">{{$car['name']}}</h2>
        <h3 class="mb-2 text-xl tracking-tight text-accent-regular text-center ">
                {{'₱ '.$car['carPrice'][3]['price'].' / Day'}}
        
        </h3>
        <div class="grid grid-cols-6 gap-2 mb-6 text-xs whitespace-nowrap">
            <div class="col-span-2 grid grid-cols-7 items-center">
                <!-- <i class='bx bxs-car font-bold text-base align-bottom col-span-2'></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="col-span-2" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19v1q0 .425-.287.712Q5.425 21 5 21H4q-.425 0-.712-.288Q3 20.425 3 20v-8l2.1-6q.15-.45.538-.725Q6.025 5 6.5 5h11q.475 0 .863.275q.387.275.537.725l2.1 6v8q0 .425-.288.712Q20.425 21 20 21h-1q-.425 0-.712-.288Q18 20.425 18 20v-1Zm-.2-9h12.4l-1.05-3H6.85Zm1.7 6q.625 0 1.062-.438Q9 15.125 9 14.5t-.438-1.062Q8.125 13 7.5 13t-1.062.438Q6 13.875 6 14.5t.438 1.062Q6.875 16 7.5 16Zm9 0q.625 0 1.062-.438Q18 15.125 18 14.5t-.438-1.062Q17.125 13 16.5 13t-1.062.438Q15 13.875 15 14.5t.438 1.062Q15.875 16 16.5 16Z"/></svg>
                <span class="col-span-5">{{$car['carTypes']['name']}}</span> 
            </div>
            <div class="col-span-2 grid grid-cols-7 items-center">
                <!-- <i class='bx bxs-group font-bold text-base align-bottom col-span-2'></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" class="col-span-2" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path fill="currentColor" d="M54.125 30.929c.63-.364.985-1.052.845-1.846l-.387-2.213c-.162-.915-.931-1.693-1.854-1.99l-1.22-13.536c-.199-2.209-1.997-4.017-3.994-4.017h-1.854V5.714C45.661 3.671 44.032 2 42.04 2H22.116c-1.994 0-3.625 1.671-3.625 3.714v1.613h-1.852c-1.998 0-3.796 1.808-3.994 4.017l-1.214 13.492c-.994.255-1.839 1.067-2.011 2.034l-.391 2.213c-.148.857.274 1.596 1 1.93v6.178c-.718 1.121-1.016 2.638-.717 4.306l.427 2.406c.499 2.792 2.511 5.169 4.819 5.952v4.727h-.01c-.939 0-1.87.651-2.164 1.512l-1.309 3.815c-.175.517-.102 1.047.203 1.454c.306.405.8.637 1.358.637h11.472c.561 0 1.055-.233 1.359-.641c.303-.407.376-.938.199-1.455l-1.309-3.813c-.297-.861-1.227-1.511-2.162-1.511h-.01v-4.452h19.782v4.452h-.01c-.934 0-1.863.649-2.163 1.512l-1.308 3.812c-.176.517-.104 1.047.199 1.455c.306.408.802.641 1.363.641h11.47c.56 0 1.055-.233 1.358-.641c.304-.408.377-.938.199-1.455l-1.307-3.813c-.297-.861-1.228-1.511-2.163-1.511h-.011v-4.727c2.307-.783 4.32-3.16 4.818-5.952l.431-2.406c.298-1.668-.001-3.185-.719-4.307v-6.259zm-5.72.278h3.813v4.363a4.142 4.142 0 0 0-1.569-.303h-2.243v-4.06zm-36.468 0h3.813v4.061h-2.245a4.13 4.13 0 0 0-1.569.303v-4.364zm29.884-19.919c-.005.067.002.132-.007.2l-1.698 13.475c-.246 1.95-1.783 3.599-3.355 3.599h-9.366c-1.574 0-3.111-1.648-3.355-3.599l-1.701-13.475c-.008-.068-.001-.133-.007-.2h19.489m-27.276.215c.111-1.24 1.09-2.329 2.094-2.329h2.222a3.69 3.69 0 0 0 1.545 1.652c-.007.291.001.586.039.886l1.701 13.475c.361 2.879 2.715 5.221 5.248 5.221h9.366c2.53 0 4.885-2.342 5.248-5.221l1.698-13.475c.038-.299.046-.594.04-.886a3.693 3.693 0 0 0 1.544-1.652h2.224c1.004 0 1.982 1.089 2.094 2.33l1.193 13.241H48.53c-1.247 0-2.437.957-2.643 2.125l-.392 2.213c-.15.857.273 1.596 1.001 1.931v4.254H17.657v-4.339c.629-.364.985-1.052.846-1.846l-.387-2.213c-.208-1.168-1.396-2.125-2.645-2.125h-2.117l1.191-13.242m5.735 43.078h-3.813v-4.452h3.813v4.452m23.594 0v-4.452h3.814v4.452h-3.814"/></svg>
                <span class="col-span-5">{{$car['capacity'].' Seater'}}</span> 
            </div>
            <div class="col-span-2 grid grid-cols-7 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" class="col-span-2" preserveAspectRatio="xMidYMid meet" viewBox="0 0 2048 1536"><path fill="currentColor" d="M896 1084q0-54-7.5-100.5t-24.5-90t-51-68.5t-81-25q-64 64-156 64t-156-64q-47 0-81 25t-51 68.5t-24.5 90T256 1084q0 55 31.5 93.5T363 1216h426q44 0 75.5-38.5T896 1084zM768 640q0-80-56-136t-136-56t-136 56t-56 136t56 136t136 56t136-56t56-136zm1024 480v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23zm-384-256v-64q0-14-9-23t-23-9h-320q-14 0-23 9t-9 23v64q0 14 9 23t23 9h320q14 0 23-9t9-23zm384 0v-64q0-14-9-23t-23-9h-192q-14 0-23 9t-9 23v64q0 14 9 23t23 9h192q14 0 23-9t9-23zm0-256v-64q0-14-9-23t-23-9h-704q-14 0-23 9t-9 23v64q0 14 9 23t23 9h704q14 0 23-9t9-23zM128 256h1792v-96q0-14-9-23t-23-9H160q-14 0-23 9t-9 23v96zm1920-96v1216q0 66-47 113t-113 47H160q-66 0-113-47T0 1376V160Q0 94 47 47T160 0h1728q66 0 113 47t47 113z"/></svg>
                <span class="col-span-5">
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
        <button  type="button"  data-modal-toggle="{{'view-car'.$car['id']}}"  class="car-detail btn-1 bg-accent-regular uppercase  w-full mt-6  text-white whitespace-nowrap">Reserve now</button>
    </div>
    @include('front.cars.front-view-car-details')
    
@endforeach

@if ($cars->count() === 0)
<div class="h-full grid place-items-center col-span-6 absolute inset-0">
    <p class=" text-accent-regular text-xl font-semibold"> 
        Cars not found
    </p>
</div>

    
@endif


@if (isset($_GET['type']))

    <div class="col-span-6 px-2">
        {{$cars->appends(['type'=>$_GET['type'],'capacity'=>$_GET['capacity'],'driver'=>$_GET['driver'],'from'=>$_GET['from'],'to'=>$_GET['to']])->links()}}
    </div>  
    
@elseif (isset($_POST['type']))

    <div class="col-span-6 px-2">
        {{$cars->appends(['type'=>$_POST['type'],'capacity'=>$_POST['capacity'],'driver'=>$_POST['driver'],'from'=>$_POST['from'],'to'=>$_POST['to']])->links()}}
    </div> 

@else
    @if ($cars->count() === 0)
        
    @else
    <div class="col-span-6 px-1 sm:px-2">{{$cars->links()}}</div>  
    @endif
@endif




