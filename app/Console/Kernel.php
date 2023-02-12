<?php

namespace App\Console;

use App\Models\Booking;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Carbon\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            // Your table update code here
            $records = Booking::where('status', 'approved')->get();
    
            foreach ($records as $record) {
                // Update the values in the record as needed
                
                    $dateStart = $record->start_date. ' '.$record->time;
                    $start_date = Carbon::createFromFormat('Y-m-d H:i A', $dateStart);
                    if(Carbon::now() >= $start_date)
                    {
                        $record->status = 'ongoing';
                        $record->save();
                    }
                // else
                // {
                //     $dateEnd = $record->end_date. ' '.$record->time;
                //     $end_date = Carbon::createFromFormat('Y-m-d H:i A', $dateEnd);
                //     if(Carbon::now() > $end_date)
                //     {
                //         $record->status = 'return';
                //         $record->save();
                //     }
                // }
                
            }
        })->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
