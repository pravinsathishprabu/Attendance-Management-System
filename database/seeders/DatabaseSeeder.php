<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            StaffSeeder::class,
            StudentsSeeder::class,
            SubjectSeeder::class,
            AdminSeeder::class,
            //ttable::class
            busseeder::class,
            StudentBus::class
        ]);
    }
}
