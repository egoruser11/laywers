<?php

namespace Database\Factories;

use App\Models\Application;
use App\Models\Client;
use App\Models\Court;
use App\Models\Topic;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return string
     */


    private function generateRandomPhoneNumber()
    {
        $areaCode = rand(100, 999); // Код региона
        $centralOfficeCode = rand(100, 999); // Центральный офис
        $lineNumber = rand(1000, 9999); // Номер абонента
        return "8 $areaCode $centralOfficeCode-$lineNumber";

    }



    public function definition()
    {

        $statuses = array_keys(Application::getStatuses());
        $types = array_keys(Application::getTypes());
        $topicIds = Topic::orderBy('id')->pluck('id')->toArray();
        $courts = Court::orderBy('id')->pluck('name')->toArray();
        $lawyersIds = User::where('role',User::LAWYER_ROLE)->orderBy('id')->pluck('id')->toArray();
        $managersIds = User::where('role',User::MANAGER_ROLE)->orderBy('id')->pluck('id')->toArray();
        $strDate = '11.12.2021';
        $date = Carbon::createFromFormat('d.m.Y', $strDate);
        $timeArr = ['11.00' , '12.00' , '13.00','14.00','15.00'];
        $work_start_str = $strDate . ' ' . $timeArr[mt_rand(0, count($timeArr)-1 )];
        $workStart = Carbon::create($work_start_str);



        return [
            'start_at' => now(),
            'status' => fake()->randomElement($statuses),
            'name' => fake()->lastName,
            'phone' => $this->generateRandomPhoneNumber(),
            'topic_id' => fake()->randomElement($topicIds),
            'government_agency' => fake()->randomElement($courts),
            'application_type' => fake()->randomElement($types),
            'meeting_date' => $date,
            'work_start_date_and_time'=> $workStart,
            'count_hours_work'=> mt_rand(3,7),
            'price' => mt_rand(10000,100000),
            'manager_notes' => fake()->text,
            'client_id' => null,
            'manager_id' => fake()->randomElement($managersIds),
            'lawyer_id' => fake()->randomElement($lawyersIds),
            'description' => fake()->text,
            'created_at' => now(),
            'updated_at' => now(),
        ];


    }



}
