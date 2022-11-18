<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            [    
                'type'=>'admin', 
                'email'=>'admin@gmail.com', 
                'password'=>'$2y$10$MMf8CwqtuYXSQYICUmRou.rzWMpdeTjPI.JNP1u8bZEHoM/VWEa3C',
                'status'=>1,
                'created_at'=>now(),
                'updated_at'=>now()],
            [    
                'type'=>'owner', 
                'email'=>'owner@gmail.com', 
                'password'=>'$2y$10$MMf8CwqtuYXSQYICUmRou.rzWMpdeTjPI.JNP1u8bZEHoM/VWEa3C',
                'status'=>1,
                'created_at'=>now(),
                'updated_at'=>now()],
            ];
            Admin::insert($adminRecords);
    }
}
