
<div id="car-calendar-modal" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center p-4 w-full md:inset-0 h-modal md:h-full rounded-lg ">
    <div class="relative w-full max-w-3xl m-auto bg-white rounded-lg h-full">

        
        <div  class="relative bg-white rounded-lg shadow h-full ">
        
            <div class="view-step detail-one pb-6 h-full">
                <div class="flex justify-end px-2 pt-6 pb-4 sm:p-6 rounded-t items-center ">
                    
                    <button data-modal-toggle="car-calendar-modal" type="button" class="cursor-pointer text-gray-400 bg-transparent hover:bg-accent-regular hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                </div>
                <div class="picker p-2 sm:p-6 ">
                    <div class="picker__item">
                        <div id="range-input" class="range-input">
                            <label class="block mb-2 text-sm font-semibold text-gray-900 uppercase text-center">Select Date(s) </label>
                            <input type="text"  name="date" class="date-input block px-2.5 py-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-900">
                            <!-- <button type="button" id="open-datepicker" class="button bg-accent-regular text-white ">Open</button> -->
                        </div>
                    </div>
                </div>    
            </div>
            

        </div>
    </div>
</div>
<script src="{{url('js/fecha.min.js')}}"></script>
<script src="{{url('js/datepicker.js')}}"></script>

<script>
    (function () {
        // ------------------- SHOW DATE ------------------ //

        var today = new Date();
        var tomorrow = new Date();

        tomorrow.setDate(tomorrow.getDate() + 1);
        var input1 = document.querySelector('.range-input input');

        var startDate = fecha.format(today, 'YYYY-MM-DD');
        var endDate = fecha.format(tomorrow, 'YYYY-MM-DD');
        input1.value = startDate + ' - ' + endDate;
        input1.value = '';

        
        
        var data =  [{
            'start' : "01/22/2023",
            'end' : "01/25/2023"
            },
            {
            'start' : "02/04/2023",
            'end' : "02/07/2023"
            },
            {
                'start' : "02/15/2023",
                'end' : "02/20/2023"
            },
            {
                'start' : "02/28/2023",
                'end' : "02/28/2023"
            }];
                
                

        // --------------- STORE DATA FROM DATABASE TO AN ARRAY ------------ //   
        
        // console.log(data);
        var bookdates = [];

        for (let i = 0; i < data.length; i++) {

            var starts = new Date(data[i].start);
            var ends = new Date(data[i].end);
            var set = new Date(data[0].end);
            set.setDate(set.getDate() + 1);
            input1.value = fecha.format(set,'YYYY-MM-DD') + ' - ' + fecha.format(set,'YYYY-MM-DD');
            while (starts <= ends) {
                bookdates.push(fecha.format(new Date(starts), 'YYYY-MM-DD'));
                starts.setDate(starts.getDate() + 1);
            }
        }
    
        // --------------- ADD INPUT DATE AND DISABLE BOOK DATE ------------- //

        var picker = new Datepicker(input1, {
            autoClose: true,
            disabledDates: bookdates

        });

        // ---------------- OPEN CALENDAR --------------- //

        // var open_datepicker_button = document.getElementById('open-datepicker');
        // open_datepicker_button.addEventListener('click', open_datepicker_function);

        // function open_datepicker_function() {
        //     console.log('Open!');
        //     picker.open();
        // }
        

    }())
</script>

