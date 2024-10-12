<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     */


    public function definition()
    {

        $statuses = array_keys(User::getStatusesOfAccount());
        $roles = array_keys(User::getRoles());

        return [
            'account' => fake()->randomElement($statuses),
            'login' => fake()->word,
            'password' => bcrypt("111111"),
            'name' => fake()->lastName,
            'role' => fake()->randomElement($roles),
            'start_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ];


    }


}
