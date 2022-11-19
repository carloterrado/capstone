<?php

namespace Database\Seeders;

use App\Models\OwnerDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class OwnerDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ownerDetailsRecords = [
            [    
                'address'=>'Blk 10 Lot 69 Brgy. P. Granados G.M.A Cavite', 
                'birthdate'=> Carbon::parse('1995-12-21'),
                'created_at'=>now(),
                'updated_at'=>now()],
           
            ];
            OwnerDetail::insert($ownerDetailsRecords);
    }
}
