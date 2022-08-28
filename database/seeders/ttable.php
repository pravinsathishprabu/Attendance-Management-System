<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ttable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $classes=[
            [
              'id'=>'1',
              'year'=>'3',
              'sem'=>'6',
              'subject1'=>'BIG DATA ANALYSIS',
              'subject2'=>'SOFTWARE TESTING',
              'subject3'=>'COMPUTER GRAPHICS AND MULTIMEDIA',
              'subject4'=>'COMPUTATIONAL INTELLIGENCE',
              'subject5'=>'OBJECT ORIENTED ANALYSIS AND DESIGN',
              'subject6'=>'MOBILE COMMUNICATION',
              'lab1'=>'MOBILE APPLICATION DEVELOPMENT LABORATORY',
              'lab2'=>'OBJECT ORIENTED ANALYSIS AND DESIGN LABORATORY',
              'lab3'=>''
            ],
            [
              'id'=>'2',
              'year'=>'2',
              'sem'=>'4',
              'subject1'=>'COMPUTER ARCHITECTURE',
              'subject2'=>'DATABASE MANAGEMENT SYSTEM',
              'subject3'=>'DESIGN AND ANALYSIS OF ALGORITHM',
              'subject4'=>'OPERATING SYSTEMS',
              'subject5'=>'',
              'subject6'=>'',
              'lab1'=>'DATABASE MANAGEMENT SYSTEM LABORATORY',
              'lab2'=>'OPERATING SYSTEM LABORATORY',
              'lab3'=>''
            ],
        ];
        DB::table('classes')->insert($classes);
    }
}
