<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Topic;
use App\Models\User;
use Database\Factories\ApplicationFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create(
            [
                'account' => User::STATUS_ACTIVE,
                'login' => User::ADMIN_ROLE,
                'password' => bcrypt('111111'),
                'name' => fake()->lastName,
                'role' => User::ADMIN_ROLE,
                'start_at' => now(),

            ]
        );
        User::create(
            [
                'account' => User::STATUS_ACTIVE,
                'login' => User::MANAGER_ROLE,
                'password' => bcrypt('111111'),
                'name' => fake()->lastName,
                'role' => User::MANAGER_ROLE,
                'start_at' => now(),

            ]
        );
        User::create(
            [
                'account' => User::STATUS_ACTIVE,
                'login' => User::LAWYER_ROLE,
                'password' => bcrypt('111111'),
                'name' => fake()->lastName,
                'role' => User::LAWYER_ROLE,
                'start_at' => now(),

            ]
        );
        User::factory(10)->create();
//        Doctor::factory(100)->create();
    }
}
