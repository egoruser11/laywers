<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Topic;
use Database\Factories\ApplicationFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topics = [
            'Банкротство',
            'Финансы',
            'Мошеннечиство',
            'Имущество',
            'Недвижимость',
        ];

        $themes = [];

        for ($i = 0; $i < count($topics); $i++) {
            $themes[] = ['name' => $topics[$i]];
        }

        Topic::insert($themes);

    }
}
