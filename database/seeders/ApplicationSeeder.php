<?php

namespace Database\Seeders;

use App\Models\Application;
use Database\Factories\ApplicationFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::factory(10)->create();
//        Doctor::factory(100)->create();
    }
}
