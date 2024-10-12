<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Client;
use App\Models\Court;
use App\Models\Topic;
use Database\Factories\ApplicationFactory;
use Database\Factories\ClientFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory(10)->create();

    }
}
