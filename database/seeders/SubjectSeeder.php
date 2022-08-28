<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject =[
            [
                'id'=>'1',
                'sub_code'=>'CS8091',
                'sub_name'=>'BIG DATA ANALYTICS',
                'sem'=>'VI',
                'dept'=>'IT',
                'yos'=>'III'
            ],
            [
                'id'=>'2',
                'sub_code'=>'IT8076',
                'sub_name'=>'SOFTWARE TESTING',
                'sem'=>'VI',
                'dept'=>'IT',
                'yos'=>'III'
            ],
            [
                'id'=>'3',
                'sub_code'=>'CS8092',
                'sub_name'=>'COMPUTER GRAPHICS AND MULTIMEDIA',
                'sem'=>'VI',
                'dept'=>'IT',
                'yos'=>'III'
            ],
            [
                'id'=>'4',
                'sub_code'=>'IT8601',
                'sub_name'=>'COMPUTATIONAL INTELLIGENCE',
                'sem'=>'VI',
                'dept'=>'IT',
                'yos'=>'III'
            ],
            [
                'id'=>'5',
                'sub_code'=>'CS8592',
                'sub_name'=>'OBJECT ORIENTED ANALYSIS AND DESIGN',
                'sem'=>'VI',
                'dept'=>'IT',
                'yos'=>'III'
            ],
            
            
             [
                'id'=>'6',
                'sub_code'=>'CS8491',
                'sub_name'=>'COMPUTER ARCHITECTURE',
                'sem'=>'IV',
                'dept'=>'IT',
                'yos'=>'II'
            ],      
            [
                'id'=>'7',
                'sub_code'=>'CS8492',
                'sub_name'=>'DATABASE MANAGEMENT SYSTEM',
                'sem'=>'IV',
                'dept'=>'IT',
                'yos'=>'III'
            ],
            [
                'id'=>'8',
                'sub_code'=>'CS8451',
                'sub_name'=>'DESIGN AND ANALYSIS OF ALGORITHM',
                'sem'=>'IV',
                'dept'=>'IT',
                'yos'=>'II'
            ],
             [
                'id'=>'9',
                'sub_code'=>'CS8493',
                'sub_name'=>'OPERATING SYSTEMS',
                'sem'=>'IV',
                'dept'=>'IT',
                'yos'=>'II'
            ],
            [
                'id'=>'10',
                'sub_code'=>'CS8481',
                'sub_name'=>'DATABASE MANAGEMENT SYSTEM LABORATORY',
                'sem'=>'IV',
                'dept'=>'IT',
                'yos'=>'II'
            ],
             [
                'id'=>'11',
                'sub_code'=>'CS8481',
                'sub_name'=>'OPERATING SYSTEM LABORATORY',
                'sem'=>'IV',
                'dept'=>'IT',
                'yos'=>'II'
            ], 
            [
                'id'=>'12',
                'sub_code'=>'CS8074',
                'sub_name'=>'CYBER FORENSICS',
                'sem'=>'VIII',
                'dept'=>'IT',
                'yos'=>'IV'
            ],
            [
                'id'=>'13',
                'sub_code'=>'IT8078',
                'sub_name'=>'WEB DESIGN AND MANAGEMENT',
                'sem'=>'VIII',
                'dept'=>'IT',
                'yos'=>'IV'
            ],
            [
                'id'=>'14',
                'sub_code'=>'IT8811',
                'sub_name'=>'PROJECT WORK',
                'sem'=>'VIII',
                'dept'=>'IT',
                'yos'=>'IV'
            ],
            [
                'id'=>'15',
                'sub_code'=>'CS8592',
                'sub_name'=>'OBJECT ORIENTED ANALYSIS AND DESIGN LABORATORY',
                'sem'=>'VI',
                'dept'=>'IT',
                'yos'=>'III'
            ],
            [
                'id'=>'16',
                'sub_code'=>'CS8662',
                'sub_name'=>'MOBILE APPLICATION DEVELOPMENT LABORATORY',
                'sem'=>'VI',
                'dept'=>'IT',
                'yos'=>'III'
            ],
            [
                'id'=>'17',
                'sub_code'=>'IT8602',
                'sub_name'=>'MOBILE COMMUNICATION',
                'sem'=>'VI',
                'dept'=>'IT',
                'yos'=>'III'
            ],
    ];
    DB::table('subject')->insert($subject);
    }
}
