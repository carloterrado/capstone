<?php use Carbon\Carbon; ?>
<main id="cars" class="min-h-[calc(100vh-5rem)] md:min-h-[calc(100vh-5.5rem)]  p-2 pb-12 pt-6  sm:p-14 sm:pt-4">
    <div class="relative md:w-1/2 mx-auto">
        @include('message.ajax-success')
        @include('message.ajax-error')
    </div>

    <!-- Tab link -->
    <div class="mb-6 md:flex justify-between">
        <h2
            class="inline-block p-4 border-b-2 border-accent-regular text-accent-regular rounded-t-lg sm:text-lg lg:text-2xl font-bold">
            Commission</h2>
        <div class="flex gap-4">
            <form method="Post"  action="{{route('commission.report')}}">
                @csrf
                <input type="hidden" name="commission" value="{{json_encode($histories)}}">
                <button type="submit" before="Download Commission Report" 
                class="py-1 px-4 border-2 border-accent-regular rounded cursor-pointer text-accent-regular  mb-4 sm:mb-6 text-sm lg:mb-7 font-semibold before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[106%] before:-translate-x-1/2  before:left-1/2 before:rounded-md before:px-2 before:py-1.5 before:text-white relative"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path fill="#e84949" d="M6 20q-.825 0-1.413-.588T4 18v-3h2v3h12v-3h2v3q0 .825-.588 1.413T18 20H6Zm6-4l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11l-5 5Z"/></svg></button>
            </form>
            <a href="{{route('commission.history')}}">
                <button type="button" before="Reset Filter" 
                class="py-1 px-4 border-2 border-accent-regular rounded cursor-pointer text-accent-regular  mb-4 sm:mb-6 text-sm lg:mb-7 font-semibold before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[106%] before:-translate-x-1/2  before:left-1/2 before:rounded-md before:px-2 before:py-1.5 before:text-white relative">
                
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 32 32"><path fill="#e84949" d="M22.5 9a7.452 7.452 0 0 0-6.5 3.792V8h-2v8h8v-2h-4.383a5.494 5.494 0 1 1 4.883 8H22v2h.5a7.5 7.5 0 0 0 0-15Z"/><path fill="#e84949" d="M26 6H4v3.171l7.414 7.414l.586.586V26h4v-2h2v2a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-8l-7.414-7.415A2 2 0 0 1 2 9.171V6a2 2 0 0 1 2-2h22Z"/></svg></button>
            </a>
            <button type="button" before="More Filter" data-modal-toggle="commissions"
                class="py-1 px-4 border-2 border-accent-regular rounded cursor-pointer text-accent-regular  mb-4 sm:mb-6 text-sm lg:mb-7 font-semibold before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[106%] before:-translate-x-1/2  before:left-1/2 before:rounded-md before:px-2 before:py-1.5 before:text-white relative"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path fill="#e84949" d="M12 18.88a1 1 0 0 1-.29.83a1 1 0 0 1-1.41 0l-4-4a1 1 0 0 1-.3-.84V9.75L1.21 3.62a1 1 0 0 1 .17-1.4A1 1 0 0 1 2 2h14a1 1 0 0 1 .62.22a1 1 0 0 1 .17 1.4L12 9.75v9.13M4 4l4 5.06v5.52l2 2V9.05L14 4m-1 12l5 5l5-5Z"/></svg></button>
                @include('admin.booking.admin-commission-filter')
            <button type="button" before="Commission Fee" data-modal-toggle="view-commission"
                class="py-1 px-4 border-2 border-accent-regular rounded cursor-pointer text-accent-regular  mb-4 sm:mb-6 text-sm lg:mb-7 font-semibold before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:whitespace-nowrap  before:bg-accent-regular/80 before:bottom-[106%] before:-translate-x-1/2  before:left-1/2 before:rounded-md before:px-2 before:py-1.5 before:text-white relative"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26"><g fill="#e84949" fill-rule="evenodd" clip-rule="evenodd"><path d="M14 6.5H9v-2h5a5 5 0 0 1 5 5v1a5 5 0 0 1-5 5H9v-2h5a3 3 0 0 0 3-3v-1a3 3 0 0 0-3-3Z"/><path d="M9 4.5a1 1 0 0 1 1 1V21a1 1 0 1 1-2 0V5.5a1 1 0 0 1 1-1Z"/><path d="M5 8.436a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Z"/><path d="M13 24c6.075 0 11-4.925 11-11S19.075 2 13 2S2 6.925 2 13s4.925 11 11 11Zm0 2c7.18 0 13-5.82 13-13S20.18 0 13 0S0 5.82 0 13s5.82 13 13 13Z"/></g></svg></button>
            @include('admin.booking.admin-commission-fee')
        </div>
    </div>

    <!-- Tab content -->
    <div id="transaction">

        <div class=" p-4" id="approved-booking" role="tabpanel" aria-labelledby="history">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg pt-4 border">
                <table id="ongoing-transaction-table"
                    class="cell-border hover w-full text-sm text-left  text-gray-500 mt-8">

                    <thead class=" text-gray-700 uppercase ">
                        <tr class="border-y">
                            <th scope="col" class="py-3 px-6 ">
                                Reference No.
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

                            <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Action</span>
                            </th>
                            {{-- <th scope="col" class="py-3 px-6">
                                <span class="block text-center">Action</span>  
                            </th> --}}


                        </tr>
                    </thead>
                    <tbody>
                        @include('message.loading')

                        @foreach ($histories as $history)
                            <tr class="bg-white border-b  hover:bg-gray-50  ">
                                <td class="py-4 px-6 font-semibold text-gray-900 ">
                                    {{ '#' . $history['booking_id'] }}
                                </td>

                                <td class="py-4 px-6">
                                    <div class="flex justify-center">
                                        <button type="button" data-modal-toggle="{{ 'view-history' . $history['id'] }}"
                                            class="details btn-1 bg-accent-regular  w-[fit-content]   text-white whitespace-nowrap">View
                                            Details</button>
                                    </div>
                                    @include('admin.booking.admin-view-booking-details-commissions')
                                </td>
                                <td class="py-4 px-6 font-semibold text-gray-900 ">
                                    <span class="block text-center">{{ $history['start_date'] }}</span>
                                </td>
                                <td class="py-4 px-6 font-semibold text-gray-900 ">
                                    <span class="block text-center">{{ $history['end_date'] }}</span>
                                </td>

                                <td class="py-4 px-6 font-semibold text-gray-900 capitalize ">
                                    @if ($history['commission'] === 'paid')
                                        <span
                                            class="block text-center bg-accent-green btn-1 pointer-events-none text-white">{{ $history['commission'] }}</span>
                                    @else
                                        <span
                                            class="block text-center bg-[#F28123] btn-1 pointer-events-none text-white">{{ $history['commission'] }}</span>
                                    @endif
                                </td>

                                <td class="py-4 px-6 font-semibold text-gray-900 ">
                                    <div class="flex justify-center">
                                        @if ($history['commission'] === 'unpaid')
                                            <button historyid="{{ $history['id'] }}" type="button"
                                                class="confirmCommissionFee btn-1 bg-accent-green   w-[fit-content]   text-white whitespace-nowrap">Confirm</button>
                                        @endif
                                    </div>
                                </td>
                                {{-- <td class="py-4 px-6 font-semibold text-gray-900 ">
                                        <div class="flex justify-center">
                                            <a historyid="{{$history['id']}}" before="Delete" class="confirmDeleteHistory cursor-pointer before:content-[attr(before)] before:w-auto before:absolute before:hidden hover:before:block before:bg-accent-regular/80 before:left-1/2 before:-translate-x-1/2 before:bottom-[105%] before:rounded-md before:px-2 before:py-1.5 before:text-white relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#e84949" d="M7 21q-.825 0-1.412-.587Q5 19.825 5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413Q17.825 21 17 21Zm2-4h2V8H9Zm4 0h2V8h-2Z"/></svg></a>
                                        </div>
                                    </td>  --}}
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</main>
