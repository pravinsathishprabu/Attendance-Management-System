<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class StudentBus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentbus=[
            [
              'id'=>'1',
              'Bus_no'=>'B15',
              'Student1'=>'Rajesh',
              'Student2'=>'Muthuselvan',
              'Student3'=>'Jayavel',
              'Student4'=>'Pravin',
              'Student5'=>'Yuvaraj',
              'Student6'=>'Rama',
            ],
            [
              'id'=>'2',
              'Bus_no'=>'B16',
              'Student1'=>'Ram',
              'Student2'=>'Vimal',
              'Student3'=>'Virat',
              'Student4'=>'Dhoni',
              'Student5'=>'Pooja',
              'Student6'=>'Mani',
            ],
            [
              'id'=>'3',
              'Bus_no'=>'B17',
              'Student1'=>'Riyas',
              'Student2'=>'Muthuselvan',
              'Student3'=>'Jaya',
              'Student4'=>'Pradeep',
              'Student5'=>'Yuvi',
              'Student6'=>'Raj',
            ],
            [
              'id'=>'4',
              'Bus_no'=>'B18',
              'Student1'=>'Raj',
              'Student2'=>'Selvan',
              'Student3'=>'velu',
              'Student4'=>'Priya',
              'Student5'=>'Raja',
              'Student6'=>'Raman',
            ],
            [
              'id'=>'5',
              'Bus_no'=>'B19',
              'Student1'=>'Rambo',
              'Student2'=>'Muthu',
              'Student3'=>'Jaga',
              'Student4'=>'Viji',
              'Student5'=>'Swetha',
              'Student6'=>'Vincy',
            ],
            [
              'id'=>'6',
              'Bus_no'=>'B20',
              'Student1'=>'Apsar',
              'Student2'=>'Unish',
              'Student3'=>'Bhargav',
              'Student4'=>'Nithish',
              'Student5'=>'Vikram',
              'Student6'=>'Rama',
            ],
            [
              'id'=>'7',
              'Bus_no'=>'B21',
              'Student1'=>'Renu',
              'Student2'=>'Reshma',
              'Student3'=>'Raji',
              'Student4'=>'Sangavi',
              'Student5'=>'Kavin',
              'Student6'=>'Ganesh',
            ],
            [
              'id'=>'8',
              'Bus_no'=>'B22',
              'Student1'=>'Siva',
              'Student2'=>'Mani',
              'Student3'=>'Dinesh',
              'Student4'=>'Mahesh',
              'Student5'=>'Yogesh',
              'Student6'=>'Yogi',
            ],
            [
              'id'=>'9',
              'Bus_no'=>'B23',
              'Student1'=>'Stalin',
              'Student2'=>'Neru',
              'Student3'=>'Ganthi',
              'Student4'=>'Chandru',
              'Student5'=>'Panneer',
              'Student6'=>'Annakili',
            ],
        ];
        DB::table('studentbus')->insert($studentbus);
    }
}
