<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Court;
use App\Models\Topic;
use Database\Factories\ApplicationFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now()->toDateTimeString();

        $courts = [];
        for ($i = 0; $i < 10; $i++) {
            $courts[] = ['name' => 'Суд №' . " " . $i, 'created_at' => $now, 'updated_at' => $now];
        }

        Court::insert($courts);
    }
}
