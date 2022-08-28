<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = [
            /*[
              'id'=>'',
              'sno'=>'',
              'name'=>'',
              'email'=>'',
              'password'=>bcrypt('mamcet123'),
              'rollno'=>'',
              'dept'=>'',
              'year'=>'',
              'sem'=>'',
            ],*/

            ];
         DB::table('users')->insert($student);
    }
}
