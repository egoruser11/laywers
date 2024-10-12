<?php

namespace Database\Seeders;

use App\Models\Application;
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
        $this->call([ClientSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([TopicSeeder::class]);
        $this->call([CourtSeeder::class]);
        $this->call([ApplicationSeeder::class]);

    }
}
