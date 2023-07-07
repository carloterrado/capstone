<?php

use Carbon\Carbon; ?>
<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]  p-2 pb-12 pt-6  sm:p-14 sm:pt-4">
    <div class="relative md:w-1/2 mx-auto">
        @include('message.ajax-success')
        @include('message.ajax-error')
        @include('message.commission-error')
    </div>

    <!-- Tab link -->
    <div class="mb-6 ">
        <h2 class="inline-block p-4 border-b-2 border-accent-regular text-accent-regular rounded-t-lg sm:text-lg lg:text-2xl font-bold">Booking History</h2>
    </div>

    <!-- Tab content -->
    <div id="transaction">

        <div class=" p-4" id="approved-booking" role="tabpanel" aria-labelledby="history">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
                <table id="ongoing-transaction-table" class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">

                    <thead class=" text-gray-700 uppercase ">
                        <tr class="border-y">
                            <th scope="col" class="py-3 px-6 ">
                                Reference No.
                            </th>
                            <th scope="col" class="py-3 px-6 whitespace-nowrap">
                                Renter Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Details</span>
                            </th>
                            <th scope="col" class="py-3 px-6 ">
                                <span class="block text-center">Start date</span>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">End date</span>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Commission</span>
                            </th>


                        </tr>
                    </thead>
                    <tbody>
                        @include('message.loading')

                        @foreach($histories as $history)

                        <tr class="bg-white border-b  hover:bg-gray-50  ">
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                {{'#'.$history['booking_id']}}
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                {{$history['name']}}
                            </td>

                            <td class="py-4 px-6">
                                <div class="flex justify-center">
                                    <button type="button" data-modal-toggle="{{'view-history'.$history['id']}}" class="details btn-1 bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">View details</button>
                                </div>
                                @include('owner.booking.owner-view-booking-history-details')
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <span class="block text-center">{{$history['start_date']}}</span>
                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <span class="block text-center">{{$history['end_date']}}</span>

                            </td>
                            <td class="py-4 px-6 font-semibold text-gray-900 ">
                                <div class="flex justify-center">
                                    @if ($history['commission'] === 'unpaid')
                                    <button class=" btn-1 pointer-events-none bg-accent-regular uppercase  w-[fit-content]   text-white whitespace-nowrap">{{$history['commission']}}</button>
                                    @else
                                    <button class=" btn-1 pointer-events-none bg-accent-green uppercase  w-[fit-content]   text-white whitespace-nowrap">{{$history['commission']}}</button>
                                    @endif

                                </div>
                            </td>


                        </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</main>