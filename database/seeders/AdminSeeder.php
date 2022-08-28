<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=[
            [
              'id'=>'1',
              'name'=>'Admin-IT',
              'email'=>'admin.it@mamcet.com',
              'password'=>bcrypt('Admin123'),
            ],
        ];
        DB::table('admin')->insert($admin);
    }
}
