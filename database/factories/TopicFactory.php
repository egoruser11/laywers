<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return string
     */


    public function definition()
    {
        $topics = Application::pluck('topic')->unique();
        for ($i = 0; $i < count($topics); $i++) {
            Topic::create()([
               'topicName' => $topics[$i],
               ]
           );

        }
    }


}
