<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = [

            [
            'id'=>'1',  
            'name' => '',
            'email' => 'hod.it@mamcet.com',
            'password' => bcrypt(''),
            'dept' =>'IT',
            'designation' => 'Professor/Head',
            'type'=>'Teaching',
            'sub1'=>'DESIGN AND ANALYSIS OF ALGORITHM',
            'sub2'=>'',
            'sub3'=>''
            //'sub1'=>'',
            //'sub2'=>'',
            //'sub3'=>''
        ],
        ];
        //Staff::create($staff);
       DB::table('staff')->insert($staff);
    }
}
