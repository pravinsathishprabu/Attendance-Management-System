<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class busseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $Bus=[
            [
              'id'=>'1',
              'Bus_No'=>'B15',
              'Pickup_point'=>'Musiri',
              'student_count'=>'70',
              'bus_coordinate'=>'Vignesh-IT',
              'time'=>'7.30 AM'
            ],
            [
              'id'=>'2',
              'Bus_No'=>'B16',
              'Pickup_point'=>'Kulithalai',
              'student_count'=>'65',
              'bus_coordinate'=>'Mukesh-EEE',
              'time'=>'8.10 AM'
            ],
            [
              'id'=>'3',
              'Bus_No'=>'B17',
              'Pickup_point'=>'Perambalur',
              'student_count'=>'50',
              'bus_coordinate'=>'Rama-Civil',
              'time'=>'8.00 AM'
            ],
            [
              'id'=>'4',
              'Bus_No'=>'B18',
              'Pickup_point'=>'Chathiram',
              'student_count'=>'45',
              'bus_coordinate'=>'Praveen-Mech',
              'time'=>'8.00 AM'
            ],
            [
              'id'=>'5',
              'Bus_No'=>'B19',
              'Pickup_point'=>'Central',
              'student_count'=>'57',
              'bus_coordinate'=>'Jayavel-CSE',
              'time'=>'8.20 AM'
            ],
            [
              'id'=>'6',
              'Bus_No'=>'B20',
              'Pickup_point'=>'TVS Tolgate',
              'student_count'=>'63',
              'bus_coordinate'=>'Ram-ECE',
              'time'=>'8.00 AM'
            ],
            [
              'id'=>'7',
              'Bus_No'=>'B21',
              'Pickup_point'=>'Samayaburam',
              'student_count'=>'72',
              'bus_coordinate'=>'Rashad-IT',
              'time'=>'7.50 AM'
            ],
            [
              'id'=>'8',
              'Bus_No'=>'B22',
              'Pickup_point'=>'Siruganur',
              'student_count'=>'43',
              'bus_coordinate'=>'Gokul-CSE',
              'time'=>'8.00 AM'
            ],
            [
              'id'=>'9',
              'Bus_No'=>'B23',
              'Pickup_point'=>'T.Pet',
              'student_count'=>'48',
              'bus_coordinate'=>'vikram-EEE',
              'time'=>'8.00 AM'
            ],
            /*[
              'id'=>'',
              'Bus_No'=>'',
              'Pickup_point'=>'',
              'student_count'=>'',
              'bus_coordinate'=>'',
              'time'=>''
            ],*/
        ];
        DB::table('bus')->insert($Bus);
    }
}
